<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
