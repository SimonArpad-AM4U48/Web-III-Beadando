<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category){
        $torrents = $category->torrents()->orderBy('created_at', 'desc')->paginate(10);
        return view('category.show')->with(['category' => $category, 'torrents' => $torrents]);
    }
}
