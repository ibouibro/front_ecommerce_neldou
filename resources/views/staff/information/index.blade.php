@extends("staff")

@section("title") informations de la boutique @stop


@section("body")

<div class="card shadow " style="margin-top:50px;min-height:800px;">
            <div class="card-header py-3">
           <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:15px;">Vos coordonnées :  </h6></div>
          </div>
            </div>
            <div class="card-body" >
 
  

 <ul class="list-group" style="width:700px;border:0px solid white;">
@if(isset($information))
  <li class="list-group-item" style="padding-bottom:20px;">
  <p>
  <p style="color:blue;"><b>Addresse : </p></b>
  <?php  echo nl2br($information->addresse); ?>
  <p style="padding-bottom:8px;">

  <p style="color:blue;"><b>Email : </p></b>
  <?php  echo $information->email; ?>
  <p  style="padding-bottom:8px;">

  <p style="color:blue;"><b>Tél : </p></b>
  <?php  echo $information->tel; ?>
  <p  style="padding-bottom:18px;">

  <p><a type="button" style="font-size:15px" href="modifierForm" class="btn btn-secondary" >Modifier</a></p>
  
  </li>
  @else

Les informations ne sont pas encore configurée !!!
<p><a type="button" href="configurerForm" class="btn btn-success" >Configurer maintenant</a></p>

  @endif

</ul>


@stop