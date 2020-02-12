<?php

namespace APP\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
    public function index(){
        return view('view.blade.php');
    }    
}