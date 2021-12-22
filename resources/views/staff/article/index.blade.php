
@extends("staff")


@section("title") Catégories d'articles @stop

@section("body")


      
     
    


<div class="card shadow " style="margin-top:50px;min-height:800px;">
          <div class="card-header py-3">
         <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:13px;">Toutes les catégories :<b><h3 style="color:green;font-size:32px;"> {{ $count }} </h3></b> </h6></div>
         </div>
          </div>
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background:rgba(2,3,4,.1);">
                  <tr>
                  <th>Id</th>
                    <th>Nom</th>
                      
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot style="background:rgba(2,3,4,.1);">
                  <tr>
                    <th>Id</th>
                      <th>Nom</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody >
                
                @foreach($categories  as $categorie)
                
                    <tr>
                    <td>{{ $categorie->id }}</td>
                    <td >{{ $categorie->nom }}</td>
                    
                      
                     
                    <td style="width:350px;">
                    
                  <div style="float:left;margin-left:20px;">
                    <form method="get" action="supprimerCategorie">
                    <input type="hidden" name="id"  value={{ $categorie->id }}>
                    <input style="font-size:16px;" type="submit" onclick="return confirm('Etes vous sure de supprimer ?')" value="supprimer" class="btn btn-danger"/>
                    </form>
                    </div>
                    
                    </div>

                    </td>
                  
                    </tr>
@endforeach


                  <tr>
                    <td>{{ "" }}</td>
                    <td><form id="new" action="ajouterCategorie" method="get" ></form></td>
                    <td id="buttonAdd"> <div style="float:left;margin-left:20px;"><button type="button" style="font-size:16px;" onClick="toAdd()" class="btn btn-secondary">ajouter</button></div></td>
                    </tr>
                  </tbody>
              </table>

<script>

function ajouter()
{
    document.getElementById("new").submit();
}



function toAdd()
{
    document.getElementById("new").innerHTML="<input type='text' class='form-control' name='nom' style='width:180px;'>";
    document.getElementById("buttonAdd").innerHTML="<button type='button' onClick='ajouter()' class='btn btn-light' style='font-size:13px'>Valider</button>";
}



</script> 

            </div>
          </div>

<form method="get" id="modifier" style="display:none;padding:20px;" action="modifierCategorie">
          <div class="form-group" style="width:400px;">
                        <label class="control-label" for="user">Nom :</label> 
                        <input class="form-control" type="text"  name="nom" required />
                    </div>
                    <div class="form-group" style="width:400px;">
                           <input class="form-control" type="submit" class="btn btn-success" style="background:blue;"  value="valider"  />
                    </div>
</form>
        </div>
       


@stop


