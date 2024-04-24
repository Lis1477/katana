<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Item;
use App\Category;

class CategoryComposer
{
    public function compose(View $view) {

    	// собираем 1c_id категорий, где Катана
    	$category_id = Item::where([['1c_category_id', '!=', 0], ['1c_category_id', '!=', 3149], ['name', 'like', '%katana%']])
    		->distinct('1c_category_id')
    		->get(['1c_category_id'])
    		->toArray();

    	// собираем категории 
    	$cats = Category::whereIn('1c_id', $category_id)->orderBy('name')->get(['name', 'slug', '1c_id']);

        return $view->with('cats', $cats);
    }
}