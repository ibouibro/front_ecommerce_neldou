@extends("staff")

@section("title") accueil @stop



@section("body")
 <!-- Page Heading -->
 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Raccourcis et Informations</h1>
                </div>
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
           <a href="#" class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2 " style="padding:5px;">
                      <div style="font-size:14px;" class=" font-weight-bold text-primary text-uppercase mb-1">Nombre total de Ventes : <h2 style="color:green;font-size:32px;">{{$ventes}}<h2></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </a> 


        
            <!-- Earnings (Monthly) Card Example -->
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2" style="padding:5px;">
                      <div style="font-size:14px;" class=" font-weight-bold text-success text-uppercase mb-1"><h2 style="color:green;font-size:32px;">{{$com}}<h2>commandes invalidées</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="row no-gutters align-items-center">
                        
                       
                          
                      
                    
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
             
          </div>



@stop
