<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateItemForm extends Component
{

    public $title, $category, $description;

    protected $rules = [
        'title' => 'required|min:2',
        'category' => 'required',
        'description' => 'required|min:2'
    ];
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){

        // $itemCategory = Category::find($this->category);
        // dd($itemCategory);
        $this->validate();

        $item = Item::create([
            'title' => $this->title,
            'category_id' => $this->category,
            'description' => $this->description,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('itemCreated', 'Hai inserito con successo il tuo annuncio!');
        $this->reset();
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-item-form', compact('categories'));
    }
}
