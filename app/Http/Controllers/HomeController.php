<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $name="Niyaz";
        return view('home');
    }
    /**
     * Registration function
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        echo "for registration view";

    }
}
