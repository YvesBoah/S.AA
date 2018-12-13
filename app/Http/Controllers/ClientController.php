<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Agence;
use Auth;
use Flashy;
class ClientController extends Controller
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
         // dd($user);
         $Client = Client::where('users_id',$user)->first();
         return view('Client.index',compact('Client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $user = Auth::user()->id;
         // dd($user);
        $Client = Client::where('users_id',$user)->get();
        //dd($Client);
        // $a = count($Client);
        // dd($a);
        $Agence = Agence::pluck('libelle_agence','code_agence');
        return view('Client.create',compact('Agence','Client'));
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
             'users_id' =>'required|unique:clients',
             'nom' =>'Required|min:3',
             'prenom' =>'Required|min:3',
             'telephone' =>'Required|min:8',
             'ville' =>'Required|min:3',
             'statut' =>'Required|min:3',
             'date_de_naissance' =>'Required',
             'code_agence' =>'Required',
        ]);
      
//$a = 
  Client::create([
       'nom'=>$request->nom,
       'prenom'=>$request->prenom,
       'telephone'=>$request->telephone,
       'ville'=>$request->ville,
       'statut'=>$request->statut,
       'date_de_naissance'=>$request->date_de_naissance,
       'rang'=>$request->rang,
       'code_agence'=>$request->code_agence,
       'users_id'=>$request->users_id,
       'numero_client'=>$request->code_agence.$request->rang
       ]);
    //dd($a);           
      flashy()->muted('Opération effectué avec success !', '');    
        return redirect()->route('Client.index');
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
         $Agence = Agence::pluck('libelle_agence','code_agence');
         $Client = Client::findOrFail($id);
         return view('Client.edit',compact('Client','Agence'));
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
        $Client = Client::findOrFail($id);
         $this->validate($request,[
             'users_id' =>'required|',
             'nom' =>'Required|min:3',
             'prenom' =>'Required|min:3',
             'telephone' =>'Required|min:8',
             'ville' =>'Required|min:3',
             'statut' =>'Required|min:3',
             'date_de_naissance' =>'Required',
             'code_agence' =>'Required',
        ]);

          $Client->update([
       'nom'=>$request->nom,
       'prenom'=>$request->prenom,
       'telephone'=>$request->telephone,
       'ville'=>$request->ville,
       'statut'=>$request->statut,
       'date_de_naissance'=>$request->date_de_naissance,
       'rang'=>$request->rang,
       'code_agence'=>$request->code_agence,
       'users_id'=>$request->users_id,
       
       ]);
    //dd($a);              
        return redirect()->route('Client.index');
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
