<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function getAdmin(Request $request){
        return 'Helo Menu Admin';
    }
    function getUser(Request $request){
        return 'Helo Menu User';
    }

}
