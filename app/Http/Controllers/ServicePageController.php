<?php

namespace App\Http\Controllers;
use App\Page;

class ServicePageController extends Controller
{
    public function index() {

        $services = Page::find(23);

    	$title = "Сервис";
    	$description = "Мы осуществляем гарантийную поддержку строительной и садовой техники, электроинструмента и бытовых приборов торговой марки KATANA. В течение гарантийного срока владелец имеет право на бесплатный ремонт изделия по неисправностям, являющимися следствием производственных дефектов.";
    	$ur_1['name'] = "Сервис";

    	return view('service_page', compact('title', 'description', 'ur_1', 'services'));
    }
}
