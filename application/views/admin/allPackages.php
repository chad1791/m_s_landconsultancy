<?php
    if($this->session->userdata('admin_id')){

      $admin_email = $this->session->userdata('email');
      $accountType = $this->session->userdata('accountType');

        //getting default events for user...

        $allPackages = array();

        if($this->session->userdata('allPackages')){    
            $allPackages = $this->session->userdata('allPackages');        
        }  
        
        //echo '<pre>';
        //print_r($allPackages);
        //echo '</pre>';

    }
    else{
      redirect('/');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Courier | All Packages</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/css/custom.css">   
    <!-- DataTables --> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <!-- toastr messages link css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>    
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>vendor/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <!--div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Administrator</h2><span>My Courier</span>
          </div-->
          <div class="sidenav-header-inner text-center">
            <h2 class="h5"><?php if($accountType==1){echo 'Administrator';}else{echo 'Employee';} ?></h2><span>My Courier</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="dashboard" class="brand-small text-center"> <strong>M</strong><strong class="text-primary">C</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="dashboard"> <i class="icon-home"></i>Dashboard</a></li>
            <li class="active"><a href="allPackages"> <i class="icon-form"></i>All Packages</a></li>
            <li><a href="collections"> <i class="fa fa-bar-chart"></i>Collections</a></li>
            <!--li><a href="charts.html"> <i class="fa fa-bar-chart"></i>asdf</a></li-->
            <!--li><a href="tables.html"> <i class="icon-grid"></i>Tables</a></li-->
            <li><a href="#settings" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Settings </a>
              <ul id="settings" class="collapse list-unstyled ">
                <li><a href="profile">Profile</a></li>
                <?php 
                  if($accountType == 1){
                    echo '<li><a href="createUser">Create user</a></li>';
                    echo '<li><a href="scanners">Scanners</a></li>';
                  } 
                ?>
                <li><a href="Admins/logout">Logout</a></li>
              </ul>
            </li>
            <!--li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo
                <div class="badge badge-warning">6 New</div></a></li-->
          </ul>
        </div>
        <!--div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div-->
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="allPackages" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">All Packages</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">               
                <li class="nav-item"><a href="Admins/logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <div class="col-lg-12">
              <div class="card">
              <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                <div class="card-header">
                  <h4>All packages sent by users</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table table id="example1" class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <!--th>Package Id</th-->
                          <th>Sender</th>
                          <th>From</th>
                          <th>Receiver</th>
                          <th>To</th>
                          <th>Phone</th>
                          <th># of Pkgs</th>
                          <th>Cost</th>
                          <th>Status</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                          if(count($allPackages)>0){

                            $packages = array_reverse($allPackages, true);

                            //echo '<pre>';
                            //print_r($packages);
                            //echo '</pre>';

                            //echo '<pre>';
                            //print_r($allPackages);
                            //echo '</pre>';                            

                            for ($i = count($packages) - 1;  $i >= 0; $i--) { 

                              $status = 'Pending';
                              $disabled = '';
                              $qrcode = '';
                              $price = '0';

                              //if($allPackages[$i][''])
                              if(isset($packages[$i]['price'])){
                                $price = $packages[$i]['price'];
                              }
                              else {
                                $price = '0';
                              }
                              
                              if(isset($packages[$i]['status'])){
                                if($packages[$i]['status'] == 1){
                                  $status = 'Paid';
                                  $disabled = 'disabled';
                                  //$dis = 'disabled';
                                }
                                else{
                                  $status = 'Pending';
                                }
                              }
                              else {
                                $status = 'Undefined';
                              }
                              
                              if(isset($packages[$i]['dataUrl'])){
                                $qrcode = $packages[$i]['dataUrl'];
                              }
                              else{
                                $qrcode = '';
                              }

                              echo '<tr id="'.$packages[$i]['_id'].'">'.
                                   '<th scope="row">'.($i+1).'</th>'.    
                                   //'<td>'.$allPackages[$i]['_id'].'</td>'.                                 
                                   '<td>'.$packages[$i]['creatorName'].'</td>'. 
                                   '<td>'.$packages[$i]['from'].'</td>'.
                                   '<td>'.$packages[$i]['receiver'].'</td>'.
                                   '<td>'.$packages[$i]['to'].'</td>'. 
                                   '<td>'.$packages[$i]['phone'].'</td>'. 
                                   '<td>'.$packages[$i]['noOfPackages'].'</td>'.
                                   '<td>'.$price.'</td>'.
                                   '<td>'.$status.'</td>'.
                                   '<td>'.
                                     '<button class="btn btn-success" data-fnx="print" data-qrcode="'.$qrcode.'" data-print_id="'.$packages[$i]['_id'].'"><i class="fa fa-print"></i></button>&nbsp;'.
                                     '<button ' .$disabled. ' class="btn btn-info" data-fnx="pay" data-qrcode="'.$qrcode.'" data-pay_id="'.$packages[$i]['_id'].'" data-toggle="modal" data-target="#package"><i class="fa fa-money"></i></button>&nbsp;'.
                                     '<button ' .$disabled. ' class="btn btn-warning" data-fnx="cost" data-cost_id="'.$packages[$i]['_id'].'" data-toggle="modal" data-target="#costModal"><i class="fa fa-pencil"></i></button>&nbsp;'.                                     
                                     '<button class="btn btn-danger" data-fnx="delete" data-rem_id="'.$packages[$i]['_id'].'"><i class="fa fa-times"></i></button></td>'.
                                   '</tr>';
                            }
                          }

                          ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>My Courier &copy; 2021</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>

      <!-- Modal -->
      <div class="modal fade" id="package" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #17a2b8; color:white;">
              <h5 class="modal-title" id="exampleModalCenterTitle">Package payment - <span id="username"></span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">              
              <form>
                <div class="form-group">
                  <input style="display:none;" name="email" type="input">
                  <label>Amount paid:</label>
                  <input id="amount_paid" name="amount_paid" type="input" placeholder="without ($) sign" class="form-control">
                </div>
                <input name="row_id" id="row_id" type="input" class="form-control" style="display:none;">
                <input name="sender" id="sender" type="input" class="form-control" style="display:none;">
                <input name="collector_id" id="collector_id" type="input" value="<?php echo $this->session->userdata('admin_id'); ?>" type="input" class="form-control" style="display:none;">
                <input name="fromAdd" id="fromAdd" type="input" class="form-control" style="display:none;">
                <input name="receiver" id="receiver" type="input" class="form-control" style="display:none;">
                <input name="toAdd" id="toAdd" type="input" class="form-control" style="display:none;"> 
                <input name="phone" id="phone" type="input" class="form-control" style="display:none;"> 
                <input name="noOfPacks" id="noOfPacks" type="input" class="form-control" style="display:none;"> 
                <input name="qrcode" id="qrcode" type="input" class="form-control" style="display:none;">   
                <!--img src="" id="qr"/-->            
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="payBtn" type="button" form="colFrom" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="costModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #ffd75f; color:white;">
              <h5 class="modal-title" id="exampleModalCenterTitle">Assign Cost</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">              
              <form>
                <div class="form-group">
                  <label>Cost:</label>
                  <input id="pCost" name="pCost" type="input" placeholder="without ($) sign" class="form-control">
                </div>
                <input name="pid" id="pid" type="input" class="form-control" style="display:none;"> 
                <!--img src="" id="qr"/-->            
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="costBtn" type="button" form="colFrom" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>      

      <div class="ticket" id="ticket" style="display:none;"></div>
      
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url(); ?>vendor/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url(); ?>vendor/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/js/charts-home.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>  
    <!-- toastr link js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>     
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>vendor/js/front.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/js/allPackages.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "aaSorting": []
        });
      });
  </script>    
  </body>
</html>