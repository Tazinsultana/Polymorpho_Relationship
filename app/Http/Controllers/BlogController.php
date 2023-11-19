<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Vidioes;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function Blog()
    {

        $post = Posts::with('comments')
        ->whereHas('comments')
        ->get();
        return $post;
    }
}
