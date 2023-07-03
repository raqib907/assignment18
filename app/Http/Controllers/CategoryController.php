<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function latestPosts()
    {
        $categories = Category::with('latestPost')->get();

        return view('latest_posts', compact('categories'));
    }
}
