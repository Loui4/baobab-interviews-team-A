@extends('layout.app')
@section('main-content')
<!-- Content -->
<header id="header"> 
<div class="container">
<div class="row">
  <div class="col-md-10">
    <h2><span class="glyphicon glyphicon-cog"></span> Dashboard<small>  Welcome Mr Bwanali</small></h2>
   </div>
 <div class="col-md-2 ">
   <div class="dropdown " style="padding-top:20px;">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background: #008080 !important;" >CREATE
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">add Paste</a></li>
        <li><a href="#">View Paste</a></li>
        <li><a href="#">Add User</a></li>
        
      </ul>
 </div>
  </div>
</div>
</div>
</header>

      <div class="col col-md-12">
            <h4 class="page-header"> Dasboard</h4>
        </div>

   <div class="container">
       <section id="meni">
         <div class="row">
          <div class="col-md-3">
            <div class="list-group active ">
                <a href="#" class="list-group-item active main-color-bg" >
                <span class="glyphicon glyphicon-cog"></span>  Quicklinks
                </a>
                <a href="views/products/" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Paste</a>
                <a href="views/users" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Users</a>
                <a href="#" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> User</a>
              </div>
              <table class="animated fadeIn table table-bordered table-striped">
                           <caption>My Activity</caption>
                           <thead>
                           <tr>
                               <th>Activity</th>
                               <th>Timestamp </th>

                           </tr>
                           </thead>
                           <tbody>
                           <tr>
                               <td>Logged in</td>
                               <td>2017-07-26:22:00</td>

                           </tr>

                           </tbody>

                       </table>

          </div>
          <div class="col-md-9">

            <div class="panel panel-default" style="width:90%;">
              <div class="panel-heading main-color-bg style="color:#ffffff;>
                <h3 class="panel-title"><span class="glyphicon glyphicon-dashboard"></span>  SYSTEM OVERVIEW</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="well main-color">
                    <h2><span class="glyphicon glyphicon-credit-card"></span></h2>
                      <h4>Paste</h4>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="well wello">
                      <h2><span class="glyphicon glyphicon-user"></span>User</h2>
                      <h4>ISers</h4>
                    </div>
                  </div>
              
                </div>
               <hr style="height:3px; background:#008080;">
               <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="glyphicon glyphicon-envelope"></span>  Notifications</h3>
                    </div>
                    <div class="panel-body">

                    </div>
                  </div
               </div>
                 </div>


          </div>


         </div>
      </section>

</div>



@endsection