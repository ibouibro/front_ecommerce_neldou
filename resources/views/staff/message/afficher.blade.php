@extends("staff")

@section("title") détails message @stop


@section("body")

<div class="card shadow " style="margin-top:50px;min-height:800px;">
            <div class="card-header py-3">
           <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:15px;">Détails du message :  </h6></div>
          </div>
            </div>
            <div class="card-body" >
 
  

 <ul class="list-group" style="width:700px;border:0px solid white;">

  <li class="list-group-item" style="padding-bottom:20px;"><p style="color:blue;"><b>from  : {{"   ".$message->nom}} </p>
  <p>
  <p style="color:blue;"><b>Message : </p></b>
  <?php  echo nl2br($message->message); ?>
  <p style="padding-bottom:8px;">

  <p style="color:blue;"><b>Email : </p></b>
  <?php  echo $message->email; ?>
  <p  style="padding-bottom:8px;">

  
  </li>

</ul>


@stop