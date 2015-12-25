<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tweet;

class BlogController extends Controller
{
	//insert a tweet
    public function create(Request $request) {
    	$tweet = $request->input('tweet');
    	$newTweet = new Tweet;
    	$newTweet->tweet = $tweet;
    	$newTweet->save();
    }
    //retrieve all tweets
    public function getall() {
    	return Tweet::all();
    }
    //delete a specific tweet
    public function delete(Request $request) {
    	$id = $request->input('id');
    	$spec = Tweet::find($id);
    	$spec->delete();
    }
    //edit a tweet
    public function edit(Request $request) {
    	$id = $request->input('id');
    	$editedtweet = $request->input('tweet');
    	$spec = Tweet::find($id);
    	$spec->tweet = $editedtweet;
    	$spec->save();
    } 
}
