<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateItemForm extends Component
{

    public $title, $category, $description;

    protected $rules = [
        'title' => 'required|min:2',
        'category' => 'required|min:2',
        'description' => 'required|min:2'
    ];
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){

        $this->validate();

        $item = Item::create([
            'title' => $this->title,
            'category' => $this->category,
            'description' => $this->description,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('itemCreated', 'hai creato con successo il tuo annuncio!');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.create-item-form');
    }
}
