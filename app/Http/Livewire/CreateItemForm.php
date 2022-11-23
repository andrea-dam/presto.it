<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateItemForm extends Component
{

    public $title, $category, $description, $price;

    protected $rules = [
        'title' => 'required|min:2',
        'category' => 'required',
        'description' => 'required|min:2',
        'price' => 'required|regex:/^[0-9\.,]+$/|not_in:0'
    ];
    
    public function updated($propertyName){
        
        $this->validateOnly($propertyName);
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

        session()->flash('itemCreated', 'Hai inserito con successo il tuo annuncio!');
        $this->reset();
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-item-form', compact('categories'));
    }
}
