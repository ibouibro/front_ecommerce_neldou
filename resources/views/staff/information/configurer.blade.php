@extends("staff")


  @section("title")  Informations boutique @stop

@section("body")



 <div class="card shadow mb-4" style="width:600px;height:460px;">
            <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Saisissez les infos :  </h4>
            
            </div>
            <div class="card-body">
              
  
               <form action="configurer" method="get" >
              
              @if(isset($erreur))
             <div style="color:rgba(200,0,0,.6);border-radius:2px;">{{$erreur}}</div> @endif

                 <div class="form-group">
                        <label class="control-label" for="user">Tél :</label> 
                        <input class="form-control" type="text"  name="tel" required />
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Email :</label>
                        <input class="form-control" type="text"  name="email" required />
                    </div>


                     <div class="form-group">
                        <label class="control-label" for="username"> Addresse :</label>
                        <textarea class="form-control" type="text"  name="addresse" required ></textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Délai de livraison (jours) :</label>
                        <input class="form-control" type="number" name="delai" required />
                    </div>

                    
                   
                    <div class="form-group">
                 <input type="submit" value="Ajouter" class="btn btn-success"/>
                     
                 </div>
               
                 </form>
                
              </div>
            </div>
          

      


@stop

