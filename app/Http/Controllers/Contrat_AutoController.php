<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat_Auto;
use Auth;
use Flashy;
class Contrat_AutoController extends Controller
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
        $Contrat_Auto = Contrat_Auto::where('users_id',$user)->get();
        // dd($Contrat_Auto);
        return view('Contrat-auto.index',compact('Contrat_Auto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $Contrat_Auto = Contrat_Auto::where('users_id',$user)->get();
        return view('Contrat-auto.create',compact('Contrat_Auto'));
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
            'carte_grise'=>'Required|mimes:jpeg,png,jpg,gif,svg,pdf',
            'permis_de_conduire'=>'Required|mimes:jpeg,png,jpg,gif,svg,pdf',
            'visite_technique'=>'Required|mimes:jpeg,png,jpg,gif,svg,pdf',
            'marque_de_voiture' =>'Required|min:3',
            'type' =>'Required|min:3',
            'puissance' =>'Required|min:3',
            'immatriculation' =>'Required|min:3',
            'carrosserie' =>'Required|min:3',
            'energie' =>'Required|min:3',
            'valeur_neuve' =>'Required|min:3',
            'date_premiere_circulation' =>'Required',
            'charge_utile' =>'Required|min:3',
            'zone_geographique' =>'Required|min:3',
            'users_id' =>'required|unique:Contrat__Autos',
            
       ]);
 
    /********** Processus d'upload de fichier carte_grise ***********/
         $carte_grise = $request->file('carte_grise');
         // Obtenir l'extension
         // dd($carte_grise );
         $nomCarte_grise = time().'.'.$carte_grise->getClientOriginalExtension();
         // time() génère un nom aléatoire
         $carte_grise->move(public_path("carte_grise"), $nomCarte_grise );
         // dd($nomCarte_grise);         
    /********** Processus d'upload de fichier ***********/

    /********** Processus d'upload de fichier permis_de_conduire ***********/
             $permis_de_conduire = $request->file('permis_de_conduire');
             // Obtenir l'extension
             // dd($permis_de_conduire );
             $nomPermis_de_conduire = time().'.'.$permis_de_conduire->getClientOriginalExtension();
             // time() génère un nom aléatoire
             $permis_de_conduire->move(public_path("permis_de_conduire"), $nomPermis_de_conduire );
             // dd($nomPermis_de_conduire);         
        /********** Processus d'upload de fichier ***********/

    /********** Processus d'upload de fichier visite_technique ***********/
                 $visite_technique = $request->file('visite_technique');
                 // Obtenir l'extension
                 // dd($visite_technique );
                 $nomVisite_technique = time().'.'.$visite_technique->getClientOriginalExtension();
                 // time() génère un nom aléatoire
                 $visite_technique->move(public_path("visite_technique"), $nomVisite_technique );
                 // dd($nomVisite_technique);         
            /********** Processus d'upload de fichier ***********/


         Contrat_Auto::create([
         'carte_grise'=>$nomCarte_grise,
         'permis_de_conduire'=>$nomPermis_de_conduire,
         'visite_technique'=>$nomVisite_technique,
         'marque_de_voiture'=>$request->marque_de_voiture,
         'type'=>$request->type,
         'puissance'=>$request->puissance,
         'immatriculation'=>$request->immatriculation,
         'carrosserie'=>$request->carrosserie,
         'energie'=>$request->energie,
         'valeur_neuve'=>$request->valeur_neuve,
         'date_premiere_circulation'=>$request->date_premiere_circulation,
         'charge_utile'=>$request->charge_utile,
         'zone_geographique'=>$request->zone_geographique,
         'users_id'=>$request->users_id,
       ]);
                   flashy()->muted('Opération effectué avec success !', ''); 
                   return redirect()->route('Contrat-Auto.index');
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
