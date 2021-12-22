
@extends("base")

@section("title") contactez nous @stop

@section("body")



         
      <div style="background:rgba(0,0,4,.1);padding:4px;margin-bottom:23px;margin-top:-35px;z-index:23;border-radius:7px;margin-right:0px;">
      <h4 style="color:rgba(12,23,45,.5);"> Contactez nous : ! </h4></div>

<div class="container">
<script>Window.scrollTop + =400 </script>
@if(isset($ok))
<div style="background:rgba(0,0,222,.6);font-size:17px;padding:15px;">{{$ok}}</div>
   @endif <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"> <span class="glyphicon glyphicon-envelope"></span> Contact us.
                </div>
                <div class="card-body" style="font-size:15px;">
                    <form method="get" action="send">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input style="font-size:15px;" type="text" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">votre addresse email</label>
                            <input style="font-size:15px;" type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Votre Message</label>
                            <textarea class="form-control" name="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"> <span class="glyphicon glyphicon-home"></span> Address</div>
                <div class="card-body">
                    <p>{{$contact->addresse}}</p>
                    
                    <p>Sénégal</p>
                    <p>Email : {{$contact->email}}</p>
                    <p>Tel. {{$contact->tel}}</p>

                </div>

            </div>
        </div>
    </div>
</div>
</div></div>
@stop