@extends("base")




@section("body")
<div class="card shadow mb-4" style="width:100%;font-family:arial;">
            <div class="card-header py-3" style="background:rgba(11,0,10,.1);">
             <h4  style="color:black;" >Détails de l'article :  </h4>
            
            </div>

            <div class="card-body">

<div style="height:450px;width:100%;margin-top:15px;" >
             <div style="height:380px;width:380px; float:left;padding:90px;border: 0.5px solid rgba(22,22,12,1);border-radius:6px;" >
             <?php $data=base64_encode($publication->image); 
     echo " <img onClick='myFunction(this.parentNode)' style='border:0px solid white;padding:10px;width:95%;height:95%;' src='data:image/jpeg;base64, $data' width='100px' height='100px' />"; ?>
          </div>
           <div  style="height:380px;width:300px;float:left; margin-left:40px;" >
           <pre style="background:white;border:0px;font-size:21px;">
<h5 style="font-size:15px;">délai de livraison  : {{$delai}}  jour </h5>
<h5 style="font-size:15px;"><?php echo number_format($publication->prix,0);  ?> {{" FCFA"}}</h5>
<h4 style="color:rgba(22,3,113,1);font-size:14px;"><span class="glyphicon glyphicon-usd"></span>  Payez à la livraison</h4>
<h4 style="color:rgba(22,3,113,1);font-size:14px;"><button style="font-size:16px;" type="button" class="btn btn-primary"  >
          <span  class="glyphicon glyphicon-shopping-cart"></span> + Ajouter au panier
        </button></h4>
<button style="font-size:16px;" type="button" class="btn btn-default btn-sm" onClick='myFunction()' >
<button type="button" style="margin-left:-12px;" onClick="myFunction()" class="btn btn-info"><h4><span  class="glyphicon glyphicon-shopping-cart"></span> Commander ce produit</h4> </button>
        </button>
           </pre>
          </div>

          <script> function myFunction(){
              document.getElementById("id").style.display="block";
              setTimeout(function(){ window.scroll(0,980); }, 1000);

          } </script>
           </div>
          <div style="float:top;border:1px solid gray;padding:10px;margin-top:-54px;border-radius:4px;">
                 <p><strong>Description  :</strong> </p> <?php echo nl2br($publication->description); ?> </label>
                             </div>
            
          </div>



          </div>
          
          
          <div style="display:none;" id="id" class="card shadow mb-4" style="width:100%;font-family:arial;">
            <div class="card-header py-3" style="background:rgba(11,0,10,.1);">
             <h4  style="color:black;" >Finalisez votre commande  </h4>
            
            </div>

            <div class="card-body">
              
              
              
             
                <form method="get" action="commander"    >
                <?php echo " <input type='hidden' name='id' value='".$publication->id."'  />"; ?>
               <div class="form-group">
                        <label class="control-label" for="username">Votre nom complet :</label>
                        <input style="font-size:15px;" class="form-control" type="text" name="nom" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username">Votre numéro de téléphone :</label>
                        <input style="font-size:15px;" class="form-control" type="number" name="tel" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username">Votre addresse (précise) :</label>
                        <textarea style="font-size:15px;" class="form-control" style="height:100px;" name="addresse" required ></textarea>
                    </div>

                    
                   
                    <div class="form-group">
                 <input type="submit" style="font-size:15px;" value="Valider la commande" class="btn btn-success"/>
                     
                 </div>

                 
               
              </form>
                
              </div>
            </div>
            </div>
            </div>

      

        <!-- /.card -->

        

@stop