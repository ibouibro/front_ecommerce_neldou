<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class infoController extends Controller
{
    public function index()
    {
        $objet = DB::table('coordonnees')->first();
        return view("staff/information/index")->with('information',$objet);
    }

    public function configurerForm()
    {
      return view("staff/information/configurer");
    }

    public function configurer(Request $request)
    {
        DB::table('coordonnees')->insert(

            [
                'delai'  => $request->input('delai'),
                'tel'  => $request->input('tel'),
                'addresse'  => $request->input('addresse'),
                'email'  => $request->input('email'),
            ]
        );

        $objet = DB::table('coordonnees')->first();
        return view("staff/information/index")->with('information',$objet);
  

    }

    public function modifierForm(Request $request)
    {
        $objet = DB::table('coordonnees')->first();
        return view('staff/information/modifier')->with('information',$objet);
    }

    public function modifier()
    {
        DB::table('coordonnees')->update(

            [
                'delai'  => $request->input('delai'),
                'tel'  => $request->input('tel'),
                'addresse'  => $request->input('addresse'),
                'email'  => $request->input('email'),
            ]
        );

        $objet = DB::table('coordonnees')->first();
        return view("staff/information/index")->with('coordonnee',$objet);
  
    }

}
