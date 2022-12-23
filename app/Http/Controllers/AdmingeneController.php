<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Enrolement;
use App\Models\Exoneration;
use App\Models\Notification;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request as ClientRequest;

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
        $enrolementDoc=new Enrolement();

        if (auth()->user()->role_id==2){

            return redirect()->route('admin.admin');


        }
        else{

            $notification=Notification::where('user_id', auth()->user()->id)
            ->where('statut')
            ->count();
            //Create a new profile
            if ( Profile::find(auth()->user()->id ) === null ) {
                $form_data_2 = array(
                    'user_id'   => auth()->user()->id,
                    );
                    Profile::create($form_data_2);

            }

            $exoneration= Exoneration::where('user_id',  auth()->user()->id)->get();
            $exonerationTotal= Exoneration::where('user_id',  auth()->user()->id)->count();
            $importationCount= Exoneration::where('user_id',  auth()->user()->id)
                            ->where('type', 'Importation')
                            ->count();

            $interieurCount= Exoneration::where('user_id',  auth()->user()->id)
                            ->where('type', 'Interieur')
                            ->count();

            $documentEnrolement = $enrolementDoc->enrolement_encours();
            $valide="";
            foreach ($documentEnrolement as  $value) {
                # code...
                    $valide=$value['validite'];
            }


            return view('dashboard-general', ['exonerations'=>$exoneration,
                            'importationCount'=>$importationCount,
                            'exonerationTotal'=>$exonerationTotal,
                            'interieurCount'=>$interieurCount,
                            'valide'=>$valide,
                            'notification'=>$notification, ]);

        }




    }
    public function profile()
    {
        //
        $requerant= DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->select('users.*', 'profiles.responsable_nom', 'profiles.province', 'profiles.domaine','profiles.telephone')
        ->where('users.id','<>',auth()->user()->id)
        ->get();
        return view('profile', [ 'requerants'=>$requerant]);

    }

    public function adminindex()
    {
        //

          $notification=Notification::where('user_id', auth()->user()->id)
          ->where('statut')
          ->count();
            $requerantNombre=User::where('id','<>', auth()->user()->id)->count();
            $exonerationTotal= Exoneration::where('user_id','<>',  auth()->user()->id)
                                            ->where('statut', 'soumis')->count();
            $enrolementNombre=Enrolement::where('user_id','<>',  auth()->user()->id)
                                          ->where('statut', 'soumis')->count();


            return view('admin.index', [
                            'enrolementNombre'=>$enrolementNombre,
                            'exonerationNombre'=>$exonerationTotal,
                            'requerantNombre'=>$requerantNombre,
                            'notification'=>$notification, ]);

    }
    public function enrolement()
    {
        //
        $enrolements= DB::table('users')
        ->join('enrolements', 'users.id', '=', 'enrolements.user_id')
        ->select('enrolements.*', 'users.name', 'users.email')
        ->where('users.id','<>',auth()->user()->id)
        ->where('enrolements.deleted_at',NULL)
        ->get();

        return view('admin.valid_enrolement',[ 'enrolements'=>$enrolements]);

    }

    public function valider_enrolement(Request $request ){

        $filename ="";
        if ($request->hasFile('autre_document')) {

            $file = $request->file('autre_document');
            $filename = uniqid() . '_AvisFavorable_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
        }  /* */


        switch ($request->input('action')) {

            case 'valider':
                // Save model
                Enrolement::where('id', $request->id_enrolement)
                ->update([
                    'statut' => 'validé',
                    'autre_document' => $filename,
                    'notification' => $request->notification,
                ]);
                return redirect()->route('admin.enrolement');

                break;

            case 'annuler':

                Enrolement::where('id', $request->id_enrolement)
                ->update([
                    'statut' => 'annulé',
                ]);
                return redirect()->route('admin.enrolement');

                break;


        }


    }


    public function valider_exoneration(Request $request ){




        switch ($request->input('action')) {

            case 'valider':
                // Save model
                Exoneration::where('id', $request->id)
                ->update([
                    'statut' => 'validé',

                ]);
                return redirect()->route('admin.exoneration');
                break;

            case 'annuler':
                //
                Exoneration::where('id', $request->id)
                ->update([
                    'statut' => 'annulé',
                ]);
                return redirect()->route('admin.exoneration');

                break;


        }


    }
    public function exoneration()
    {
        //
        $exonerationTotal= Exoneration::where('user_id','<>',  auth()->user()->id)  ->count();
        $exonerationAnnuler= Exoneration::where('statut','annulé')->
                                 where('user_id','<>',  auth()->user()->id) ->count();
        $requerantNombre=User::where('id','<>', auth()->user()->id)->count();

        $exonerations= DB::table('users')
        ->join('exonerations', 'users.id', '=', 'exonerations.user_id')
        ->select('exonerations.*', 'users.name', 'users.email')
        ->where('users.id','<>',auth()->user()->id)
        ->where('exonerations.deleted_at',NULL)
        ->get();









        return view('admin.validation_exoneration',['exonerations'=>$exonerations
                                                    ,'requerantNombre'=>$requerantNombre
                                                    ,'exonerationAnnuler'=>$exonerationAnnuler
                                                    ,'exonerationTotal'=>$exonerationTotal]);
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

     public function detailrequerant($requerant){
        //Création d'un profile


        $profiles = DB::table('users')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->select('profiles.*', 'users.email', 'users.name')
        ->where('users.id','<>',$requerant)
        ->take(1)
        ->get();


        $exonerations= Exoneration::where('user_id', $requerant)->get();
        $enrolements= Enrolement::where('user_id', $requerant)->get();

        return view('admin.requerantdetail', ['profiles'=>$profiles,
                                              'exonerations'=>$exonerations,
                                              'enrolements'=>$enrolements,
                                             ]);
     }
    public function show($enrolement)
    {
        //
        $enrolements=Enrolement::where('id',$enrolement)->take(1)->get();
        $statut="";
        foreach ($enrolements as $value) {
            # code...
            $statut=$value['statut'];
        }


        return view('admin.validation_enrolement', ['enrolements'=>$enrolements, 'id'=>$enrolement,
                                                    'statut'=>$statut]);
    }
    public function showExoneration($exoneration)
    {
        //
        $exonerations=Exoneration::findOrFail($exoneration);

        return view('admin.exoneration_validation', ['exonerations'=>$exonerations, 'id'=>$exoneration]);
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
