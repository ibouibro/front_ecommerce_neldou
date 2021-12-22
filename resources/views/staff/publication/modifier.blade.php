@extends("staff")


  @section("title")  Modifier une Publication @stop

@section("body")

 <div class="row" >
 <div class="col">
            <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Midifiez une publication :  </h4>
            
            </div>
            <div class="card-body">
              
               
               {{Form::open(array('url'=>'modifierPublication','method'=>'post','files'=>true))}}
              
                
                 <div class="form-group">
                        <label class="control-label" for="user">Catégorie Article :</label> 
                        <select class="form-control" name="categorie"   >
<option>{{$article}}</option>
@foreach($categories as $categorie)
@if($categorie->nom !== $article)
<option>{{$categorie->nom}}</option>
@endif
@endforeach
</select>
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Prix :</label>
                        <input class="form-control" type="number" name="prix" value={{$publication->prix}} required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Choisir une nouvelle image :</label>
                        <input  type="file" name="image" />
                    </div>

                     <div class="form-group">
                        <label class="control-label" for="username"> Description :</label>
                        <textarea rows="5" class="form-control"  type="file" name="description" required >{{$publication->description}}</textarea>
                    </div>
                   <input type="hidden" name="id" value={{$publication->id}}>
                    <div class="form-group">
                 <input style="background:blue;" type="submit" value="Modifier" class="btn btn-success"/>
                     
                 </div>
               
              {{Form::close()}}
                
              </div>
              </div>
              <div class="col">
              <div style="height:380px;width:380px; float:left;padding:90px;border: 1px solid blue;border-radius:6px;" >
          <?php $data=base64_encode($publication->image); 
     echo   " <img class='card-img-top img-fluid' src='data:image/jpeg;base64,$data' width='100%' height='100%' />"; ?>
          </div>
              </div>
            </div>
             
          

      


@stop

