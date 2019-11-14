<?php

namespace App\Http\Controllers;

use App\Job;
use App\Mail\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function ship(Request $request)
    {
        $job = Job::findOrFail('title');

        Mail::to($request->user())->send(new JobPosted($job));
    }
}
