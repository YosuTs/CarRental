<?php
namespace App\Http\Controllers;

use \App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function index()
  {
    //$categories = \App\Category::paginate(1);
    $categories = Category::all();
    return view('categories/index')->withCategories($categories);
  }
}
