<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class contactController extends Controller
{
    public function contact()
    {

        $carousel= DB::table('publicaton')->orderBy('date','desc')->take(5)->get();
$cats= DB::table('produit')->get();
$names=null;
        $i=0;
        foreach($cats as $c)
        {
            $names[$i]=($c->nom);
            $i++;
        }
        $contact = DB::table('coordonnees')->first();
        echo "<script>setTimeout(function(){window.scroll(0, 400);},1000); </script>";
         return view("contact")->with(['carousel' => $carousel, 'categories' => $names, 'contact' => $contact ]);
    }

    public function send(Request $request)
    {
        $carousel= DB::table('publicaton')->orderBy('date','desc')->take(5)->get();
        $objets= DB::table('publicaton')->orderBy('date','asc')->paginate(9);
        $cats= DB::table('produit')->get();
        $names=null;
        $i=0;
        foreach($cats as $c)
        {
            $names[$i]=($c->nom);
            $i++;
        }
        
      DB::table('messages')->insert([
          'nom' =>  $request->input('nom'),
          'message' =>  $request->input('message'),
          'email' =>  $request->input('email')
      ]);
echo "<script>setTimeout(function(){window.scroll(0,400);},1000); </script>";
      
return view("contact")->with(['carousel' => $carousel, 'categories' => $names ,'ok' => 'votre message a été envoyé']);

    }
}
