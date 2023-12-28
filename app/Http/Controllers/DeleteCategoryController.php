<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DeleteCategoryController extends Controller
{
    public function delete(){
        $category = Category::latest()->first();
        $category->delete();
        $categories = Category::get();
        return view('category.index', ['categories' => $categories]);
    }
}
