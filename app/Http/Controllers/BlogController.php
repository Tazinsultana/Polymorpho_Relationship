<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Vidioes;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function Blog()
    {

        $post = Vidioes::with('comments')->get();
        return $post;
    }
}
