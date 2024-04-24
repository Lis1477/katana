<?php

namespace App\Http\Controllers;

class PartnerPageController extends Controller
{
    public function index() {

    	$title = "Стать партнёром";
    	$description = "Чтобы стать нашим дилером, необходимо: быть зарегистрированым в качестве юридического лица или Индивидуального Предпринимателя, владеть либо арендовать офис и склад, владеть либо арендовать розничную торговую точку и/или владеть интернет-магазином, иметь опыт продаж инструмента или огромное желание начать его продавать";
    	$ur_1['name'] = "Стать партнёром";

    	return view('partner_page', compact('title', 'description', 'ur_1'));
    }
}
