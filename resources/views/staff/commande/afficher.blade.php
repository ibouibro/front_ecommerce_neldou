@extends("staff")


  @section("title")  Affichage d' une Publication @stop

@section("body")

<div class="row" >
    <div class="col">
        <div class="card shadow mb-4" style="width:500px;height:460px;">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Affichage d'une commande :  </h4>
            
            </div>
            <div class="card-body">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <td>Id</td>
                        <td>{{$commande->id}}</td>
                    </tr> 
                    <tr>
                        <td>Publication</td>
                        <td>{{$commande->publication}}</td>
                    </tr>    
                    <tr>    
                        <td>Date</td>
                        <td>{{$commande->date}}</td>
                    </tr> 
                    <tr>    
                        <td>Téléphone</td>
                        <td>{{$commande->tel}}</td>
                    </tr>     
                    <tr>    
                        <td>Addresse</td>
                        <td><?php echo nl2br($commande->addresse); ?></td>
                    </tr>    
                    <tr>    
                        <td>Etat</td>
                        <td>@if($commande->etat == 1) <div style="color:green">validée </div> @else <div style="color:red">invalidée </div>@endif  </td>
                    </tr>    
                
                       
                </table>
        </div>
    </div>
    </div>
    <div class="col">
        <div style="height:380px;width:500px;height:460px; float:left;padding:80px;border: 0.5px solid gray;border-radius:6px;" >
          <?php $data=base64_encode($image); 
           echo   " <img  src='data:image/jpeg;base64,$data' style='width:90%;height:90%' />"; ?>
        </div>

    </div>
</div>


@stop