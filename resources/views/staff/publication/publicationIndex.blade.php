
@extends("staff")


  @section("title") Publications @stop

@section("body")


        
       
      


<div class="card shadow " style="margin-top:50px;min-height:800px;">
            <div class="card-header py-3">
           <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:15px;">Toutes les publications :<b><h3 style="color:green;font-size:32px;"> {{ $count }} </h3></b>   </h6></div>
            <div style="float:right;"> <a href="ajouterPublicationForm"> <button type="button" style="font-size:17px;"  class="btn btn-info">ajouter une publication</button></a></div></div>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="background:rgba(2,3,4,.1);">
                    <tr>
                      <th>Id</th>
                     <th>Prix</th>
                        <th>Date</th>
                        <th>Article</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot style="background:rgba(2,3,4,.1);">
                    <tr>
                      <th>Id</th>
                      <th>Prix</th>
                        <th>Date</th>
                        <th>Article</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody >
                  <?php    $i=0; ?>
                  @foreach($publications  as $publication)
                  
                      <tr>
                      <td>{{ $publication->id }}</td>
                      <td>{{ $publication->prix }}</td>
                       <td>{{ $publication->date }}</td>
                        <td><?php echo $articles[$i]; ?></td>
                        <?php    $i++; ?>
                      <td style="width:350px;">
                      
                      <div>
                      
                      <div style="float:left;margin-left:20px;">
                      <form method="get" action="afficherPublication">
                      <input type="hidden"  name="id" value={{ $publication->id }}/>
                       <input type="submit" style="font-size:16px;" value="afficher" class="btn btn-success"/>
                      </form>
                      </div>
                     

                      <div style="float:left;margin-left:20px;">
                      <form method="get" action="modifierPublicationForm">
                      <input type="hidden"  name="id" value={{ $publication->id }}/>
                       <input style="font-size:16px;" type="submit" value="modifier" class="btn btn-secondary"/>
                      </form>
                      </div>

                      <div style="float:left;margin-left:20px;">
                      <form method="get" action="supprimerPublication">
                      <input type="hidden" name="id"  value={{ $publication->id }}/>
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


