<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class GetCategoryController extends Controller
{
    public function get(){
        $categories = Category::query()
            ->where('id', '>=', '4')
            ->where('id', '<=', '7')->get();
        return view('category.index', ['categories' => $categories]);
    }
}
