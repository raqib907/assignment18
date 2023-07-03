<?php

namespace App;

global $categoryId;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}
// Retrieve all posts belonging to a category
$category = Category::find(1);
$posts = $category->posts;


$category = Category::find($categoryId); // Replace $categoryId with the desired category ID
$latestPost = $category->latestPost;

if ($latestPost) {
    // Access the latest post
    echo "Latest Post Title: " . $latestPost->title . "\n";
    echo "Latest Post Content: " . $latestPost->content . "\n";
    // ...
} else {
    echo "No posts found for the category.";
}
