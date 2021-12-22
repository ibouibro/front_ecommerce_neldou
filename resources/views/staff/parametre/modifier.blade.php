@extends("staff")


  @section("title")  Modefier un User @stop

@section("body")



 <div class="card shadow mb-4" style="width:600px;height:460px;">
            <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Modifiez un utilisateur :  </h4>
            
            </div>
            <div class="card-body">
              
  
               <form action="modifierUser" style="font-size:14px;" method="get" >
              
              @if(isset($erreur))
             <div style="color:rgba(200,0,0,.6);border-radius:2px;">{{$erreur}}</div> @endif

                 <div class="form-group">
                        <label class="control-label" for="user">Nom :</label> 
                        <input class="form-control" type="text" value={{$objet->nom}} name="nom" required />
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Prénom :</label>
                        <input class="form-control" type="text" value={{$objet->prenom}} name="prenom" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Téléphone :</label>
                        <input class="form-control" type="text" value={{$objet->tel}} name="tel" required />
                    </div>

                      <input type="hidden" value = {{$objet->id}} name="id" >
                     <div class="form-group">
                        <label class="control-label" for="username"> Username :</label>
                        <input class="form-control" type="text" value={{$objet->username}} name="username" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Password :</label>
                        <input class="form-control" type="password" name="password1" value={{$objet->password}} required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Répétez le Password :</label>
                        <input class="form-control" type="password" value={{$objet->password}} name="password2" required />
                    </div>
                   
                    <div class="form-group">
                 <input type="submit" value="Modifier"  style="font-size:14px;" class="btn btn-success"/>
                     
                 </div>
               
                 </form>
                
              </div>
            </div>
          

      


@stop

