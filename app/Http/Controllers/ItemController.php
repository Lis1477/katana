<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class ItemController extends Controller
{
    public function index(Request $request, $cat_slug, $id, $item_slug=Null ) {

    	$cat_name = Category::where('slug', $cat_slug)->first(['1c_id', 'name', 'slug']);

    	$item = Item::where('1c_id', $id)
    		->with('images')
    		->first();

    	$title = $item->name;
    	$description = "";
    	$ur_1['name'] = "Продукция";
    	$ur_1['slug'] = "produktsiya";
    	$ur_2['name'] = $cat_name->name;
    	$ur_2['id'] = $cat_name->{'1c_id'};
    	$ur_2['slug'] = $cat_name->slug;
    	$ur_3['name'] = $item->name;

    	return view('item_page', compact('item', 'title', 'description', 'ur_1', 'ur_2', 'ur_3'));
    }
}
