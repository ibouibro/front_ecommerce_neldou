<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class commandeController extends Controller
{
    public function commander(Request $request)
    {
        $tel=$request->input('tel');
        $add=$request->input('addresse');
        $nom=$request->input('nom');
        $id=$request->input('id');

        $objet=[
            'nom' => $nom,
            'addresse' => $add,
            'etat' => 0,
            'tel' => $tel,
            'date' => Date('Y-m-d'),
            'publication' => $id
        ];
DB::table('commande')->insert($objet);

$objet = DB::table('publicaton')->where('id',$id)->first();
$carousel= DB::table('publicaton')->orderBy('date','desc')->take(5)->get();
$cats= DB::table('produit')->get();
$names=null;
        $i=0;
        foreach($cats as $c)
        {
            $names[$i]=($c->nom);
            $i++;
        }
        echo "<script>setTimeout(function(){ window.scroll(0,900); }, 2000);</script>";
   $delai = DB::table('coordonnees')->value('delai');
return view("Done")->with(['carousel' => $carousel, 'categories' => $names, 'delai' => $delai ]);


    }

    
    public function invalider(Request $request)
    {
        $objet = DB::table('commande')->where('id',$request->input('id'))->update([ 'etat' => 0]);
        $objets=DB::table('commande')->where('etat',1)->get();
        return view('staff/commande/index')->with( [
            'commandes' => $objets, 'count' => count($objets) , 'tok' => 1
            ]);
      

    }


    public function valider(Request $request)
    {
        $objet = DB::table('commande')->where('id',$request->input('id'))->update([ 'etat' => 1]);
        $objets=DB::table('commande')->where('etat',0)->get();
        return view('staff/commande/index')->with( [
            'commandes' => $objets, 'count' => count($objets) , 'tok' => 0
            ]);
      

    }
    


    
    public function index()
    {
        $objets=DB::table('commande')->where('etat',0)->get();
       
        return view('staff/commande/index')->with( [
            'commandes' => $objets, 'count' => count($objets), 'tok' => 0
            ]);
      

    }


    public function archives()
    {
        
        $objets=DB::table('commande')->where('etat',1)->get();
       
        return view('staff/commande/index')->with( [
            'commandes' => $objets, 'count' => count($objets), 'tok' => 1
            ]);
      

    }


    public function modifierForm(Request $request)
    {
        $id=$request->input('id');
        $objet =DB::table('commande')->where('id',$id)->first();
  
        return view('staff/commande/modifier')->with( [
            'commande' => $objet 
            ]);
    }

    
    public function supprimer(Request $request)
    {
            
        $id=$request->input('id');
        $objet =  $objet =DB::table('commande')->where('id',$id)->delete();
        
        $objets =DB::table('commande')->get();
        echo "<script>setTimeout(function(){ alert('la suppression a réussi'); }, 3000);</script>";
        
        return view('staff/commande/commandeIndex')->with( [
                'commandes' => $objets    
            ]);  
    
    }
    
   
    public function afficher(Request $request)
    {
        
    $id=$request->input('id');
    $objet = DB::table('commande')->where('id',$id)->first();
    $image = DB::table('publicaton')->where('id',$objet->publication)->value('image');   
    return view('staff/commande/afficher')->with( [
            'commande' => $objet  ,
            'image' => $image  
        ]);
    }

 
    


}
