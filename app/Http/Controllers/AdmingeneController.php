<?php

namespace App\Http\Controllers;

use App\Models\Exoneration;
use Illuminate\Http\Request;

class AdmingeneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exoneration= Exoneration::where('user_id',  auth()->user()->id)->get();
        $exonerationTotal= Exoneration::where('user_id',  auth()->user()->id)->count();
        $importationCount= Exoneration::where('user_id',  auth()->user()->id)
                                        ->where('type', 'Importation')
                                        ->count();

        $interieurCount= Exoneration::where('user_id',  auth()->user()->id)
                                        ->where('type', 'Interieur')
                                        ->count();
        return view('dashboard-general', ['exonerations'=>$exoneration,
                                          'importationCount'=>$importationCount,
                                          'interieurCount'=>$interieurCount,
                                          'exonerationTotal'=>$exonerationTotal, ]);


    }
    public function profile()
    {
        //
        return view('profile');
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
    public function show($id)
    {
        //
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
}
