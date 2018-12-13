<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObjetAssurer;
use App\Models\Contrat_Auto;
use Auth;
use Flashy;
class ObjetAssurerController extends Controller
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
        $ObjetAssurers = ObjetAssurer::where('users_id',$user)->get();
        //dd($ObjetAssurers);
        return view('ObjetAssurer_Auto.index',compact('ObjetAssurers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Contrat_Auto = Contrat_Auto::first();
        return view('ObjetAssurer_Auto.create',compact('Contrat_Auto'));
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
             'descrition_du_vehicule' =>'Required|min:3',
             'identité_du_vehicule' =>'Required|min:3',
             'description_du_proprietaire' =>'Required|min:3',
        ]);
      

  // $a =
   ObjetAssurer::create([
       'descrition_du_vehicule'=>$request->descrition_du_vehicule,
       'identité_du_vehicule'=>$request->identité_du_vehicule,
       'description_du_proprietaire'=>$request->description_du_proprietaire,
       'contrat__autos_id'=>$request->contrat__autos_id,
       'users_id'=>$request->users_id,
       ]);

  
    // dd($a);       
    flashy()->muted('Votre Objet à bien été assuré !', '');       
        return redirect()->route('ObjetAssurer_Auto.index');
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
