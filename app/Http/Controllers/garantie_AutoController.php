<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garantie_Auto;
use App\ObjetAssurer;
use App\Models\Garantie;
use App\Models\Contrat_Auto;
use Auth;
use DB;
use Flashy;
class garantie_AutoController extends Controller
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
        $garantie_Auto = DB::select("SELECT DISTINCT garanties.garantie,objet_assurers.identité_du_vehicule FROM garanties,garantie__autos,objet_assurers where garanties.id = garantie__autos.garanties_id and garantie__autos.users_id='$user' and garantie__autos.objet_assurers_id = objet_assurers.id");
      
         // dd($garantie_Auto);
        return view('Garantie_Auto.index',compact('garantie_Auto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Garantie_Obligatoire_1 = Garantie::where('code','002')->get();
        $Garantie_Obligatoire_2 = Garantie::where('code','004')->get();
        $Garantie_Obligatoire_3 = Garantie::where('code','150')->get();
        $Contrat_Auto = Contrat_Auto::first();
        $Garantie = Garantie::all();
        $ObjetAssurer = ObjetAssurer::where('contrat__autos_id',$Contrat_Auto->id)->get();
        return view('Garantie_Auto.create',compact('Garantie','Garantie_Obligatoire_1','Garantie_Obligatoire_2','Garantie_Obligatoire_3','Contrat_Auto','ObjetAssurer'));
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
             'contrat__autos_id' =>'Required',
             'objet_assurers_id' =>'Required'
        ]);
      



foreach ($request->garanties_id as $key => $value) {
  // $a =
   garantie_Auto::create([
       'contrat__autos_id'=>$request->contrat__autos_id,
       'objet_assurers_id'=>$request->objet_assurers_id,
       'users_id'=>$request->users_id,
       'garanties_id'=>$value
       ]);

  }
    // dd($a);         
    flashy()->muted('Opération effectué avec success !', '');     
        return redirect()->route('Garantie_Auto.index');
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
