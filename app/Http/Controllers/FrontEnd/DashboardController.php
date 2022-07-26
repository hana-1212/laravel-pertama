<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(Request $request){
        // dd(auth()->user()->email);
        return view('frontend.dashboard.index');
    }
}
