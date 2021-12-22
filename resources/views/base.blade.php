<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
       
        <title> @section("title")  Accueil! @stop </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

    

    </head>

    <body style="font-size:15px;" >



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <form class="form-inline" method="get" action="chercher" >
            <input class="form-control mr-sm-2" style="font-size:15px;" type="search" placeholder="Search" aria-label="Search">
            <button style="font-size:15px;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="welcome"><span class="glyphicon glyphicon-home"></span> Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">  <span class="glyphicon glyphicon-user"></span> se connecter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Page Content -->

  <div class="container">
     
    <div class="row">

      <div class="col-lg-3">

      <img src="logo.png" style="position:absolute;margin-top:-183px;margin-left:-92px;"><span  class="glyphicon glyphicon-shopping-cart" style="color:rgba(0,9,200,.7);margin-left:213px;font-size:18px;margin-top:25px;"></span>    <div class="list-group">
            <div class="list-group" style="margin-top:53px;">
     <p><h3 style="color:blue;">Nos Catégories</h3></p>
            <?php

foreach($categories as $categorie)
{
       echo   "  <form method='get' action='menuResult'><input type='hidden' name='val' value=".$categorie."> <input  type='submit' class='list-group-item list-group-item-action ax' value=".$categorie." /></form>";

}         
            ?>
            
            
              </div>

              <style> a{text-decoration:none;} .ax:hover{background:rgba(5, 62, 100, 0.7);color:white;} </style>
        </div>
        
      </div>
      
  
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
          <div class="card-body">
              <h4 class="card-title"></h4>
           
        <div id="carouselExampleIndicators" style="height:390px;" class="carousel slide my-4" data-ride="carousel" >
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
    
                      <?php $i=true; ?>
@foreach($carousel as $car)
@if($i==true)
            <div  class="carousel-item active" >
            @else
            <div  class="carousel-item " >
            @endif
                <div class="col-lg-4 col-md-6 mb-4">
                    <div   style="padding:20px;width:300px;height:400px;">
                
      <form action="oneItem" method="get" id="form"><?php echo "<input type='hidden' value='".$car->id."' name='id' />"; ?>  <?php $data=base64_encode($car->image); 
     echo " <img onClick='myFunction(this.parentNode)' style='border:0px solid white;height:210px;width:192px;padding:10px;' src='data:image/jpeg;base64, $data' width='100px' height='100px' />"; ?>
       </form>
       <script>
       
       function myFunction()
       {
         document.getElementById("form").submit();
       }

       </script>
            <div class="card-body">
                        <?php $i=false; ?>
                        <h5 style="margin-left:30px;"><?php echo "    ".number_format($car->prix,0);  ?>{{"  F CFA"}}</h5>
                           </div>
                     
                    </div>
                  </div>
              </div>
           

                @endforeach
              
          
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <div style="width:500px;height:320px;float:right; border-radius:7px;background:white; margin-top:-396px;margin-left:302px;margin-right:0px;position:absolute ;z-index:999;" >
        
          

        <div class="card shadow mb-4" style="border:0px solid white;">
            <div class="card h-100" style="border:0px solid white;padding:7px;background:rgba(0,0,4,.1);"> Vous cherchez un produit 
          </div> 
        <div class="card-body">
        
        <form class="form-inline" method="get" action="result" >
        
            <div class="form-group" style="margin-top:40px;margin-left:40px;">
              <label> Prix compris entre : </label>
            <input class="form-control" style="width:90px;margin-left:20px;" style="font-size:15px;" name="prix1"  type="number" placeholder=" min" >  <label style="margin-left:20px;margin-right:1(px;"> et </label> 
            <input class="form-control" style="width:90px;margin-left:20px;" style="font-size:15px;" name="prix2" type="number" placeholder=" max" >
            </div>
            <div class="form-group" style="margin-top:0px;margin-left:40px;">
            <label> Catégorie : </label>
            <select class="form-control" name="categorie"  style="width:130px;font-size:15px;margin-left:78px;" >
            <option></option>
            @foreach($categories as $cat)
            <option>{{$cat}}</option>
            @endforeach
            </select>
            </div>
            <div class="form-group" style="margin-top:120px;margin-left:-283px;">
            <button class="btn btn-outline-success my-2 my-sm-0" style="font-size:15px;" type="submit">Search</button>
          </div>
          
          </form>
         </div> </div> 
        
        </div>
      </div>

        
      


@yield("body")

     
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->



  </footer>
        

      

   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
 
    </body>
</html>
