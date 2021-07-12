<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Job;

class ShowJobController extends Controller
{
    public function index() {
        $jobs = DB::table('jobs')->select('id','title','description','position','location')->get();
        return view('show-jobs',compact('jobs'));
    }

}
