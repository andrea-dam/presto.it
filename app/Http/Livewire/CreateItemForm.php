<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\WaterMark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateItemForm extends Component
{
    use WithFileUploads;

    public $title, $category, $description, $price, $temporary_images, $images = [], $previewKey = 0;

    protected $rules = [
        'title' => 'required|min:2|max:30',
        'category' => 'required',
        'description' => 'required|min:2',
        'price' => 'required|regex:/^[0-9\.,]+$/|not_in:0',
        'images.*' => 'image|required|max:2048',
        'temporary_images.*' => 'image|required|max:2048',
    ];
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=> 'image|required|max:2048',
            ])){
                foreach($this->temporary_images as $image){
                    $this->images[] = $image;
                }
            }
    }

  

    public function selectPreview($key){
        $this->previewKey = $key;
        }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

 

    public function store(){
        $numFormat = str_replace(",",".",$this->price);
        $secondFloatRound = number_format((float)$numFormat, 2);

        $this->validate();

        $item = Item::create([
            'title' => $this->title,
            'category_id' => $this->category,
            'description' => $this->description,
            'price' => $secondFloatRound,
            'user_id' => Auth::user()->id
        ]);

        
        
        if(count($this->images)){
            $previewImage = $this->images[$this->previewKey];
            if(in_array($this->previewKey, array_keys($this->images))){
                unset($this->images[$this->previewKey]);
            }
            array_unshift($this->images,$previewImage);
            foreach($this->images as $image){
                
                
                // dd($this->images);
                $newFileName = "items/{$item->id}";
                
                $newImage = $item->images()->create(['path'=>$image->store($newFileName, 'public')]);
                
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 1200, 900),
                    new ResizeImage($newImage->path, 900, 1200),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    // new WaterMark($newImage->id),
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('itemCreated', 'Hai inserito con successo il tuo annuncio!');
        $this->reset();
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-item-form', compact('categories'));
    }
}
