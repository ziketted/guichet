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
        $request->statut="soumis";
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
        $exonerationFind=Exoneration::findOrFail($exoneration)->take(1)->get();
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

    }

    public function upd_type(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'type' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('type')) {

            $file = $request->file('type');
            $filename = uniqid() . '_type_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'type' => $filename,
                ]);
                return back();

        }
    }
    public function upd_commentaire(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;

            Exoneration::where('user_id', $user_id)
            ->update([
                'commentaire' =>$request->commentaire,
            ]);
            return back();

    }
    public function upd_affectation(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'affectation' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('affectation')) {

            $file = $request->file('affectation');
            $filename = uniqid() . '_affectation_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'affectation' => $filename,
                ]);
                return back();
        }
    }
    public function upd_facture(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'facture' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('facture')) {

            $file = $request->file('facture');
            $filename = uniqid() . '_facture_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'facture' => $filename,
                ]);
                return back();
        }
    }
    public function upd_transport(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'transport' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('transport')) {

            $file = $request->file('transport');
            $filename = uniqid() . '_transport_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'transport' => $filename,
                ]);
                return back();  return back();
        }
    }
    public function upd_projet(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'projet' =>'',
            ]);
             return back();
        }

        if ($request->hasFile('projet')) {

            $file = $request->file('projet');
            $filename = uniqid() . '_projet_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'projet' => $filename,
                ]);
             return back();
        }
    }
    public function upd_liste_colisage(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'liste_colisage' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('liste_colisage')) {

            $file = $request->file('liste_colisage');
            $filename = uniqid() . '_liste_colisage_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'liste_colisage' => $filename,
                ]);
                return back();
        }
    }
    public function upd_copie_avis(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'copie_avis' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('copie_avis')) {

            $file = $request->file('copie_avis');
            $filename = uniqid() . '_copie_avis_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'attestation' => $filename,
                ]);
                return back();
        }
    }
    public function upd_attestation(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'attestation' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('attestation')) {

            $file = $request->file('attestation');
            $filename = uniqid() . '_attestation_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'attestation' => $filename,
                ]);
                return back();
        }
    }

    public function upd_titre(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->titre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'titre' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('titre')) {

            $file = $request->file('titre');
            $filename = uniqid() . '_titre_ajour_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Exoneration::where('user_id', $user_id)
                ->update([
                    'titre' => $filename,
                ]);
                return back();
        }
    }
    public function upd_lettre(Request $request, Exoneration $exoneration)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->lettre)) {
            Exoneration::where('user_id', $user_id)
            ->update([
                'lettre' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('lettre')) {

            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);


            Exoneration::where('user_id', $user_id)
                ->update([
                    'lettre' => $filename,
                ]);
            return back();
        }
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
