<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    //
    public function index()
    {
    	return view('index');
    }
    public function contacto()
    {
    	return view('contacto');
    }
    public function reviews()
    {
    	return view('reviews');
    }
}
