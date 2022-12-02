<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PublicController extends Controller
{
    public function homepage() {
        $items = Item::where('is_accepted', true)->orderBy('created_at', 'DESC')->take(4)->get();
        return view('homepage', compact('items'));
    }

    public function searchItems(Request $request) {
        $items = Item::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('item.index', compact('items'));
    }

    public function setLanguage($lang) {
        session()->put('locale', $lang);
    //    $newLanguage= session('locale', $lang);
    //     App::setLocale($newLanguage);
        return redirect()->back();

    }
}
