<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Job::all();
        return view('home')->with('jobs',$jobs);
    }

    public function create()
    {
        return view('form');
    }

    public function post(Request $request)
    {
        Job::create([
           'title' => $request->title,
           'description' => $request->description,
           'email' => $request->email
        ]);

        return redirect('/home');
    }
}
