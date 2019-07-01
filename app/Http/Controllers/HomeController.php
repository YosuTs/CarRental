<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Category;
use Validator;
use App\Http\Requests\ListAvailableCategoriesRequest;

class HomeController extends Controller
{
    public function index()
    {
      $locations = Location::all();
      return view('home.index')->withLocations($locations);
    }

    public function show_categories(ListAvailableCategoriesRequest $request)
    {
      $categories = Category::all();
      return view('home/categories')->withCategories($categories);

    }
}
