<?php

namespace App\Http\Controllers;

use \App\Category;
use \App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
      $categories = Category::all();
      return view('cars.create')->withCategories($categories);
    }
    public function store(Request $request)
    {
      //dd($request);
      Car::create($request->all());
      return redirect()->route('cars.show');
      //header('Location: http://localhost:8000/cars/show');
    }
    public function show()
    {
      $cars = Car::all();
      return view('cars.show')->withCars($cars);
    }
    public function delete()
    {

    }
}
