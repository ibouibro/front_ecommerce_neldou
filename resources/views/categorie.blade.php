<!-- <h3><span style="color:yellow;" >&#9734; &#9734; &#9733; </span></h3> -->


@extends("base")

@section("tilte") Résultat de recherche @stop




@section("body")



          <script>Window.scrollTop + =300;</script>

         
      <div style="background:rgba(0,0,4,.1);padding:4px;margin-bottom:23px;margin-top:-35px;z-index:23;border-radius:7px;margin-right:0px;">
      <h4 style="color:rgba(12,23,45,.5);"><b style="color:blue;">{{$categori}}</b> @if($count==0) : Aucun résultat n'a été trouvé pour le moment @else {{" : "}} {{$count}} {{" publications"}} @endif </h4></div>
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
         
         {{$publications->links()}}
      </div></div>
        

      </div>


@stop

