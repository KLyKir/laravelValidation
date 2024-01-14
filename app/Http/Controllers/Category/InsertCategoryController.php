<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class InsertCategoryController extends Controller
{
    public function __invoke(){
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
