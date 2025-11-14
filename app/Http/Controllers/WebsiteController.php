<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
  public function index()
  {
    $random_numbers = rand(10,10);
    
    return view('home', compact('random_numbers'));
  }
}
