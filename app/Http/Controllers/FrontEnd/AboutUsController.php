<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        // $listData = DB::table('teams')->get(); // select * from teams
        // dd($listData); // untuk echo
        $listdata = Teams::all();

        return view('frontend.about-us.index',[
            'list_team'=> $listdata
        ]);
    }

    public function detail(Request $request,$id)
    {
        $team = Teams::FindOrFail($id);
        return view('frontend.about-us.detail',[
            'data' => $team
        ]);
    }
}
