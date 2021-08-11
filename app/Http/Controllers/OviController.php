<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OviController extends Controller
{
   public function index()
    {
    	return view('index');
    }

    public function ridoy()
    {
    	return view('ridoy');
    }
      public function register()
    {
    	return view('register');
    }
}
