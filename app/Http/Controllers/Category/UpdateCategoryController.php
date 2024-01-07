<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class UpdateCategoryController extends Controller
{
    public function update(){
        $category = Category::query()->find(5);
        $category->name = 'nameUpdate';
        $category->description = 'descriptionUpdate';
        $category->save();
        $categories = Category::get();
        return view('category.index', ['categories' => $categories]);
    }
}
