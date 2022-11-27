<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Enrolement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEnrolementRequest;
use App\Http\Requests\UpdateEnrolementRequest;

class EnrolementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $enrolement= Enrolement::where('user_id',  auth()->user()->id)->get();
        return view('enrolement.index', ['enrolements'=>$enrolement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreEnrolementRequest $request, Enrolement $enrolement)
    {
        //
        if ($request->hasFile('lettre')) {

            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);


        }
        if ($request->hasFile('autre_document')) {

            $file = $request->file('autre_document');
            $filename = uniqid() . '_bordereau_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);


        }


        $enrolement = auth()->user()->enrolementUser()->create($request->all());
        $enrolement->save();
        return redirect()->route('enrolement.index')->with('save', 'Opération effectuée avec succès.');;



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnrolementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        return view('enrolement.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function show(Enrolement $enrolement)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrolement $enrolement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnrolementRequest  $request
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnrolementRequest $request, Enrolement $enrolement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrolement $enrolement)
    {
        //
    }
}
