<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){
        $items = Item::all();
        return view('homepage', compact('items'));
    }
}
