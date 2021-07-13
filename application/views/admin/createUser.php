<?php
    if($this->session->userdata('admin_id')){

      $admin_email = $this->session->userdata('email');
      $accountType = $this->session->userdata('accountType');

      if($accountType == 0){
        redirect('dashboard');
      }
      else{

        
        //getting default events for user...

        $allUsers = array();

        if($this->session->userdata('allUsers')){    
            $allUsers = $this->session->userdata('allUsers');        
        }

      }  

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
    <title>My Courier | Create User</title>
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>vendor/img/favicon.ico">
    <!-- toastr messages link css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>      
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
                <li><a href="profile">Profile</a></li>
                <?php 
                  if($accountType == 1){
                    echo '<li class="active"><a href="createUser">Create user</a></li>';
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="createUser" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Create User</strong></div></a></div>
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
              <!-- form to create user -->
              <input type="hidden" id="base" value="<?php echo base_url(); ?>">

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center">
                    <h4>Fill in the below form to create a new user</h4>
                  </div>
                  <div class="card-body">
                    <!--form class="form-inline"-->
                      <?php 
                        $attributes = array('class' => 'form-inline');
                        echo form_open('Admins/addUser', $attributes); 
                      ?>
                      <div class="form-group">
                        <label for="inlineFormInput" class="sr-only">email</label>
                        <input name="email" id="inlineFormInput" type="email" placeholder="johndoe@gmail.com" class="mr-3 form-control">
                      </div>
                      <div class="form-group">
                        <label for="password" class="sr-only">password</label>
                        <input name="password" id="password" type="password" placeholder="password" class="mr-3 form-control form-control">
                      </div>
                      <div class="form-group">
                        <label for="inlineFormInputGroup" class="sr-only">Type</label>
                        <!--input id="inlineFormInputGroup" type="password" placeholder="*********" class="mr-3 form-control form-control"-->
                        <select name="type" id="inlineFormInputGroup" class="mr-3 form-control form-control">
                          <option value="0">employee</option>
                          <option value="1">admin</option>
                        </select>
                      </div>                      
                      <div class="form-group">
                        <input type="submit" value="Submit" class="mr-3 btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All website accounts</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="example1" class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>email</th>
                            <th>type</th>
                            <th>Status</th>
                            <th>Options</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--tr>
                            <th scope="row">1</th>
                            <td>test@gmail.com</td>
                            <td>Employee</td>
                            <td>Active</td>
                            <td>Pay View Delete</td>
                          </tr-->

                          <?php
                            if(count($allUsers)>0){

                              for ($i=0; $i < count($allUsers) ; $i++) { 

                                $status = 'Inactive';
                                $type = 'Employee';

                                if($allUsers[$i]['status'] == 0){
                                  $status = 'Inactive';
                                }
                                else{
                                  $status = 'Active';
                                }

                                if($allUsers[$i]['accountType'] == 0){
                                  $type = 'Employee';
                                }
                                else{
                                  $type = 'Admin';
                                }                  

                                echo '<tr id="'.$allUsers[$i]['id'].'">'.
                                    '<th scope="row">'.($i+1).'</th>'.                                   
                                    '<td>'.$allUsers[$i]['email'].'</td>'. 
                                    '<td>'.$type.'</td>'.
                                    '<td>'.$status.'</td>'.
                                    '<td>'.
                                      '<button class="btn btn-info" data-fnx="edit" data-edit_id="'.$allUsers[$i]['id'].'" data-toggle="modal" data-target="#package"><i class="fa fa-pencil"></i></button>&nbsp;'.
                                      '<button class="btn btn-danger" data-fnx="delete" data-rem_id="'.$allUsers[$i]['id'].'"><i class="fa fa-times"></i></button></td>'.
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
              <h5 class="modal-title" id="exampleModalCenterTitle">Update User Account<span id="username"></span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeBtn2">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">              
              <?php
                $attributes = array('id' => 'colForm'); 
                echo form_open('Admins/updateUser'); 
              ?>
                <div class="form-group">
                  <input name="row_id" id="row_id" type="input" class="form-control" style="display;">
                  <label>Email:</label>
                  <input id="upEmail" name="upEmail" type="input" placeholder="Email" class="form-control" readonly="readonly">
                </div>              
                <div class="form-group">
                  <label>Type:</label>
                  <select id="type" name="type" class="form-control">
                      <option value="0">Employee</option>
                      <option value="1">Admin</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Status:</label>
                  <select id="status" name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                  </select>                  
                </div>                           
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="closeBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button id="updateBtn" type="button" form="colFrom" class="btn btn-primary">Save changes</button>
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
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>  
    <!-- toastr link js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>        
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>vendor/js/front.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>vendor/js/createUser.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "aaSorting": []
        });
      });
  </script>     
  </body>
</html>