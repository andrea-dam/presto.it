<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index ($id) {
        $category = Category::find($id);
        // $items = Item::all()->category()->id;
        return view('category.index', compact('category'));
    }
}
