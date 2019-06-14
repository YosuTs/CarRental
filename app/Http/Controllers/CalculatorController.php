<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
      //$name = 'Yosu';
      //$
      //return view('saludo')->with('name', $name);
      //return view('saludo')->withName($name);
      $categories = \App\Category::paginate(1);
      return view('saludo')->withCategories($categories);
    }
}
