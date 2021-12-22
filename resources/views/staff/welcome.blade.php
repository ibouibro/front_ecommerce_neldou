<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>login</title>

  <!-- Favicons -->
 

  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login"  method="POST" action="{{ route('login') }}">
    
        <h2 style="margin-bottom:39px;background:rgba(12,23,23,.6);" class="form-login-heading"><a href="#" class="logo"><b><div style="color:black;">GLAMY</div><span style="color:pink;">AWA</span></b></a></h2>
        <div class="login-wrap" >

    
        @error('email')
        {{$message}}
        @enderror
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus   />
          <br>
          @error('password')
        {{$message}}
        @enderror
          <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
          <label class="checkbox">
            
            <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> Mot de passe oublié?</a>
            </span>
            </label>
          <button style="background:rgba(12,23,23,.6);" class="btn btn-theme btn-block" href="#" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <div class="login-social-link centered">
              </div>
          
        </div>
        <!-- Modal -->
        <div  aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background:rgba(20,20,21,.7)">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">récupérer son mot de passe</button>
                <h4 class="modal-title">Mot de passe oublié ?</h4>



              </div>
              <div  class="modal-body">
                <p>Enter votre addresse email </p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("dark.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
