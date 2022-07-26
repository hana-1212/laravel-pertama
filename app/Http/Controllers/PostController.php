<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost(Request $request)
    {
        // dd($request->all()); //dd itu di php echo
        // dd($request->judul);
        return view('post.index');
    }
}
