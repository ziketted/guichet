<?php

namespace App\Http\Controllers;

use App\Models\Requerant;
use App\Http\Requests\StoreRequerantRequest;
use App\Http\Requests\UpdateRequerantRequest;

class RequerantController extends Controller
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
     * @param  \App\Http\Requests\StoreRequerantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequerantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requerant  $requerant
     * @return \Illuminate\Http\Response
     */
    public function show(Requerant $requerant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requerant  $requerant
     * @return \Illuminate\Http\Response
     */
    public function edit(Requerant $requerant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequerantRequest  $request
     * @param  \App\Models\Requerant  $requerant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequerantRequest $request, Requerant $requerant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requerant  $requerant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requerant $requerant)
    {
        //
    }
}
