<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public static function getCategory(){
    // Retrieve a model instance
    $category = self::find(1);

    // Call the thanks macro
    $message = self::thanks()($category);

    // Output the result
    return $message;
   }
}
