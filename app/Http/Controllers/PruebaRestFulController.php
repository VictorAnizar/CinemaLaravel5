<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class PruebaRestFulController extends Controller
{
     public function index()
    {
    	return "Hola desde index";
    }
    public function create()
    {
    	return "Hola desde create";
    }
}
