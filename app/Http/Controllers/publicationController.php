<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class publicationController extends Controller
{

    public function oneItem(Request $request)

    {

        $id=$request->input('id');

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
$delai = DB::table('coordonnees')->value('delai');
        echo "<script>setTimeout(function(){ window.scroll(0,425); }, 2000);</script>";
   

return view("oneItem")->with(['publication' => $objet ,'carousel' => $carousel, 'categories' => $names, 'show' => 1 ,'delai' => $delai ]);

    }


    public function index()
    {
        
       $articles =null;
       $i=0;
       $objets=DB::table('publicaton')->get();
       foreach($objets as $obj)
       {
            $articles[$i]= DB::table('produit')->where('id',$obj->idproduit_id)->value('nom');
            $i++;
       }
        
       return view('staff/publication/publicationIndex')->with( [
            'publications' => $objets, 
            'count' => count($objets), 
            'articles' => $articles
            
        ]);
      

     }

    public function modifierForm(Request $request)
     {
        $id = $request->input('id');
        $objet = DB::table('publicaton')->where('id',$id)->first();
        $article = DB::table('produit')->where('id',$objet->idproduit_id)->value('nom');
        $objets = DB::table('produit')->get();
        $byte_array = base64_encode($objet->image);
        
        $data ="<img class='card-img-top img-fluid' src='data:image/jpeg;base64, $byte_array' >";

        return view('staff/publication/modifier')->with( [ 
            'article' => $article,
            'publication' => $objet,
            'data' => $data,
            'categories' => $objets
            
        ]);
     }



    public function ajouterForm()
     {
       
        $objets = $objets=DB::table('produit')->get();
        return view('staff/publication/ajouter')->with( [
            'categories' => $objets 
            
        ]);  
     }


    

    public function ajouter(Request $request)
     {
            
        $session = new Session();
        $user = $session->get('user')->id;    
        $imageName = $request->file('image')->getClientOriginalName();
        $path = base_path() . '/public';
        $request->file('image')->move($path , "fichier.jpg");
        $article=$request->input('categorie');
        $idproduit_id =  $objet =  $objet =DB::table('produit')->where('nom',$article)->first()->id;
        $description=$request->input('description');
        $prix=$request->input('prix');
        $file = fopen("fichier.jpg","r");
        $image=fread($file,filesize("fichier.jpg"));
        fclose($file);
             
        DB::table('publicaton')->insert(

                [
                    'idproduit_id' => $idproduit_id,
                    'prix' => $prix,
                    'image' => $image,
                    'description' => $description,
                    'date' => (Date('Y-m-d')),
                    'user' => $user
                ]
             );
             
        $objets = DB::table('produit')->get();
             
        echo "<script>setTimeout(function(){ alert('l\'enregistrement a réussi'); }, 3000);</script>";
        return view('staff/publication/ajouter')->with( [
                'categories' => $objets    
            ]);       
         }

     

         public function supprimer(Request $request)
         {
            
            $id=$request->input('id');
            $objet =DB::table('publicaton')->where('id',$id);
            $objet->delete();
            $objets =DB::table('publicaton')->get();
            echo "<script>setTimeout(function(){ alert('la suppression a réussi'); }, 3000);</script>";
        
            return view('staff/publication/publicationIndex')->with( [
                'publications' => $objets    
            ]);  
    
          }


    
        public function modifier(Request $request)
         {
            
            $req= $request->file('image');
            if($req!==null)
                {
                $imageName = $request->file('image')->getClientOriginalName();
                $path = base_path() . '/public';
                $request->file('image')->move($path , "fichier.jpg");
                }
            
            $article=$request->input('categorie');
            $idproduit_id =  $objet =  $objet =DB::table('produit')->where('nom',$article)->first()->id;
            $description=$request->input('description');
            $prix=$request->input('prix');
            $id= $request->input('id');
            if($req==null)
                 {
                 DB::table('publicaton')->where('id',$id)->update(
    
                    [
                        
                        'idproduit_id' => $idproduit_id,
                        'prix' => $prix,
                        'description' => $description,
                        'date' => (Date('Y-m-d'))
                    ]
                 );
                }
                else{
                    $image=$request->input('image');
                    $file = fopen("fichier.jpg","r");
                    $image=fread($file,filesize("fichier.jpg"));
                    fclose($file);
                    DB::table('publicaton')->where('id',$id)->update(
    
                        [
                            
                            'idproduit_id' => $idproduit_id,
                            'prix' => $prix,
                            'image' => $image,
                            'description' => $description,
                            'date' => (Date('Y-m-d'))
                        ]
                     );
                }

           $articles =null;
           $i=0;
           $objets=DB::table('publicaton')->get();

           foreach($objets as $obj)
           {
              $articles[$i]= DB::table('produit')->where('id',$obj->idproduit_id)->value('nom');
              $i++;
           }
                 
           echo "<script>setTimeout(function(){ alert('la modification a réussi'); }, 3000);</script>";
           return view('staff/publication/publicationIndex')->with( [
                    'publications' => $objets ,
                    'count' => count($objets),
                    'articles' => $articles  
                ]);          
         }


 
        public function afficher(Request $request)
         {
        
            $id=$request->input('id');
            $objet = DB::table('publicaton')->where('id',$id)->first();
            $article = DB::table('produit')->where('id',$objet->idproduit_id)->value('nom');
            return view('staff/publication/afficher')->with( [
            'publication' => $objet,
            'article' => $article    
        ]);
         }

 

    
    public function welcome()
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
      
        return view("welcome")->with(['carousel' => $carousel, 'publications' => $objets ,'categories' => $names]);

    }


    public function menuResult(Request $request)
    {
        $val= $request->input('val');
        $id=DB::table('produit')->where('nom',$val)->value('id');
    
        $carousel= DB::table('publicaton')->orderBy('date','desc')->take(5)->get();
        $objets= DB::table('publicaton')->where('idproduit_id',$id)->paginate(9);
        $cats= DB::table('produit')->get();
        $names=null;
        $i=0;
        foreach($cats as $c)
        {
            $names[$i]=($c->nom);
            $i++;
        }
        echo "<script>setTimeout(function(){window.scroll(0,370);},2000); </script>";
      
        return view("categorie")->with(['carousel' => $carousel, 'publications' => $objets ,'categories' => $names ,'categori'=> $val ,'count' => count($objets)]);

    }


    public function result(Request $request)
    {
        $prix1=$request->input('prix1');
        $prix2=$request->input('prix2');
        if(!isset($prix1))
        {
            $prix1=1000;
        }
        if(!isset($prix2))
        {
            $prix2=1000000;
        }
        $categorie=$request->input('categorie');
        if(isset($categorie))
        {
        $id=DB::table('produit')->where('nom',$categorie)->value('id');
        $objets= DB::table('publicaton')->whereBetween('prix',array($prix1,$prix2))->where('idproduit_id',$id)->simplePaginate(9);
        }else{
            $objets= DB::table('publicaton')->whereBetween('prix',array($prix1,$prix2))->simplePaginate(9);
  
        }
        $carousel= DB::table('publicaton')->orderBy('date','desc')->take(5)->get();
             $cats= DB::table('produit')->get();
             $names=null;
             $i=0;
             foreach($cats as $c)
             {
                 $names[$i]=($c->nom);
                 $i++;
             }
             echo "<script>setTimeout(function(){ window.scroll(0,410); }, 1500);</script>";
         
        return view("result")->with(['carousel' => $carousel, 'publications' => $objets ,'categories' => $names]);

    }


}
