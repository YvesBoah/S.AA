<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;
use Flashy;
class AgenceController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin_Pages.Agence.create');
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
            'libelle_agence' =>'Required|min:3|max:25',
            'code_agence' =>'Required|min:3|max:3',
            'reseau' =>'Required|min:1|max:1'
       ]);
 
       // $a = 
        Agence::create([
         'libelle_agence'=>$request->libelle_agence,
         'reseau'=>$request->reseau,
         'code_agence'=>$request->reseau.$request->code_agence,
       ]);
           
        // dd($a);
  flashy()->muted('Opération effectué avec success !', ''); 
         //return redirect()->route('Agence-Admin.index');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Agence = Agence::findOrFail($id); 
         return view('Admin_Pages.Agence.show',compact('Agence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Agence = Agence::findOrFail($id); 
         return view('Admin_Pages.Agence.show',compact('Agence'));
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
        $Agence = Agence::findOrFail($id);
     
        $Agence->update([
        'libelle_agence'=>$request->libelle_agence,
        'code_agence'=>$request->code_agence 
        ]);
        
flashy()->muted('Opération effectué avec success !', ''); 
        return redirect()->route('home');
        //return redirect()->route('Agence-Admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agence::destroy($id);
        return redirect()->route('Agence-Admin.index');
    }
}
