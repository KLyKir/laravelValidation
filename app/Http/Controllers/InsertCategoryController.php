<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class InsertCategoryController extends Controller
{
    public function insert(){
        for($i = 0; $i < 10; $i++){
            $category = new Category();
            $category->name = "name".$i;
            $category->description = "description".$i;
            $category->save();
        }
        $categories = Category::get();
        return view('category.index', ['categories' => $categories]);
    }
}
