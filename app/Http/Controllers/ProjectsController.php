<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $projects = Projects::where('users_id', $user_id)->orderBy('status', 'desc')->paginate(10);;
        return view('viewsInternals.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $project = new Projects();
        // $project->name = 'Nombre del proyecto';
        // $project->companies_id = 1;
        // $project->cities_id = 1;
        // $project->users_id = 1;
        // $project->budget = "50000";
        // $project->start_date = '2020-04-30';
        // $project->compliance_date = '2021-04-30';
        // $project->is_active = 1;
        // $project->save();

        // return "Guardado";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
