<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Sale;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    public function oneToMany()
    {
        //return Post::find(11)->comments;
        //return Comment::find(1)->post;
        //$posts = Post::withCount('comments')->get();
        $comments = Comment::with('post')->get();
        return view('relationship.one-many', compact('comments'));
    }

    public function manyToMany()
    {
        return $products = Category::find(2)->products;
        return view('relationship.many-to-many', compact('products'));
    }

    public function hasManyThrough()
    {
        //return $products = Sale::find(2)->saleProducts;
        $saleReturnedProducts = Sale::find(2)->saleReturnedProducts;
        //return $returnedProducts = Sale::withCount('saleReturnedProducts')->get();
         $returned_quantity = Sale::withSum('saleReturnedProducts', 'returned_quantity')->get();
        //return $returned_max_quantity = Sale::withMax('saleReturnedProducts', 'returned_quantity')->get();

        return view('relationship.has-Many-Through', compact('saleReturnedProducts'));
    }
}
