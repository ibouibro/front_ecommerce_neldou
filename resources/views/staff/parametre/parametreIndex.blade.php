
@extends("staff")


@section("title") Users @stop

@section("body")


      
     
    


<div class="card shadow " style="margin-top:50px;min-height:800px;">
          <div class="card-header py-3">
         <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:13px;">Touts les utilisateurs : <b><h3 style="color:green;font-size:32px;"> {{ $count }} </h3></b>  </h6></div>
          <div style="float:right;"> <a href="ajouterUserForm"> <button type="button" style="font-size:17px;" class="btn btn-info">ajouter un utilisateur</button></a></div></div>
          </div>
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background:rgba(2,3,4,.1);">
                  <tr>
                    <th>Id</th>
                   <th>Nom</th>
                      <th>Prénom</th>
                      <th>Username</th>
                      <th>Téléphone</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot style="background:rgba(2,3,4,.1);">
                  <tr>
                    <th>Id</th>
                    <th>Nom</th>
                      <th>Prénom</th>
                      <th>Username</th>
                      <th>Téléphone</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody >
                @foreach($users  as $user)
                
                    <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nom }}</td>
                     <td>{{ $user->prenom }}</td>
                     <td>{{ $user->username }}</td>
                     <td>{{ $user->tel }}</td>
                    <td style="width:350px;">
                    
                    <div>
                   

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="modifierUserForm">
                    <input type="hidden"  name="id" value={{ $user->id }}>
                     <input style="font-size:16px;" type="submit" value="modifier" class="btn btn-secondary"/>
                    </form>
                    </div>

                @if($user->id != 1)

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="supprimerUser">
                    <input type="hidden" name="id"  value={{ $user->id }}>
                    <input type="submit" style="font-size:16px;" onclick="return confirm('Etes vous sure de supprimer ?')" value="supprimer" class="btn btn-danger"/>
                    </form>
                    </div>
                    
                    @endif
                    </div>

                    </td>
                  </tr>

@endforeach

                  </tbody>
              </table>
            </div>
          </div>
        </div>
       


@stop


