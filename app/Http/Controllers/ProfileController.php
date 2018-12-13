<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Flashy;
class ProfileController extends Controller
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
        $this->validate($request,[
            '' =>'Required|min:3',
            '' =>'Required|min:8',
            'avatar'=>'Required',
       ]);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::findOrFail($id); 
        //  return view('Profil.show',compact('user'))->withUser(Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $user = User::findOrFail($id);
        return view('Profil.edit',compact('user'))->withUser(Auth::user());
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
         $this->validate($request,[
            'name' =>'Required|min:3',
            'email' =>'Required',
            'telephone'=>'Required|min:8',
            'password'=>'Required|min:4',
       ]);
        $user = User::findOrFail($id);
        // $image = $request->file('avatar') ;
       // Obtenir l'extension
    //    $nomAvatar = time().'.'.$image->getClientOriginalExtension();
       // time() génère un nom aléatoire
    //    $image->move(public_path("avatars"), $nomAvatar );
        // dd($image);

     
       $user->update([
       'name'=>$request->name,
    //    'avatar'=>$nomAvatar,
       'email'=>$request->email,
       'password'=>bcrypt($request->password),
       'telephone'=>$request->telephone,
       'role'=>$request->role
       
      
]);
        // dd($user);
        flashy()->muted('Votre profil à bien été mis à jour !', '');
     return redirect()->route('home', compact('user') )->withUser(Auth::user());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::destroy($id);
        return redirect()->route('home');
    }
}
