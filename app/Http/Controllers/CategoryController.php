<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  public function index(){
    $category = Category::getCategory();
    return response()->json([
        'message'=>$category,
    ]); // Output: "Greetings, dear [User Name]!"
  }
}
