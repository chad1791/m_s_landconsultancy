<?php 

    $propertyData = array();

    if($this->session->userdata('propertyData')){    
        $propertyData = $this->session->userdata('propertyData');        
    } 

    $otherPics = array();

    if($this->session->userdata('otherPics')){    
        $otherPics = $this->session->userdata('otherPics');        
    } 

    //echo '<pre>';
    //print_r($otherPics);
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
    <title>M & S Land Consultancy | Property Details</title>

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
                                <li><a href="../home">Home</a></li>
                                <li><a href="../properties">Properties</a></li>
                                <li><a href="../services">Services</a></li>
                                <li><a href="../about-us">About Us</a></li>
                                <li><a href="../contact">Contact Us</a></li>
                                <li><a href="../faq">Faq</a></li>
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
                        <h3 class="breadcumb-title">Property</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-50">
        <div class="container">

            <div class="row">
                <div class="col-12" id="">     
                    <?php
                        echo '<div class="single-listings-sliders owl-carousel" style="margin:auto;">';
                        for($p=0; $p<count($otherPics); $p++){
                            echo '<img style="width: auto; height: 550px; max-height: 550px; object-fit: contain; margin: auto;" src="'.base_url().'vendor/img/bg-img/'.$otherPics[$p]['name'].'" alt="">';
                        }
                        echo '</div>';
                    ?>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <input type="text" id="base" style="display:none" value="<?php echo base_url(); ?>"/>
                    <input type="text" id="prop_id" style="display:none" value="<?php echo $propertyData[0]['id']; ?>"/>
                    <input type="text" id="cover" style="display:none" value="<?php echo base_url().'vendor/img/bg-img/'.$propertyData[0]['cover']?>"/>
                    <?php 
                    
                        if(isset($propertyData)){
                            if(count($propertyData)>0){
                                echo '<div class="listings-content">'.
                                        '<h5>'.$propertyData[0]['name'].'</h5>'.
                                        '<p class="location"><img src="'.base_url().'vendor/img/icons/location.png" alt="">'.$propertyData[0]['address'].'</p>'.
                                        '<p>'.$propertyData[0]['des'].'</p>'.
                                        '<div class="property-meta-data d-flex align-items-end">'.
                                            '<div class="bathroom">'.
                                                '<img src="'.base_url().'vendor/img/icons/bathtub.png" alt="">'.
                                                '<span>'.$propertyData[0]['bathroom'].'</span>'.
                                            '</div>'.
                                            '<div class="garage">'.
                                                '<img src="'.base_url().'vendor/img/icons/garage.png" alt="">'.
                                                '<span>'.$propertyData[0]['garage'].'</span>'.
                                            '</div>'.
                                            '<div class="space">'.
                                                '<img src="'.base_url().'vendor/img/icons/space.png" alt="">'.
                                                '<span>'.$propertyData[0]['size'].'</span>'.
                                            '</div>'.                                            
                                        '</div>'.
                                        '<ul class="listings-core-features d-flex align-items-center">'.
                                            '<li><i class="fa fa-check" aria-hidden="true"></i> Gated community</li>'.
                                            '<li><i class="fa fa-check" aria-hidden="true"></i> Community friendly</li>'.
                                            '<li><i class="fa fa-check" aria-hidden="true"></i> Near the highway</li>'.
                                            '<li><i class="fa fa-check" aria-hidden="true"></i> Gated community</li>'.
                                            '<li><i class="fa fa-check" aria-hidden="true"></i> Community friendly</li>'.
                                            '<li><i class="fa fa-check" aria-hidden="true"></i> Near the highway</li>'.                                            
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Automatic Sprinklers</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Fireplace</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Ocean Views</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Private Patio</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Fireplace</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Beach Access</li>'.
                                            //'<li><i class="fa fa-check" aria-hidden="true"></i> Rooftop Terrace</li>'.
                                        '</ul>'.
                                     '</div>';
                            }
                        }

                    ?>                   
                </div>
            </div>
            <!-- Listing Maps -->
            <div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-20">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->

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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="<?php echo base_url(); ?>vendor/js/map-active.js"></script>
    <!-- Custom js -->
    <script src="<?php echo base_url(); ?>vendor/js/form.js"></script> 
    <!--script src="<?php echo base_url(); ?>vendor/js/prop_car.js"></script-->        

</body>

</html>