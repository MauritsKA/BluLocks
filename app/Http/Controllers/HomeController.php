<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
      
    public function index()
    {
        return view('home');
    }

    public function tech()
    {
        return view('tech');
    }

     public function team()
    {
        return view('team');
    }

   
}
