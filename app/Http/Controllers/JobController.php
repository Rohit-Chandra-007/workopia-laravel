<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = [
            "Backend Developer",
            "Frontend Developer",
            "Fullstack Developer",
            "DevOps Engineer",
        ];

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $location = $request->input('location');
        $salary = $request->input('salary');
        $jobtype = $request->input('type');

        return "Job $name has been created with description $description, location $location, salary $salary, and job type $jobtype";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //
        return view('jobs.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        //
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        //
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        //
        return 'destroy';
    }
}
