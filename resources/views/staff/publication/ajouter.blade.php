@extends("staff")


  @section("title")  Ajouter une Publication @stop

@section("body")



 <div class="card shadow mb-4" style="width:600px;height:460px;">
            <div class="card-header py-3">
             <h4 class="m-0 font-weight-bold text-primary">Ajoutez une publication :  </h4>
            
            </div>
            <div class="card-body">
              
  
               
               {{Form::open(array('url'=>'ajouterPublication','method'=>'post','files'=>true))}}
                
                 <div class="form-group">
                        <label class="control-label" for="user">Catégorie Article :</label> 
                        <select class="form-control" name="categorie"   >

@foreach($categories as $categorie)

<option>{{$categorie->nom}}</option>
@endforeach
</select>
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Prix :</label>
                        <input class="form-control" type="number" name="prix" required />
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username"> Choisir une image :</label>
                        <input  type="file" name="image" required />
                    </div>

                     <div class="form-group">
                        <label class="control-label" for="username"> Description :</label>
                        <textarea rows="5" class="form-control" type="file" name="description" required ></textarea>
                    </div>
                   
                    <div class="form-group">
                 <input type="submit" value="Ajouter" class="btn btn-success"/>
                     
                 </div>
               
                 {{Form::close()}}
                
              </div>
            </div>
          

      


@stop

