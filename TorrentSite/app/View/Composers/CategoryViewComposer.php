<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryViewComposer
{
    public function compose(View $view)
    {
        $categories = Category::orderBy('id')->get();
        $view->with('categories', $categories);
    }
}
