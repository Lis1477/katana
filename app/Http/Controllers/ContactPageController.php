<?php

namespace App\Http\Controllers;

class ContactPageController extends Controller
{
    public function index() {

    	$title = "Контакты";
    	$description = "";
    	$ur_1['name'] = "Контакты";

    	return view('contact_page', compact('title', 'description', 'ur_1'));
    }
}
