
@extends("staff")


@section("title") Messages @stop

@section("body")


      
     
    


<div class="card shadow " style="margin-top:50px;min-height:800px;">
          <div class="card-header py-3">
         <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:13px;">Tous les messages : <b><h3 style="color:green;font-size:32px;"> {{ $count }} </h3></b>  </h6></div>
         </div>
          </div>
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background:rgba(2,3,4,.1);">
                  <tr>
                    <th>Id</th>
                   <th>From</th>
                     
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot style="background:rgba(2,3,4,.1);">
                  <tr>
                    <th>Id</th>
                    <th>From</th>
                      
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody >
                @foreach($messages  as $message)
                
                    <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->nom }}</td>
                  
                    <td style="width:350px;">
                    
                    <div>
                   

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="supprimerMessage">
                    <input type="hidden"  name="id" value={{ $message->id }}>
                     <input style="font-size:16px;" type="submit"onclick="return confirm('Etes vous sure de supprimer ?')" value="supprimer" class="btn btn-danger"/>
                    </form>
                    </div>

    

                    <div style="float:left;margin-left:20px;">
                    <form method="get" action="afficherMessage">
                    <input type="hidden" name="id"  value={{ $message->id }}>
                    <input type="submit" style="font-size:16px;"  value="afficher" class="btn btn-success"/>
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


