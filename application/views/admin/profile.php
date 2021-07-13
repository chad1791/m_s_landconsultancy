<?php
    if($this->session->userdata('admin_id')){

      $admin_email = $this->session->userdata('email');
      $accountType = $this->session->userdata('accountType');

        //getting default events for user...

        $profile = array();

        if($this->session->userdata('profile')){    
            $profile = $this->session->userdata('profile');        
        }  
        
        //echo '<pre>';
        //print_r($profile);
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
    <title>My Courier | Profile</title>
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
            <li><a href="allPackages"> <i class="icon-form"></i>All Packages</a></li>
            <li><a href="collections"> <i class="fa fa-bar-chart"></i>Collections</a></li>
            <!--li><a href="charts.html"> <i class="fa fa-bar-chart"></i>asdf</a></li-->
            <!--li><a href="tables.html"> <i class="icon-grid"></i>Tables</a></li-->
            <li class="active"><a href="#settings" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Settings </a>
              <ul id="settings" class="collapse list-unstyled ">
                <li class="active"><a href="profile">Profile</a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="profile" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">My Profile</strong></div></a></div>
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
            <div class="col-lg-8">
                <div class="card">
                  <div class="card-header d-flex align-items-center">
                    <h4>Edit the fields below to update your profile</h4>
                  </div>
                  <div class="card-body">
                      <?php 
                        //$attributes = array('class' => 'form-horizontal', 'id'=>'updateAdminForm');
                        echo form_open('Admins/updateProfile'); 
                      ?>
                      <div class="form-group">
                        <input style="display:none;" name="auth_id" type="input" value="<?php if(count($profile)>0){echo $profile[0]['id'];}?>">
                        <input style="display:none;" name="email" type="input" value="<?php if(count($profile)>0){echo $profile[0]['email'];}?>">
                        <label>First Name</label>
                        <input name="first" type="input" placeholder="First Name" class="form-control" value="<?php if(count($profile)>0){echo $profile[0]['first'];}?>">
                      </div>
                      <div class="form-group">       
                        <label>Last Name</label>
                        <input name="last" type="input" placeholder="Last Name" class="form-control" value="<?php if(count($profile)>0){echo $profile[0]['last'];}?>">
                      </div>
                      <div class="form-group">       
                        <label>DOB</label>
                        <input name="dob" type="input" placeholder="DOB" class="form-control" value="<?php if(count($profile)>0){echo $profile[0]['dob'];}?>">
                      </div>
                      <div class="form-group">       
                        <label>Phone</label>
                        <input name="phone" type="input" placeholder="Phone" class="form-control" value="<?php if(count($profile)>0){echo $profile[0]['phone'];}?>">
                      </div>  
                      <div class="form-group">       
                        <label>Account Type</label>
                        <input readonly="readonly" type="input" placeholder="Account Type" class="form-control" value="<?php if(count($profile)>0){echo $profile[0]['accountType'] == '0' ? 'Employee' : 'Admin';}?>">
                      </div>                                                                
                      <div class="form-group">       
                        <input type="submit" value="Update" class="btn btn-primary">
                      </div>
                    </form>
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
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>vendor/js/front.js"></script>
  </body>
</html>