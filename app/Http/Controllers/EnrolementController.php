<?php

namespace App\Http\Controllers;

use auth;
use DateTime;
use GuzzleHttp\Client;
use App\Models\paiements;
use App\Models\Enrolement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
        $check_active_document= new Enrolement();
        $actif= count($check_active_document->enrolement_encours());
        $enrolements= Enrolement::where('user_id',  auth()->user()->id)
                                  ->orderBy('id', 'DESC')->take(1)->get();

        return view('enrolement.index', ['enrolements'=>$enrolements,
                                         'actif'=>$actif]);
    }
    /* public function pay(){
        return view ('enrolement.pay');
    } */
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request, Enrolement $enrolement, paiements $paiements)
    {
        //

        if ($request->hasFile('lettre')) {

            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre=$filename;


        }
        if ($request->hasFile('autre_document')) {

            $file = $request->file('autre_document');
            $filename = uniqid() . '_bordereau_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->autre_document=$filename;
        }

        $now = new DateTime();
        $year = $now->format("Y");

        $enrolement->lettre=$request->lettre;
        $enrolement->autre_document=$request->autre_document;
        $enrolement->validite=$year+2;
        $enrolement->commentaires=$request->commentaires;
        $user_id = $enrolement->user_id=auth()->user()->id;
        $enrolement->save();

        $last_id = DB::getPDO()->lastInsertId();

        $form_data_2 = array(
            'user_id'   => $user_id,
            'type_paiement'   =>   'Enrolement',
            'montant'   =>   '50',
            'statut'   =>   'pending',
            "id_operation"=>$last_id,
            );

            paiements::create($form_data_2);


        return view('enrolement.pay')->with('user_id', $user_id);

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
    public function show( $enrolement)
    {
        //
        return view('admin.valid_enrolement');

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
