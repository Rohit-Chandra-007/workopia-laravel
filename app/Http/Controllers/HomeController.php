<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use App\Models\Job;

class HomeController extends Controller
{
    //
    public function index(): View
    {
        $jobs = Job::latest()->limit(6)->get();
        return view('pages.index', compact('jobs'));
    }
}
