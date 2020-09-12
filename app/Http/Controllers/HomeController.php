<?php

namespace App\Http\Controllers;
use App;

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

    public function index()
    {
        return view('index');
    }

    public function switchLang($lang)
    {   
        App::setLocale($lang);
        return view('index');
    }
}
