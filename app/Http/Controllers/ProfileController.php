<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profiles.index');
    }

    public function document(Profile $profile)
    {
        // $profile= new Profile();
        $user_id = auth()->user()->id;
        $profile_exist = Profile::where('user_id', $user_id)->get();
        if ($profile_exist->count() == 0) {
            $profile->user_id =auth()->user()->id;
            $profile->save();
        }
        $user = User::where('id', $user_id)->get();
        $profile = Profile::where('user_id', $user_id)->get();
        return view('profiles.documents', ['users' => $user, 'profiles' => $profile]);

    }

    public function autre_infos()
    {
        //
        return view('profiles.autres_infos');
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
     * @param  \App\Http\Requests\StoreDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Do cument  $document
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profile= new Profile();
        $user_id = auth()->user()->id;
        $profile_exist = Profile::where('user_id', $user_id)->get();
        if ($profile_exist->count() == 0) {
            $profile->user_id =auth()->user()->id;
            $profile->save();
        }
        $user = User::where('id', $user_id)->get();
        $profile = Profile::where('user_id', $user_id)->get();
        return view('profiles.edit', ['users' => $user, 'profiles' => $profile]);
    }
    public function identiteupdate(Request $request)
    {
        //

        $user_id = auth()->user()->id;
        $user = User::findOrFail($user_id);

        //Si le profile existe ou pas


        //Mise à jour Identité
        if (isset($_REQUEST['denomination'])) {
            $user->name = $request->denomination;
            $user->save();
            Profile::where('user_id', $user_id)
                ->update([
                    'denomination' => $request->denomination,
                    'sigle' => $request->sigle,
                    'responsable_nom' => $request->responsable_nom,
                    'responsable_postnom' => $request->responsable_postnom,
                    'responsable_prenom' => $request->responsable_prenom,
                    'responsable_fonction' => $request->responsable_fonction,
                    'responsable_phone' => $request->responsable_phone,
                    'responsable_email' => $request->responsable_email,
                ]);
        } else {
            Profile::where('user_id', $user_id)
                ->update([

                    'compte_bancaire' => $request->compte_bancaire,
                    'telephone' => $request->telephone,
                    'province' => $request->province,
                    'quartier' => $request->quartier,
                    'district' => $request->district,
                    'lieu' => $request->lieu,
                    'rue' => $request->rue,
                    'commune' => $request->commune,
                    'date_creation' => $request->date_creation,
                    'numero' => $request->numero,
                ]);
        }




        return redirect()->route('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocumentRequest  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $document)
    {

    }
    public function upd_statut(Request $request, Profile $profile)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->doc_statut)) {
            Profile::where('user_id', $user_id)
            ->update([
                'doc_statut' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('doc_statut')) {

            $file = $request->file('doc_statut');
            $filename = uniqid() . '_doc_statut_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Profile::where('user_id', $user_id)
                ->update([
                    'doc_statut' => $filename,
                ]);
                return back();
        }
    }
    public function upd_autorisation(Request $request, Profile $profile)
    {

        $user_id = auth()->user()->id;
        if (!isset($request->doc_autorisation)) {
            Profile::where('user_id', $user_id)
            ->update([
                'doc_autorisation' =>'',
            ]);
            return back();
        }

        if ($request->hasFile('doc_autorisation')) {

            $file = $request->file('doc_autorisation');
            $filename = uniqid() . '_doc_autorisation_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            Profile::where('user_id', $user_id)
                ->update([
                    'doc_autorisation' => $filename,
                ]);
                return back();
        }
    }
}
