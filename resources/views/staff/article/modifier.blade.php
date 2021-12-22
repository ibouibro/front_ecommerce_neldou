@extends("staff")


  @section("title")  Modefier un User @stop

@section("body")



 <div class="card shadow mb-4" style="width:600px;height:460px;">
            <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Modifiez une Catégorie :  </h4>
            
            </div>
            <div class="card-body">
              
  
               <form action="modifierCategorie" method="get" >
              
           <input type="hidden" name="id" value={{$categorie->nom}}>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Prénom :</label>
                        <input class="form-control" type="text" value={{$objet->prenom}} name="prenom" required />
                    </div>

                    <div class="form-group">
                 <input type="submit" value="Appliquer" class="btn btn-success"/>
                     
                 </div>
               
                 </form>
                
              </div>
            </div>
          

      


@stop

