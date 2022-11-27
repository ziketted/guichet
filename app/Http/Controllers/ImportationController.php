<?php

namespace App\Http\Controllers;

use App\Models\Importation;
use App\Http\Requests\StoreImportationRequest;
use App\Http\Requests\UpdateImportationRequest;

class ImportationController extends Controller
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
     * @param  \App\Http\Requests\StoreImportationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImportationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function show(Importation $importation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function edit(Importation $importation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImportationRequest  $request
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImportationRequest $request, Importation $importation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Importation  $importation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Importation $importation)
    {
        //
    }
}
