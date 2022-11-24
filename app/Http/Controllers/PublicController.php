<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $items = Item::orderBy('created_at', 'DESC')->take(4)->get();
        return view('homepage', compact('items'));
    }
}
