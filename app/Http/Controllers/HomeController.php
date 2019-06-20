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
      // $v = Validator::make($_POST,[
      //   'pick_up_location_id' => 'required',
      //   'pick_up_date' => 'required|date',
      //   'drop_off_location_id' => 'required',
      //   'drop_off_date' => 'required|date'
      // ]);
      // if($v->fails()){
      //   return redirect()->route('home.index');
      // }
      $categories = Category::all();
      return view('home/categories')->withCategories($categories);

    }
}
