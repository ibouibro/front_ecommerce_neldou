<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    public function index()
    {
        $objets= DB::table('produit')->get();
        return view('staff/article/index')->with(['categories' => $objets, 'count' => count($objets)]);
    }

    public function ajouter(Request $request)
    {
            $nom = $request->input("nom");
            DB::table('produit')->insert(['nom' => $nom ]);
            $objets= DB::table('produit')->get();
            return view('staff/article/index')->with(['categories' => $objets, 'count' => count($objets)]);
      
    }

    public function supprimer(Request $request)
    {
            $nom = $request->input("id");
           $o= DB::table('produit')->where('id',$nom)->delete();
            
            $objets= DB::table('produit')->get();
            return view('staff/article/index')->with(['categories' => $objets, 'count' => count($objets)]);
      
    }



}
