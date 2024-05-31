<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
    $category = $request->only(['content']);
        Category::create($category);
    }
}
