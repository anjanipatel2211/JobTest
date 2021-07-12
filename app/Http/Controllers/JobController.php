<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use DB;


class JobController extends Controller
{
    public function addjob()
    {
        return view('admin.add-job');
    }

    public function postAddJob(Request $request)
    {  
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'position' => 'required',
            'location' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("add-job");
    }

    public function create(array $data)
    {
      return Job::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'position' => $data['position'],
            'location' => $data['location'],
      ]);
    }
}
