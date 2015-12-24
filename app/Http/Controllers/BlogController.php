<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tweet;

class BlogController extends Controller
{
    public function create(Request $request) {
    	$tweet = $request->input('tweet');
    	return $tweet;
    }
    public function getall() {
    	$tweets = Tweet::all();
    	return json_encode($tweetarr);
    }
}
