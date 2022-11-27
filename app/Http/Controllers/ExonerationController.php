<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Exoneration;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExonerationRequest;
use App\Http\Requests\UpdateExonerationRequest;

class ExonerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exoneration= Exoneration::where('user_id',  auth()->user()->id)->get();
        return view('exoneration.index', ['exonerations'=>$exoneration]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Exoneration $exoneration)
    {
        //
        if ($request->hasFile('lettre')) {

            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->autre_document=$filename;
        }
        if ($request->hasFile('autre_document')) {

            $file = $request->file('autre_document');
            $filename = uniqid() . '_bordereau_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre=$filename;
        }
        $now = new DateTime();
        $year = $now->format("Y");
        $exoneration->lettre=$request->lettre;
        $exoneration->autre_document=$request->autre_document;
        $exoneration->validite=$year+2;
        $exoneration->commentaires=$request->commentaires;
        $exoneration->user_id=auth()->user()->id;
        $exoneration->save();

        return redirect()->route('exoneration.index')->with('save', 'Opération effectuée avec succès.');;


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExonerationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        return view('exoneration.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exoneration  $exoneration
     * @return \Illuminate\Http\Response
     */
    public function show(Exoneration $exoneration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exoneration  $exoneration
     * @return \Illuminate\Http\Response
     */
    public function edit(Exoneration $exoneration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExonerationRequest  $request
     * @param  \App\Models\Exoneration  $exoneration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExonerationRequest $request, Exoneration $exoneration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exoneration  $exoneration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exoneration $exoneration)
    {
        //
    }
}
