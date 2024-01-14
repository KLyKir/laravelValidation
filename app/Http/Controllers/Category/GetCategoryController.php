<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class GetCategoryController extends Controller
{
    public function __invoke(){
        $categories = Category::query()
            ->where('id', '>=', '4')
            ->where('id', '<=', '7')->get();
        return view('category.index', ['categories' => $categories]);
    }
}
