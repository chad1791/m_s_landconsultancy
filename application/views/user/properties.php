<?php 

    $allListings = array();

    if($this->session->userdata('allListings')){    
        $allListings = $this->session->userdata('allListings');        
    } 

    //echo '<pre>';
    //print_r($allListings);
    //echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>M & S Land Consultancy | Listings</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area >
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:contact@southtemplate.com">contact@southtemplate.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                    </div>
                </div>
            </div>
        </div-->

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img width="120" height="80" src="<?php echo base_url(); ?>vendor/img/bg-img/m&s transparent.fw.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="home">Home</a></li>
                                <li><a href="properties">Properties</a></li>
                                <li><a href="services">Services</a></li>
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="contact">Contact Us</a></li>
                                <li><a href="faq">Faq</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(<?php echo base_url(); ?>vendor/img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Listings</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="input" placeholder="Keyword">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="locations">
                                            <option>All Locations</option>
                                            <option>Corozal</option>
                                            <option>Orange Walk</option>
                                            <option>Belize</option>
                                            <option>Cayo</option>
                                            <option>Belmopan</option>
                                            <option>San Ignacio</option>
                                            <option>Stann Creek</option>
                                            <option>Toledo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="types">
                                            <option>All Types</option>
                                            <option>Apartment <span>(30)</span></option>
                                            <option>Land <span>(69)</span></option>
                                            <option>Villas <span>(103)</span></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="Actions">
                                            <option>All Actions</option>
                                            <option>Sale</option>
                                            <option>Rent</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-0" style="position:relative; height: 60px;">
                                        <button type="submit" class="btn south-btn" style="position: absolute; right: 0;">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center"> 
                            <span></span>
                            <!--div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div-->
                        </div>
                        <div class="order-by-area d-flex align-items-center" style="float: right;">
                            <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Rent</option>
                              <option value="3">Popularity</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row"> 
                <input type="text" id="base" style="display:none" value="<?php echo base_url(); ?>"/>              
                <?php                 
                    if(isset($allListings)){
                        if(count($allListings) > 0){
                            for($i = 0; $i < count($allListings); $i++){
                                $desc = substr($allListings[$i]['des'],0,75).'...';
                                echo  '<div class="col-12 col-md-6 col-xl-4">'.
                                        '<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">'.
                                            '<div class="property-thumb">'.
                                            '<img height="280" width="350" style="display:block; max-width:350px; max-height:240px; width: 100%; height: auto;" src="'.base_url().'vendor/img/bg-img/'.$allListings[$i]['cover'].'" alt="">'.
                                                '<div class="tag">'.
                                                    '<span>For '.$allListings[$i]['action'].'</span>'.
                                                '</div>'.
                                            '</div>'.
                                            '<div class="property-content">'.
                                                '<a href="property/'.$allListings[$i]['id'].'"<h5 style="font-size:18px; color:black;">'.$allListings[$i]['name'].'</h5></a>'.
                                                '<p class="location"><img src="'.base_url().'vendor/img/icons/location.png" alt="">'.$allListings[$i]['address'].'</p>'.
                                                '<p>'.$desc.'</p>'.
                                                '<div class="property-meta-data d-flex align-items-end justify-content-between">'.
                                                    '<div class="bathroom">'.
                                                        '<img src="'.base_url().'vendor/img/icons/bathtub.png" alt="">'.
                                                        '<span>'.$allListings[$i]['bathroom'].'</span>'.
                                                    '</div>'.
                                                    '<div class="garage">'.
                                                        '<img src="'.base_url().'vendor/img/icons/garage.png" alt="">'.
                                                        '<span>'.$allListings[$i]['garage'].'</span>'.
                                                    '</div>'.
                                                    '<div class="space">'.
                                                        '<img src="'.base_url().'vendor/img/icons/space.png" alt="">'.
                                                        '<span>'.$allListings[$i]['size'].'</span>'.
                                                    '</div>'.
                                                '</div>'.
                                            '</div>'.
                                        '</div>'.
                                      '</div>';
                            }
                        }
                    }
                ?> 
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="south-pagination d-flex justify-content-end">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link active" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(<?php echo base_url(); ?>vendor/img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>
                            <p>For all your land transaction needs, call us or visit us. We will be more than glad to assist you. Years of experience at your service. We are here to Serve you!</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <!--li class="d-flex align-items-center justify-content-between"><span>Opening Hours</span></li-->
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Sunday</span> <span>09 AM - 5 PM</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="<?php echo base_url(); ?>vendor/img/icons/phone-call.png" alt=""> +501 605-0039 / 615-0085</h6>
                                <h6><img src="<?php echo base_url(); ?>vendor/img/icons/envelope.png" alt=""> mrngongora@yahoo.com</h6>
                                <h6><img src="<?php echo base_url(); ?>vendor/img/icons/location.png" alt=""> Smithsonian Street, Orange Walk Town, Belize C.A</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6> 
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Home</a></li> 
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Properties</a></li>                                                              
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Services</a></li>  
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Contact Us</h6>
                            </div>
                            <!-- Contact form here... -->
                            <div class="contact-form">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="number" id="number" placeholder="Your Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Your Message"></textarea>
                                    </div>
                                    <button id="sndMsg" type="submit" class="btn south-btn">Send Message</button>
                                </form>
                            </div>                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <!--a href="https://colorlib.com" target="_blank"-->M & S Land Consultancy<!--/a-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?php echo base_url(); ?>vendor/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>vendor/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>vendor/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url(); ?>vendor/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>vendor/js/classy-nav.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url(); ?>vendor/js/active.js"></script>
    <!-- Custom js -->
    <script src="<?php echo base_url(); ?>vendor/js/form.js"></script>        

</body>

</html>