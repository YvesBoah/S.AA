<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SouscriptionGAV;
use Flashy;
use Auth;
class SouscriptionGAVController extends Controller
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
          $SouscriptionGAV = SouscriptionGAV::where('users_id',$user)->get();
          return view('Souscription_GAV.index',compact('SouscriptionGAV'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        flashy()->Muted('Serenity vous remercie pour votre confiance !', '');  
        return view('Souscription_GAV.create');
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
             'activite_prospect' =>'Required|min:3',
             'age_prospect' =>'Required|min:3',
             'montant_capital_a_garantir' =>'Required|min:3',
             'nom_client' =>'Required|min:3',
             'telephone' =>'Required|min:3',
             'mode_paiement' =>'Required|min:3',
             'users_id' =>'Required'
        ]);
      

  // $a =
   SouscriptionGAV::create([
       'activite_prospect'=>$request->activite_prospect,
       'age_prospect'=>$request->age_prospect,
       'montant_capital_a_garantir'=>$request->montant_capital_a_garantir,
       'nom_client'=>$request->nom_client,
       'telephone'=>$request->telephone,
       'mode_paiement'=>$request->mode_paiement,
       'users_id'=>$request->users_id

    ]);

  
    // dd($a);   
    flashy()->Muted('Souscription effectué avec succès vous recevrez une confirmation par message sur votre numero de telephone !', '');           
        return redirect()->route('Souscription_GAV.index');
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
