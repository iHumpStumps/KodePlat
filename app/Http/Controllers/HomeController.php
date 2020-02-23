<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home/home');
    }

    public function about() {
        return view('home/about');
    }

    public function service() {
        return view('home/service');
    }

    public function contact() {
        return view('home/contact');
    }
}
