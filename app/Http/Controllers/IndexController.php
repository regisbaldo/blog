<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function index()
    {
      

        return view('index')->with(['posts' =>   Post::all()]);
    }
}
