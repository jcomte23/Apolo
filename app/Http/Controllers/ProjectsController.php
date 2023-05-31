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
        $projects = Projects::all();
        return view('viewsInternals.projects.index', compact('projects'));
        // $id=4;
        // $project = Projects::find($id);
        // $project->name = 'Proyecto de tecnología';
        // $project->save();

        // return "Actualizado";

        // $project = new Projects();
        // $project->name = 'remodelacion local Falabela';
        // $project->companies_id = 1;
        // $project->cities_id = 1;
        // $project->users_id = 1;
        // $project->budget = "50000";
        // $project->start_date = '2020-04-30';
        // $project->compliance_date = '2021-04-30';
        // $project->status = 1;
        // $project->save();

        // return "Guardado";

        // Companies::chunk(200, function ($companies) {
        //     foreach ($companies as $company) {
        //         //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
        //         echo $company->name . "<br>";
        //     }
        // });
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
