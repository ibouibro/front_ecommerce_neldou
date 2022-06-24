<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
       
        <title>@section("title") Welcome! @stop</title>

        <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="admin/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/csss/sb-admin-2.min.css" rel="stylesheet">



  <!-- Bootstrap core CSS -->
  <link href="admin/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="admin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="admin/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet">
  

  <link href="admin/table/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="admin/table/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="admin/table/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



  <script src="lib/chart-master/Chart.js"></script>

       
       
        
    </head>
    <body style="font-size:15px;" id="ref"  onload="f()">

   
    <script type="text/javascript">


 

setTimeout(function() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var x = this.responseText;
  document.getElementById("id").innerHTML="dgdgf";
 if(x==0)
 {
   document.location.href="/";
 }
    }
  };
  xhttp.open("GET", "token", true);
  xhttp.send();
},200);


</script>





     <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a class="logo"><b>GlamyAwa<span> ADMINISTRATION </span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
         <li style="margin-right:19px;"><a href="messages"><span class="glyphicon glyphicon-envelope"></span><span class="badge" style="background:red;">@if(isset($n)){{$n}}@endif</span></a></li>

          <!-- notification dropdown end -->
        </ul>

        <form style="float:right;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        <!--  notification end -->
      </div>
      <div class="top-menu">
     
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout"> <i class="fa fa-user"></i> {{" "}}Logout</a></li>
        </ul>
      </div>


    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->



        <ul class="sidebar-menu" id="nav-accordion">
          
            <li class="mt">
              <a class="active" href="home">
                <i class="fa fa-home"></i>
                <span>Accueil</span>
                </a>
            </li>
           
            <li class="sub-menu">
              <a href="parametreIndex">
                <i class="fa fa-cogs"></i>
                <span style="font-size:15px">paramétres</span>
                </a>
             
            </li>

            <li class="sub-menu" >
              <a href="informationIndex">
                <i class="fa fa-info"></i>
                <span style="font-size:15px" >coordonnées</span>
                </a>
             
            </li>

            <li class="sub-menu">
              <a href="commandeIndex">
                <i class="fa fa-money"></i>
                <span style="font-size:15px">commandes</span>
                </a>
             
            </li>
  
            <li class="sub-menu">
              <a href="#">
                <i class="fa fa-money"></i>
                <span style="font-size:15px">statistiques</span>
                </a>
             
            </li>
  
            <li class="sub-menu">
              <a href="produitIndex">
                <i class="fas fa-fw fa-money"></i>  
                <span style="font-size:15px">produits</span>
                </a>
             
            </li>
  
            <li class="sub-menu">
              <a href="#">
                <i class="fas fa-fw fa-user"></i>
                <span style="font-size:15px">Livraisons</span>
                </a>
             
            </li>
  
            <li class="sub-menu">
              <a href="#">
                <i class="fas fa-fw fa-user"></i>
                <span style="font-size:15px">Staff</span>
                </a>
             
            </li>
  
             <li class="sub-menu">
              <a href="#">
                <i class="fas fa-fw fa-user"></i>
                <span style="font-size:15px">Livreurs</span>
                </a>
             
            </li>

             <li class="sub-menu">
              <a href="publicationIndex">
                <i class="fas fa-fw fa-money"></i>
                <span style="font-size:15px">Publications</span>
                </a>
             
            </li>
            
            
           
           
          </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper" style="font-size:17px;padding-top:35px;">
       
     

 @yield("body")
 
    </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Fait par <strong>ibouibn28@gmail.com for GlamyAwa Company</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a "#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
        

  <script src="admin/lib/jquery/jquery.min.js"></script>

<script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="admin/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="admin/lib/jquery.scrollTo.min.js"></script>
<script src="admin/lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="admin/lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
<script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="lib/sparkline-chart.js"></script>
<script src="lib/zabuto_calendar.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var unique_id = $.gritter.add({
      // (string | mandatory) the heading of the notification
      title: 'Welcome to Dashio!',
      // (string | mandatory) the text inside the notification
      text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
      // (string | optional) the image to display on the left
      image: 'img/ui-sam.jpg',
      // (bool | optional) if you want it to fade out on its own or just sit there
      sticky: false,
      // (int | optional) the time you want it to be alive for before fading out
      time: 8000,
      // (string | optional) the class name you want to apply to that specific message
      class_name: 'my-sticky-class'
    });

    return false;
  });
</script>
<script type="application/javascript">
  $(document).ready(function() {
    $("#date-popover").popover({
      html: true,
      trigger: "manual"
    });
    $("#date-popover").hide();
    $("#date-popover").click(function(e) {
      $(this).hide();
    });

    $("#my-calendar").zabuto_calendar({
      action: function() {
        return myDateFunction(this.id, false);
      },
      action_nav: function() {
        return myNavFunction(this.id);
      },
      ajax: {
        url: "show_data.php?action=1",
        modal: true
      },
      legend: [{
          type: "text",
          label: "Special event",
          badge: "00"
        },
        {
          type: "block",
          label: "Regular event",
        }
      ]
    });
  });

  function myNavFunction(id) {
    $("#date-popover").hide();
    var nav = $("#" + id).data("navigation");
    var to = $("#" + id).data("to");
    console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
  }
</script>
<script src="admin/table/vendor/jquery/jquery.min.js"></script>
<script src="admin/table/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/table/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin/table/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="admin/table/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="admin/table/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/table/js/demo/datatables-demo.js"></script>




    </body>
</html>
