@extends("base")

@section("tilte") Accueil @stop




@section("body")




        <div class="row">

        @foreach($publications as $pub)

<?php $id=  "id".$pub->id; ?>
          <div class="col-lg-4 col-md-6 mb-4" style="border:0px solid white;">
              <div class="card shadow mb-4" style="border:0px solid white;">
            <div class="card h-100" style="border:0px solid white;padding-left:29px;">
            <form action="oneItem" method="get" > <?php echo "<input type='hidden' value='".$pub->id."' name='id' />"; ?>
             <?php $data=base64_encode($pub->image); 
     echo " <img onClick='myFunction(this.parentNode)' style='border:0px solid white;height:210px;width:192px;padding:10px;' src='data:image/jpeg;base64, $data' width='100px' height='100px' />"; ?>
       </form>
      
              <div class="card-body" style="border:0px solid white;">
                <h4 class="card-title">
                  
                </h4>
                <h5 style="margin-left:-15px;"><?php echo number_format($pub->prix,0);  ?> {{" FCFA"}}</h5>
                   </div>
                </div>
          </div>
        </div>
      
@endforeach


         
      </div></div>
        <!-- /.row -->

      </div>


@stop

