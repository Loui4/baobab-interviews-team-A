<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PASTE</title>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="assets/css/animate.css">
 <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>

<body>
<div class="col col-md-10 col-md-offset-1 main-container">
    <div class="row">
      <div class="col col-md-12" style="background:#ffffff;">
      <!-- <img src="assets/images/logo.png" class="img-responsive" />-->
          <h1 >PASTEBIN <small>FILE SYSTEM</small></h1>

          <ul class="nav navbar-nav navbar-right">
           admin&nbsp;&nbsp;
          </ul>
        </div>
        <!-- Content -->

        <!-- End Content -->

        <!-- Navigation -->
        <div class="col col-md-12 navbar-column">
           <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class=""><a href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ URL::to('/paste') }}">Manage Pastes</a></li></ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout  <span class="sr-only">(current)</span></a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
        <!-- End Navigation -->

       @yield('main-content')


      @section('footer')
          <!-- Footer -->
       <div class="col col-md-12 footer-column">
      Copyright ©  Created by Team 
      </div>

        </div>
      </div>
     
      <script type="text/javascript">
          function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}



      </script>
          <!-- /footer -->
      @show


</div>
</div>
</body>
</html>
