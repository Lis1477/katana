<?php

namespace App\Http\Controllers;
use App\BrandShop;


class ShopsPageController extends Controller
{
    public function index()
    {
    	$title = "Где купить KATANA";
    	$description = "";
    	$ur_1['name'] = "Где купить";

        // собираем сайты
        $sites = BrandShop::where([['brand_1c_id', 1], ['site_url', '!=', '']])->get(['site_url', 'logo_file'])->unique('site_url')->values();

        // собираем адреса
        $addresses = BrandShop::where('brand_1c_id', 1)->get();

        // dd($sites);

    	return view('our_shops_page', compact('title', 'description', 'ur_1', 'sites', 'addresses'));
    }
}
