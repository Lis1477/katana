<?php

namespace App\Http\Controllers;

class ProductsPageController extends Controller
{
    public function index() {

    	$title = "Продукция бренда Katana";
    	$description = "";
    	$ur_1['name'] = "Продукция";

    	return view('products_page', compact('title', 'description', 'ur_1'));
    }
}
