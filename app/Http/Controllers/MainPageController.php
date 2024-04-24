<?php

namespace App\Http\Controllers;

use App\BrandShop;

class MainPageController extends Controller
{
    public function index() {

    	$title = "Katana";
    	$description = "";

        $addresses = BrandShop::where('brand_1c_id', 1)->get();

    	return view('main_page', compact('title', 'description', 'addresses'));
    }
}
