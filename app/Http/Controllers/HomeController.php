<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $promotions = \App\Promotion::all();
        return view('home.home')->with('promotions', $promotions);
    }

   
}
