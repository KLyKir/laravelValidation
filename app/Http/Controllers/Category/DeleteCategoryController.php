<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteCategoryController extends Controller
{
    public function __invoke(){
        $category = Category::latest()->first();
        $category->delete();
        $categories = Category::get();
        return view('category.index', ['categories' => $categories]);
    }
}
