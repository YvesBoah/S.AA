<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SouscriptionMRH;
use Flashy;
use Auth;
class SouscriptionMRHController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user()->id;
          $SouscriptionMRH = SouscriptionMRH::where('users_id',$user)->get();
          return view('Souscription_MRH.index',compact('SouscriptionMRH'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        flashy()->Muted('Serenity vous remercie pour votre confiance !', '');  
        return view('Souscription_MRH.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
             'statut' =>'Required|min:3',
             'valeur_batiment' =>'Required|min:3',
             'nom_client' =>'Required|min:3',
             'telephone' =>'Required|min:3',
             'users_id' =>'Required'
        ]);
      

  // $a =
   SouscriptionMRH::create([
       'statut'=>$request->statut,
       'loyer'=>$request->loyer,
       'valeur_batiment'=>$request->valeur_batiment,
       'nom_client'=>$request->nom_client,
       'telephone'=>$request->telephone,
       'mode_paiement'=>$request->mode_paiement,
       'users_id'=>$request->users_id

    ]);

  
    // dd($a);   
    flashy()->Muted('Souscription effectué avec succès vous recevrez une confirmation par message sur votre numero de telephone !', '');           
        return redirect()->route('Souscription_MRH.index');
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
