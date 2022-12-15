<?php

namespace App\Http\Controllers;

use App\Models\Enrolement;
use App\Models\Exoneration;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $notification=Notification::where('user_id', auth()->user()->id)
                                    ->where('statut')
                                    ->count();

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
                                          'exonerationTotal'=>$exonerationTotal,
                                          'interieurCount'=>$interieurCount,
                                          'notification'=>$notification, ]);

    }
    public function profile()
    {
        //
        $requerant= DB::table('users')
        ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
        ->select('users.*', 'profiles.responsable_nom', 'profiles.province', 'profiles.domaine','profiles.telephone')
        ->where('users.id','<>',auth()->user()->id)
        ->get();
        return view('profile', [ 'requerants'=>$requerant]);

    }

    public function adminindex()
    {
        //
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
        ->leftJoin('enrolements', 'users.id', '=', 'enrolements.user_id')
        ->select('enrolements.*', 'users.name', 'users.email')
        ->where('users.id','<>',auth()->user()->id)
        ->where('enrolements.deleted_at',NULL)
        ->get();

        return view('admin.valid_enrolement',[ 'enrolements'=>$enrolements]);

    }


    public function exoneration()
    {
        //
        $exonerationTotal= Exoneration::where('user_id','<>',  auth()->user()->id)  ->count();
        $requerantNombre=User::where('id','<>', auth()->user()->id)->count();

        $exonerations= DB::table('users')
        ->leftJoin('exonerations', 'users.id', '=', 'exonerations.user_id')
        ->select('exonerations.*', 'users.name', 'users.email')
        ->where('users.id','<>',auth()->user()->id)
        ->where('exonerations.deleted_at',NULL)
        ->get();


        return view('admin.validation_exoneration',['exonerations'=>$exonerations
                                                    ,'requerantNombre'=>$requerantNombre
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
