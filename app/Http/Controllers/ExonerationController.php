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
        $importationCount= Exoneration::where('user_id',  auth()->user()->id)
                                        ->where('type', 'Importation')
                                        ->count();

        $interieurCount= Exoneration::where('user_id',  auth()->user()->id)
                                        ->where('type', 'Interieur')
                                        ->count();
        return view('exoneration.index', ['exonerations'=>$exoneration,
                                          'nombreDemande'=>$importationCount,
                                          'nombreInterieur'=>$interieurCount, ]);
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
            $request->lettre=$filename;
        }
        if ($request->hasFile('attestation')) {

            $file = $request->file('attestation');
            $filename = uniqid() . '_attestation_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->attestation=$filename;
        }

        if ($request->hasFile('copie_avis')) {

            $file = $request->file('copie_avis');
            $filename = uniqid() . '_copie_avis_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_avis=$filename;
        }

        if ($request->hasFile('liste_colisage')) {

            $file = $request->file('liste_colisage');
            $filename = uniqid() . '_liste_colisage_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->liste_colisage=$filename;
        }
        if ($request->hasFile('projet')) {

            $file = $request->file('projet');
            $filename = uniqid() . '_projet_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->projet=$filename;
        }

        if ($request->hasFile('transport')) {

            $file = $request->file('transport');
            $filename = uniqid() . '_transport_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->transport=$filename;
        }

        if ($request->hasFile('facture')) {

            $file = $request->file('facture');
            $filename = uniqid() . '_facture_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->facture=$filename;
        }
        if ($request->hasFile('affectation')) {

            $file = $request->file('affectation');
            $filename = uniqid() . '_affectation_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->affectation=$filename;
        }

        $exoneration->titre=$request->titre;
        $exoneration->lettre=$request->lettre;
        $exoneration->attestation=$request->attestation;
        $exoneration->copie_avis=$request->copie_avis;
        $exoneration->liste_colisage=$request->liste_colisage;
        $exoneration->projet=$request->projet;
        $exoneration->transport=$request->transport;
        $exoneration->facture=$request->facture;
        $exoneration->affectation=$request->affectation;
        $exoneration->commentaire=$request->commentaire;
        $exoneration->type=$request->type;
        $exoneration->statut=$request->statut;
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
    public function edit($exoneration)
    {
        $exonerationFind=Exoneration::findOrFail($exoneration);
        return view('exoneration.edit', ['exonerations'=>$exonerationFind]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExonerationRequest  $request
     * @param  \App\Models\Exoneration  $exoneration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exoneration $exoneration)
    {
        //
        if ($request->hasFile('lettre')) {
            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre=$filename;
        }
        if ($request->hasFile('attestation')) {

            $file = $request->file('attestation');
            $filename = uniqid() . '_attestation_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->attestation=$filename;
        }

        if ($request->hasFile('copie_avis')) {

            $file = $request->file('copie_avis');
            $filename = uniqid() . '_copie_avis_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_avis=$filename;
        }

        if ($request->hasFile('liste_colisage')) {

            $file = $request->file('liste_colisage');
            $filename = uniqid() . '_liste_colisage_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->liste_colisage=$filename;
        }
        if ($request->hasFile('projet')) {

            $file = $request->file('projet');
            $filename = uniqid() . '_projet_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->projet=$filename;
        }

        if ($request->hasFile('transport')) {

            $file = $request->file('transport');
            $filename = uniqid() . '_transport_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->transport=$filename;
        }

        if ($request->hasFile('facture')) {

            $file = $request->file('facture');
            $filename = uniqid() . '_facture_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->facture=$filename;
        }
        if ($request->hasFile('affectation')) {

            $file = $request->file('affectation');
            $filename = uniqid() . '_affectation_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->affectation=$filename;
        }

        $exoneration->titre=$request->titre;
        $exoneration->lettre=$request->lettre;
        $exoneration->attestation=$request->attestation;
        $exoneration->copie_avis=$request->copie_avis;
        $exoneration->liste_colisage=$request->liste_colisage;
        $exoneration->projet=$request->projet;
        $exoneration->transport=$request->transport;
        $exoneration->facture=$request->facture;
        $exoneration->affectation=$request->affectation;
        $exoneration->commentaire=$request->commentaire;
        $exoneration->type=$request->type;
        $exoneration->statut=$request->statut;
        $exoneration->user_id=auth()->user()->id;
        $exoneration->save();

        Exoneration::where('id', $exoneration)
        ->where('user_id', auth()->user()->id)
        ->update([
            'titre' => $exoneration->titre,
            'lettre' => $exoneration->lettre,
            'attestation' => $exoneration->attestation,
            'copie_avis' => $exoneration->copie_avis,
            'liste_colisage' => $exoneration->liste_colisage,
            'projet' => $exoneration->projet,
            'transport' => $exoneration->transport,
            'affectation' => $exoneration->affectation,
            'commentaire' => $exoneration->commentaire,
            'type' => $exoneration->type,
            'statut' => $exoneration->statut,
        ]);
        return redirect()->route('exoneration.index');
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
        $exoneration->delete();
        return redirect()->route('exoneration.index')->with('deleted','opération a été effectuée avec succès.');

    }
}
