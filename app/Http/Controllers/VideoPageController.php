<?php

namespace App\Http\Controllers;

use App\Item;

class VideoPageController extends Controller
{
    public function index()
    {
    	$title = "Видеообзоры KATANA";
    	$description = "";
    	$ur_1['name'] = "Видеообзоры";

    	$videos = Item::where([['name', 'like', '%katana%'], ['youtube', '!=', '']])
    		->orderBy('name')
    		->get(['name', 'more_about', 'youtube']);

    	foreach ($videos as $video) {

    		if(stripos($video->youtube, 'be/') === false) {
    			$video->youtube = explode('?v=', $video->youtube)[1];
    		} else {
    			$video->youtube = explode('be/', $video->youtube)[1];
    		}

    		$video->name = explode('(', $video->name)[0];
    	}

    	return view('video_page', compact('title', 'description', 'ur_1', 'videos'));
    }
}
