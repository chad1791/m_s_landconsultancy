<?php 

    $popularListings = array();

    if($this->session->userdata('popularListings')){    
        $popularListings = $this->session->userdata('popularListings');        
    } 

    //echo '<pre>';
    //print_r($popularListings);
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
    <title>M & S Land Consultancy | Home</title>

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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo base_url(); ?>vendor/img/m&s/car1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo base_url(); ?>vendor/img/m&s/car4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo base_url(); ?>vendor/img/m&s/car3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

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

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Popular Listings</h2>
                        <p>Properties you may like</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <input type="text" id="base" style="display:none" value="<?php echo base_url(); ?>"/>
                <?php                 
                    if(isset($popularListings)){ 
                        if(count($popularListings) > 0){
                            for($i = 0; $i < count($popularListings); $i++){
                                $desc = substr($popularListings[$i]['des'],0,75).'...';
                                echo  '<div class="col-12 col-md-6 col-xl-4">'.
                                        '<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">'.
                                            '<div class="property-thumb">'.
                                                '<img height="280" width="350" style="display:block; max-width:350px; max-height:240px; width: 100%; height: auto;" src="'.base_url().'vendor/img/bg-img/'.$popularListings[$i]['cover'].'" alt="">'.
                                                '<div class="tag">'.
                                                    '<span>For '.$popularListings[$i]['action'].'</span>'.
                                                '</div>'.
                                            '</div>'.
                                            '<div class="property-content">'.
                                                '<a href="property/'.$popularListings[$i]['id'].'"<h5 style="font-size:18px; color:black;">'.$popularListings[$i]['name'].'</h5></a>'.
                                                '<p class="location"><img src="'.base_url().'vendor/img/icons/location.png" alt="">'.$popularListings[$i]['address'].'</p>'.
                                                '<p>'.$desc.'</p>'.
                                                '<div class="property-meta-data d-flex align-items-end justify-content-between">'.
                                                    '<div class="bathroom">'.
                                                        '<img src="'.base_url().'vendor/img/icons/bathtub.png" alt="">'.
                                                        '<span>'.$popularListings[$i]['bathroom'].'</span>'.
                                                    '</div>'.
                                                    '<div class="garage">'.
                                                        '<img src="'.base_url().'vendor/img/icons/garage.png" alt="">'.
                                                        '<span>'.$popularListings[$i]['garage'].'</span>'.
                                                    '</div>'.
                                                    '<div class="space">'.
                                                        '<img src="'.base_url().'vendor/img/icons/space.png" alt="">'.
                                                        '<span>'.$popularListings[$i]['size'].'</span>'.
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
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(<?php echo base_url(); ?>vendor/img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">We are here to serve you</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Years of experience at your disposal</h6>
                        <!--a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <!--section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms"-->

                        <!-- Single Testimonial Slide -->
                        <!--div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div-->

                        <!-- Single Testimonial Slide -->
                        <!--div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div-->

                        <!-- Single Testimonial Slide -->
                        <!--div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    <section class="col-lg-12 south-editor-area d-flex align-items-center">
        <!-- Editor Content -->
        <div class="col-lg-8 editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <!--img src="img/icons/prize.png" alt=""-->
                <h2>Marina Gongora</h2>
                <p>Land Consultant</p>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="<?php echo base_url(); ?>vendor/img/icons/phone-call.png" alt=""> +501 605-0039</h6>
                <h6><img src="<?php echo base_url(); ?>vendor/img/icons/envelope.png" alt=""> mrngongora@yahoo.com</h6>
            </div>
            <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
                <img src="img/core-img/signature.png" alt="">
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="col-lg-4 editor-thumbnail">
            <img src="<?php echo base_url(); ?>vendor/img/bg-img/realtor2.jpeg" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

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