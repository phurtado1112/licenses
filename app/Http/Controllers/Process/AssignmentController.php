<?php

namespace App\Http\Controllers\Process;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAsignationRequest;
use App\Http\Requests\UpdateAsignationRequest;
use App\Models\Process\Assignment;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAsignationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsignationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process\Assignment  $asignation
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $asignation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process\Assignment  $asignation
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $asignation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsignationRequest  $request
     * @param  \App\Models\Process\Assignment  $asignation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsignationRequest $request, Assignment $asignation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process\Assignment  $asignation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $asignation)
    {
        //
    }
}
