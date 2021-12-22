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
                        <?php     echo " <input class='form-control' style='font-size:15px' type='number' name='delai' value='".$information->tel."' required />"; ?>
                
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Email :</label>
                        <?php     echo " <input class='form-control' style='font-size:15px' type='text' name='email' value='".$information->email."' required />"; ?>
                   </div>


                     <div class="form-group">
                        <label class="control-label" for="username"> Addresse :</label>
                        <?php     echo " <textarea class='form-control'  style='font-size:15px' name='addresse'  required >"; echo nl2br($information->addresse); ?>
                </textarea>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Délai de livraison (jours) :</label>
                  <?php     echo " <input class='form-control' style='font-size:15px' type='number' name='delai' value='".$information->delai."' required />"; ?>
                    </div>

                    
                   
                    <div class="form-group">
                 <input type="submit" style="font-size:15px" value="Modifier" class="btn btn-success"/>
                     
                 </div>
               
                 </form>
                
              </div>
            </div>
          

      


@stop

