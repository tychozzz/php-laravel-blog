<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Topic;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $topics = Topic::where('category_id', $category->id)->paginate(20);
        return view('topics.index', compact('topics', 'category'));
    }
}
