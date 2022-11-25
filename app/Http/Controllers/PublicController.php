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

    public function searchItems(Request $request) {
        $items = Item::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('item.index', compact('items'));
    }
}
