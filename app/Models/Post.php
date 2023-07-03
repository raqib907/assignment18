<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ...

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function countByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
    use SoftDeletes;

    // ...

    public static function getSoftDeletedPosts()
    {
        return self::withTrashed()->get();
    }
}

// Retrieve the category associated with a post
$post = Post::find(1);
$category = $post->category;

$posts = Post::with('category')->get();

foreach ($posts as $post) {
    // Access the post and its associated category
    echo "Post Title: " . $post->title . "\n";
    echo "Category: " . $post->category->name . "\n";
    echo "\n";
}
$categoryId = 1; // Replace with the desired category ID
$count = Post::countByCategory($categoryId);

echo "Total posts in the category: " . $count;


$softDeletedPosts = Post::getSoftDeletedPosts();
