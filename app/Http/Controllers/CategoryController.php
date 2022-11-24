<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index ($id) {
        $category = Category::find($id);
        // $items = Item::orderBy('created_at', 'DESC')->get();
        return view('category.index', compact('category'));
    }
}
