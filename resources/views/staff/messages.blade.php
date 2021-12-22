
@extends("staff")


  @section("title")  Messages @stop

@section("body")

<div class="card shadow " style="margin-top:50px;min-height:800px;">
            <div class="card-header py-3">
           <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:15px;">Tous les messages :  </h6></div>
          </div>
            </div>
            <div class="card-body" >
 
  

 <ul class="list-group">
 @foreach($news as $new)
  <li class="list-group-item" style="padding-bottom:20px;"><p><b>from  : {{"   ".$new->nom}} <span class="badge" style="background:green;">nouveau</span></b></p>
  <p>
  <p><b>Message : </p></b>
  <?php  echo nl2br($new->message); ?>
  <p style="padding-bottom:8px;">

  <p><b>Email : </p></b>
  <?php  echo $new->email; ?>
  <p  style="padding-bottom:8px;">
  </li>
@endforeach
{{$news->links()}}
</ul>

<ul class="list-group">
 @foreach($messages as $new)
  <li class="list-group-item" style="padding-bottom:20px;"><p><b>from  : {{"   ".$new->nom}} </b></p>
  <p>
  <p><b>Message : </p></b>
  <?php  echo nl2br($new->message); ?>
  <p style="padding-bottom:8px;">

  <p><b>Email : </p></b>
  <?php  echo $new->email; ?>
  <p  style="padding-bottom:8px;">
  </li>
@endforeach

{{$messages->links()}}

</ul>
</div>
            
             
            </div>
             
          

      


@stop

