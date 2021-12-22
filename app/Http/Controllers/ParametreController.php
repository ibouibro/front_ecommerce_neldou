<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParametreController extends Controller
{



    
    public function index()
    {
        
      
       $objets=DB::table('user')->get();
        
       return view('staff/parametre/parametreIndex')->with( [
            'users' => $objets, 
            'count' => count($objets), 
            
        ]);
      

     }


     public function ajouterForm()
     {
         
        return view('staff/parametre/ajouter');
      }


      public function modifierForm(Request $request)
      {
          $id= $request->input('id');
          $objet = DB::table('user')->where('id',$id)->first();
         return view('staff/parametre/modifier')->with(['objet' => $objet]);
      }

       
      public function modifier(Request $request)
      {
          
        $p1= $request->input('password1');
        $p2= $request->input('password2');
       
        if($p1 !== $p2)
        {
            $id= $request->input('id');
            $objet = DB::table('user')->where('id',$id)->first();
            return view('staff/parametre/modifier')->with(['objet' => $objet, 'erreur' => 'erreur : les deux mot de passe ne correspondent pas !']);
            
        }

        $u = DB::table('user')->where(['username' => $request->input('username') ])->get();
        if(count($u) > 1)
        {
            $id= $request->input('id');
            $objet = DB::table('user')->where('id',$id)->first();
            return view('staff/parametre/modifier')->with(['erreur' => 'erreur : ce username existe déjà choisissez un autre', 'objet' => $objet ]);
        }

      
        
        $id=$request->input('id');
        
        DB::table('user')->where('id',$id)->update(
            [
                'email' =>  $request->input('email'),
                'nom' =>  $request->input('nom'),
                'prenom' =>  $request->input('prenom'),
                'password' =>  $request->input('password1'),
                'tel' =>  $request->input('tel'),
                'username' =>  $request->input('username'),
            ]
        );

        $objets=DB::table('user')->get();
          
         return view('staff/parametre/parametreIndex')->with( [
              'users' => $objets, 
              'count' => count($objets), 
              
          ]);
        
  
       }


       public function ajouter(Request $request)
       {
           
         
        $objets=DB::table('user')->get();
        
        $p1= $request->input('password1');
        $p2= $request->input('password2');
       
        if($p1 !== $p2)
        {
            return view('parametre/ajouter')->with(['erreur' => 'erreur : les deux mot de passe ne correspondent pas !']);
            
        }

        $u = DB::table('user')->where(['username' => $request->input('username') ])->get();
        if(count($u) > 0)
        {
            return view('parametre/ajouter')->with(['erreur' => 'erreur : ce username existe déjà choisissez un autre']);
        }

        DB::table('user')->insert(
             [
                 'nom' =>  $request->input('nom'),
                 'prenom' =>  $request->input('prenom'),
                 'password' =>  $request->input('password1'),
                 'username' =>  $request->input('username'),
                 'tel' =>  "0"
                 
             ]
         );
           
          return view('staff/parametre/ajouter')->with([ 'error'=> ' erreur : les deux mots de passe ne corresspondent pas !' ]);
         
   
        }


        public function supprimer(Request $request)
         {
            
            $id=$request->input('id');
            $objet =DB::table('user')->where('id',$id)->first();
            $objet->remove();
            $objets =DB::table('user')->get();
            echo "<script>setTimeout(function(){ alert('la suppression a réussi'); }, 3000);</script>";
        
            return view('staff/parametre/parametrendex')->with( [
                'commandes' => $objets    
            ]);  
    
          }


}
