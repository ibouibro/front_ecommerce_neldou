@extends("staff")


  @section("title")  Affichage d' une Publication @stop

@section("body")

<div class="row" >
    <div class="col">
        <div class="card shadow mb-4" style="width:500px;height:460px;">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Affichage d'une publication :  </h4>
            
            </div>
            <div class="card-body">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <td>Id</td>
                        <td>{{$publication->id}}</td>
                    </tr> 
                    <tr>
                        <td>Prix</td>
                        <td>{{$publication->prix}}</td>
                    </tr>    
                    <tr>    
                        <td>Date</td>
                        <td>{{$publication->date}}</td>
                    </tr>     
                    <tr>    
                        <td>Description</td>
                        <td><?php echo nl2br($publication->description); ?></td>
                    </tr>    
                    <tr>    
                        <td>Catégorie</td>
                        <td>{{$article}}</td>
                    </tr>    
                
                       
                </table>
        </div>
    </div>
    </div>
    <div class="col">
        <div style="height:380px;width:500px;height:460px; float:left;padding:90px;border: 0.5px solid gray;border-radius:6px;" >
          <?php $data=base64_encode($publication->image); 
           echo   " <img class='card-img-top img-fluid' src='data:image/jpeg;base64,$data' width='100%' height='100%' />"; ?>
        </div>

    </div>
</div>


@stop