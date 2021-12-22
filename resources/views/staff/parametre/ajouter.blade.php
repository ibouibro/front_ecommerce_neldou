@extends("staff")


  @section("title")  Ajouter une Publication @stop

@section("body")



 <div class="card shadow mb-4" style="width:600px;height:460px;">
            <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Ajoutez un utilisateur :  </h4>
            
            </div>
            <div class="card-body">
              
  
               <form action="ajouterUser" method="get" >
              
              @if(isset($erreur))
             <div style="color:rgba(200,0,0,.6);border-radius:2px;">{{$erreur}}</div> @endif

                 <div class="form-group">
                        <label class="control-label" for="user">Nom :</label> 
                        <input class="form-control" type="text"  name="nom" required />
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Prénom :</label>
                        <input class="form-control" type="text"  name="prenom" required />
                    </div>


                     <div class="form-group">
                        <label class="control-label" for="username"> Username :</label>
                        <input class="form-control" type="text"  name="username" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Password :</label>
                        <input class="form-control" type="password" name="password1" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Répétez le Password :</label>
                        <input class="form-control" type="password" name="password2" required />
                    </div>
                   
                    <div class="form-group">
                 <input type="submit" value="Ajouter" class="btn btn-success"/>
                     
                 </div>
               
                 </form>
                
              </div>
            </div>
          

      


@stop

