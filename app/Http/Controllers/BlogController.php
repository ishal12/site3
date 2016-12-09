<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
    public function getBerita(){

    	$posts= Post::orderBy('id', 'desc')->where('kategoriid', 1)->paginate(1);
    	$events= Post::orderBy('id', 'desc')->where('kategoriid', 2)->paginate(1);
        return view('welcome')->withPosts($posts)->withEvents($events);
    }
}
