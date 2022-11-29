<?php

namespace App\Http\Controllers;

use App\Models\Enrolement;
use App\Models\Exoneration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $requerant= DB::table('users')
        ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
        ->select('users.*', 'profiles.responsable_nom', 'profiles.province', 'profiles.domaine')
        ->where('users.id','<>',auth()->user()->id)
        ->get();
        return view('admin.index', [ 'requerants'=>$requerant]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($requerant)
    {
        //On utilisera Requerant.blade.php
        $requerants= DB::table('users')
                        ->join('profiles', 'users.id', '=', 'profiles.user_id')
                        ->select('users.email','users.name', 'profiles.*')
                        ->where('users.id','=',$requerant) /*   */
                        ->get();

        return view('dashboard.show', ['requerants'=>$requerants]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //Validation d'un enrolement
    public function valider_enrolement(){
         Enrolement::where('user_id', auth()->user()->id)
        ->update([
            'statut' => 'activé',
        ]);
    }
    public function annuler_enrolement(){
         Enrolement::where('user_id', auth()->user()->id)
        ->update([
            'statut' => 'annulé',
        ]);
    }

    //Validation d'une exonération
    public function valider_exoneration(){
        Exoneration::where('user_id', auth()->user()->id)
       ->update([
           'statut' => 'activé',
        ]);
    }
    public function annuler_exoneration(){
        Exoneration::where('user_id', auth()->user()->id)
       ->update([
            'statut' => 'annulé',
        ]);
    }
}
