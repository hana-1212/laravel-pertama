<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAuthorController extends Controller
{
    function getListAuthor(Request $request){
        $data = Author::all();


        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $data
        ],200); // http response code

    }
}
