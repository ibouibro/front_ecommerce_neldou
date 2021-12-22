<?php


namespace App\Http\Controllers;

SESSION_START();

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;


class HController extends Controller
{
    public function home()
    {
        return view('staff/welcome');
    }


    public function token()
    {
        $s = new Session();
        $id = $s->id;
        $token =  DB::table('connexion')->where('id',$id)->value('token');
           
        return view('staff/token')->with(['token' => $token ]);
    }

    public function connecter()
    {
    
            $com = DB::table('commande')->where('etat',0)->get();
            $ventes = DB::table('commande')->where('etat',1)->get();
            
            
            return view('staff/homex')->with([  'com' => count($com), 'ventes' => count($ventes) ]);
  
        
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function deconnecter()
    {
      Auth::logout();
        
        return view('welcome');
    }
}
