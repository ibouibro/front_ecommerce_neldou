
@extends("staff")


@section("title") Publications @stop

@section("body")


      
     
    


<div class="card shadow " style="margin-top:50px;min-height:800px;">
          <div class="card-header py-3">
         <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:13px;">Toutes les commandes @if($tok==0) encore invalides @else déjà validées @endif :<b><h3 style="color:green;font-size:32px;"> {{ $count }} </h3></b> </h6></div>
          <div style="float:right;"> @if($tok == 0) <a  href="commandesArchivées"> @else <a  href="commandeIndex">   @endif <button type="button" style="font-size:17px;" class="btn btn-info">afficher les commandes @if($tok == 0) {{"archivées"}}  @else {{"validées"}}  @endif</button></a></div></div>
          </div>
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background:rgba(2,3,4,.1);">
                  <tr>
                  <th>Id</th>
                    <th>Publication</th>
                      <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot style="background:rgba(2,3,4,.1);">
                  <tr>
                    <th>Id</th>
                    <th>Publication</th>
                      <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody >
                
                @foreach($commandes  as $commande)
                
                    <tr>
                    <td>{{ $commande->id }}</td>
                    <td>{{ $commande->publication }}</td>
                     <td>{{ $commande->date }}</td>
                      
                     
                    <td style="width:350px;">
                    
                    <div >
                    
                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="afficherCommande">
                    <input type="hidden"  name="id" value={{ $commande->id }}/>
                     <input style="font-size:16px;" type="submit" value="afficher" class="btn btn-secondary"/>
                    </form>
                    </div>

                    @if($tok == 1)

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="invaliderCommande">
                    <input type="hidden"  name="id" value={{ $commande->id }} >
                     <input type="submit" value="invalider" class="btn btn-success"/>
                    </form>
                    </div>
                   
                   @else

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="validerCommande">
                    <input type="hidden" value = {{ $commande->id }}  name="id">
                     <input type="submit" style="font-size:16px;" value="valider" class="btn btn-success">
                    </form>
                    </div>
                     
                     @endif

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="supprimerCommande">
                    <input type="hidden" name="id"  value={{ $commande->id }}/>
                    <input style="font-size:16px;" type="submit" onclick="return confirm('Etes vous sure de supprimer ?')" value="supprimer" class="btn btn-danger"/>
                    </form>
                    </div>
                    
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


