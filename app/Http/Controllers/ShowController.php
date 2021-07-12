<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class ShowController extends Controller
{
    public function search(Request $request)
    {

        $key = trim($request->get('q'));

        $jobs = Job::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('location', 'like', "%{$key}%")
            ->get();

        return view('search', [
            'key' => $key,
           
        ]);
    }
}
