<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class CategoryController extends Controller
{
    public function index(Request $request, $id, $slug=Null) {

    	$cat_name = Category::where('1c_id', $id)->first(['name', 'slug']);

    	$items = Item::where([['1c_category_id', $id], ['name', 'like', '%katana%']])
    		->orderBy('name')
    		->with('images')
    		->get(['1c_id', 'name', 'more_about', 'slug']);

    	$title = "Продукция бренда Katana";
    	$description = "";
    	$ur_1['name'] = "Продукция";
    	$ur_1['slug'] = "produktsiya";
    	$ur_2['name'] = $cat_name->name;
    	$ur_2['slug'] = $cat_name->slug;

    	return view('category_page', compact('items', 'title', 'description', 'ur_1', 'ur_2'));
    }
}
