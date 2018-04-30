<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
   
    public function __construct()
    {
        
    }

    
    public function index()
    {
        return view('home');
    }

   
}
