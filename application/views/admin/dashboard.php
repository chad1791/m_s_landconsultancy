<?php
    if($this->session->userdata('admin_id')){

      $admin_email = $this->session->userdata('email');
      $accountType = $this->session->userdata('accountType');
      //$admin_id = $this->session->userdata('admin_id');

      $scannerType = array();

      if($this->session->userdata('scannerType')){    
        $scannerType = $this->session->userdata('scannerType');        
      } 
        
      //echo '<pre>';
      //print_r($scannerType);
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
    <title>My Courier | Dashboard</title>
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
    <!-- toastr messages link css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>     
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">

    <style>
      #preview{
        width:400px;
        height:280px;
        border: 1px dotted black;
      }
    </style>

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
            <li class="active"><a href="dashboard"> <i class="icon-home"></i>Dashboard</a></li>
            <li><a href="allPackages"> <i class="icon-form"></i>All Packages</a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="dashboard" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">               
                <li class="nav-item"><a href="Admins/logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <input type="hidden" id="base" value="<?php echo base_url(); ?>">
          <div class="row d-flex align-items-md-stretch">
            <div class="row col-lg-12">
              <div class="col-lg-3"></div>
              <!--div class="col-lg-6" style="width: 650px" id="reader"></div-->
              <div class="row col-lg-12" <?php if(count($scannerType)>0){if($scannerType[0]['id']=='1'){echo 'style="display:none;"';}} ?>>
                  <br/>
                  <div class="col-lg-3"></div>
                  <label class="sr-only" for="qrcodeText">Package Id</label>
                  <div class="input-group mb-1 mt-2 col-lg-6">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-codepen"></i></div>
                    </div>
                    <input autofocus type="text" class="form-control" id="qrcodeText" placeholder="Package Id">
                  </div>
                
              </div>
              <div <?php if(count($scannerType)>0){if($scannerType[0]['id']=='2'){echo 'style="display:none;"';}} ?>><video id="preview"></video></div>
            </div> 
            <div class="row col-lg-12">
              <div class="col-lg-5"></div>
              <center <?php if(count($scannerType)>0){if($scannerType[0]['id']=='2'){echo 'style="display:none;"';}} ?>>
                <button onclick="startScan()" class="btn btn-primary">Scan</button>
                <button onclick="stopScan()" class="btn btn-danger">Stop</button>
              </center>
            </div>           
            <br/>
            <br/>
            <div class="col-lg-12">
              <!--input type="input" id="qrText"-->
              <div class="card" style="margin-top: 50px;">
                <div class="card-header">
                  <h4>Details of last scanned qr-code will show below</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Sender</th>
                          <th>From</th>
                          <th>Receiver</th>
                          <th>To</th>
                          <th>Phone</th>
                          <th># of Pkgs</th>
                          <th>Status</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody id="scannedQr">
                        <!--tr>
                          <th scope="row">1</th>
                          <td>545sdfsfse8454e</td>
                          <td>chad1791</td>
                          <td>Orange Walk</td>
                          <td>test01</td>
                          <td>6245878</td>
                          <td>Toledo</td>
                          <td>6</td>
                          <td>Pay View Delete</td>
                        </tr-->
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

      <div class="ticket" id="ticket" style="display:none;"></div>

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
    <!-- toastr link js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>     
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>vendor/js/front.js"></script>
    <script src="<?php echo base_url(); ?>vendor/js/instascan.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/js/allPackages.js"></script> 

    <script>

        var timer = null;
        var qrCodeText = $('#qrcodeText');

        var opts = {
          continuous: true,
          video: document.getElementById('preview'),
          mirror: true,
          captureImage: false,
        };

        var scanner = new Instascan.Scanner({...opts});

        qrCodeText
          .on('input', function(){
            clearTimeout(timer); 
            timer = setTimeout(doStuff, 300);
        });

        qrCodeText
          .on('click', function(){
            $(this).focus().select();
        });

        function doStuff(){          
          let id = $('#qrcodeText').val();
          let trimmedCode = id.replace(/"/g, '');
          callNodeApi(trimmedCode);
          console.log(trimmedCode);

          $('#qrcodeText').focus().select();
        }

        scanner.addListener('scan', function(content) {
            let qrcode = content.replace(/"/g, '');
            stopScan();
            console.log(qrcode);
            callNodeApi(qrcode);
        });

        function startScan(){

          $('#scannedQr').empty();

          Instascan.Camera.getCameras().then(cameras => 
          {
              if(cameras.length > 1){
                  scanner.start(cameras[1]);
              } 
              if(cameras.length == 1){
                scanner.start(cameras[0])
              } else {
                  console.error("Please enable Camera!");
              }
          });

        }

        function stopScan(){
          scanner.stop().then(function(){
            console.log('Camera has stopped!');
          });
        }

      function callNodeApi(packageId){

        let table =  $('#scannedQr');
        table.empty();

        var scanned = 0;

        var data = {};
        data._id = packageId;

        $.ajax({
          type: 'POST',
          data: JSON.stringify(data),
          contentType:'application/json',
          url: 'https://deliveries-app.herokuapp.com/getPackageByID',						
          success: function(data) {

            if (!$.trim(data)){  

              table
                .append(
                    '<tr>' +
                      '<th scope="row"></th>' +
                      '<td></td>' +
                      '<td></td>' +
                      '<td></td>' +
                      '<td></td>' +
                      '<td></td>' +
                      '<td></td>' +
                      '<td></td>' +
                      '<td></td>' +
                    '</tr>'
                );  

              alert('No package found related to that qr-code!');
            }
            else{  
              
              let disabled = data.status == '1' ? 'disabled' : '';
              let status = data.status == '1' ? 'paid' : 'pending';

              table
                .append(
                  '<tr id="'+data._id+'">' +
                    '<th scope="row">1</th>' +
                    '<td>' + data.creatorName + '</td>' +
                    '<td>' + data.from + '</td>' +
                    '<td>' + data.receiver + '</td>' +
                    '<td>' + data.to + '</td>' +
                    '<td>' + data.phone + '</td>' +
                    '<td>' + data.noOfPackages + '</td>' +
                    '<td>' + status + '</td>' +
                    '<td>'+
                      '<button class="btn btn-success" data-fnx="print" data-qrcode="'+data.dataUrl+'"  data-print_id="'+data._id+'"><i class="fa fa-print"></i></button>&nbsp;'+
                      '<button ' + disabled + ' class="btn btn-info" data-fnx="pay" data-qrcode="'+data.dataUrl+'" data-pay_id="'+data._id+'" data-toggle="modal" data-target="#package"><i class="fa fa-money"></i></button>&nbsp;'+
                    '</td>' +
                  '</tr>'
              );
            }
          }
        });

      }

    </script>
  </body>
</html>