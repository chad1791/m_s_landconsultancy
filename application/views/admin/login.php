<?php 

    if($this->session->userdata('admin_id')){
        //echo $this->session->userdata('admin_id');
        redirect('dashboard');
    }    
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
    <div class="page login-page">
      <div class="container">

            <?php if($this->session->flashdata('user_created')): ?>
            <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('user_created').'</p>' ?>
            <?php endif ;?>

            <?php if($this->session->flashdata('acc_inactive')): ?>
            <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('acc_inactive').'</p>' ?>
            <?php endif ;?>

            <?php if($this->session->flashdata('unk_account')): ?>
            <?php echo '<p class="alert alert-warning">'.$this->session->flashdata('unk_account').'</p>' ?>
            <?php endif ;?>

            <?php if($this->session->flashdata('admin_loggedout')): ?>
            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('admin_loggedout').'</p>' ?>
            <?php endif ;?>

        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>MY</span><strong class="text-primary">COURIER</strong> ADMIN LOGIN</div>
            <p>Fill in the form below to login</p>
            <!--form method="get" class="text-left form-validate"-->
            <?php echo form_open('Admins/login'); ?>
              <div class="form-group-material">
                <input id="email" type="email" name="email" required data-msg="Please enter your e-mail" class="input-material">
                <label for="email" class="label-material">Email</label>
              </div>
              <div class="form-group-material">
                <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                <label for="password" class="label-material">Password</label>
              </div>
              <!--div class="form-group text-center"><a id="login" href="index.html" class="btn btn-primary">Login</a></div-->
              <button type="submit" class="btn btn-primary">Sign In</button>
            </form><a href="#" class="forgot-pass">Forgot Password?</a><!--small>Do not have an account? </small><a href="register.html" class="signup">Signup</a-->
          </div>
          <div class="copyrights text-center">
            <!--p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p-->
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
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
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>vendor/js/front.js"></script>
  </body>
</html>