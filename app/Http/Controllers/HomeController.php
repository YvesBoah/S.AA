<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Contrat_Auto;
use App\ObjetAssurer;
use App\Models\garantie_Auto;
use Flashy;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $Client = Client::where('users_id',$user)->get();
        $Contrat_Auto = Contrat_Auto::where('users_id',$user)->get();
        $ObjetAssurer = ObjetAssurer::where('users_id',$user)->get();
        $garantie_Auto = garantie_Auto::where('users_id',$user)->get();
        return view('home',compact('Client','Contrat_Auto','ObjetAssurer','garantie_Auto'));
    }
}
