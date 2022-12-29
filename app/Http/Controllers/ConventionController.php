<?php

namespace App\Http\Controllers;

use App\Models\paiements;
use App\Models\Convention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreConventionRequest;
use App\Http\Requests\UpdateConventionRequest;

class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conventions = Convention::where('user_id', auth()->user()->id)->get();
        $conventionNombre = Convention::where('user_id', auth()->user()->id)
            ->count();
        $conventionValider = Convention::where('user_id', auth()->user()->id)
            ->where('statut', 'validé')
            ->count();
        $conventionAnnuler = Convention::where('user_id', auth()->user()->id)
            ->where('statut', 'annulé')
            ->count();
        $conventionSoumis = Convention::where('user_id', auth()->user()->id)
            ->where('statut', 'annulé')
            ->count();


        return view('convention.index', [
            'conventions' => $conventions,
            'conventionNombre' => $conventionNombre,
            'conventionAnnuler' => $conventionAnnuler,
            'conventionValider' => $conventionValider,
            'conventionSoumis' => $conventionSoumis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Convention $convention)
    {

        return view('convention.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConventionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Convention $convention)
    {
        if ($request->hasFile('programme_social')) {
            $file = $request->file('programme_social');
            $filename = uniqid() . '_programme_social_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->programme_social = $filename;
        } /**/

        $convention->programme_social = $request->programme_social;
        $convention->user_id = auth()->user()->id;
        $convention->commentaires = $request->commentaires;
        $convention->programme_social = $request->programme_social;

        $convention->save();
        $user_id = auth()->user()->id;
        $last_id = DB::getPDO()->lastInsertId();

        $form_data_2 = array(
            'user_id'   => $user_id,
            'type_paiement'   =>   'Convention',
            'montant'   =>   '300',
            'statut'   =>   'pending',
            "id_operation" => $last_id,
        );

        paiements::create($form_data_2);


        return view('convention.pay')->with('user_id', $user_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function show($convention)
    {
        //
        return view('convention.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function edit(Convention $convention)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConventionRequest  $request
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConventionRequest $request, Convention $convention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convention $convention)
    {
        //
    }
}
