<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>KPK LISUMA</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/KPK.png');?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/fronted/style.css');?>">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

     

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                      

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="<?= base_url('Auth/registration'); ?>" class="btn">Register</a>
                                <a href="<?= base_url('Auth'); ?>" class="btn">Login</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?= base_url('assets/logokpk5.png');?>">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    
               
    <!-- ##### Upcoming Events End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">

                        <h3>Keilmuan Pengembangan Karir (KPK)</h3>
                        <h4>Lisuma Gunadarma</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms" style="text-align:center" >
                        <!-- Blog Content -->
                        <div class="blog-content" >
                            
                            <style type="text/css">
                                p {
                                    font-size: 14pt; 
                                }
                            </style>
                            <p>Bidang Keilmuan dan Pengembangan Karir ini berkonsentrasi kepada kualitas dan kredibilitas anggota dibidang akademik. Selain itu, bidang ini juga menyiapkan dan mengembangkan anggota supaya siap berkarir baik di kalangan profesional, politis, dan akademis.</p>
                           
                        </div>
                    </div>
                </div>

                
    </section>
    <!-- ##### Blog Area End ##### -->

     

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> KPK Lisuma Gunadarma | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Instagram:</span> @lisumagunadarma</a>
                <a href="#"><span>Email:</span> lisumaugkpk@gmail.com</a>
            </div>
           
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url('assets/fronted/js/jquery/jquery-2.2.4.min.js');?>"></script>
    <!-- Popper js -->
    <script src="<?= base_url('assets/fronted/js/bootstrap/popper.min.js');?>" ></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url('assets/fronted/js/bootstrap/bootstrap.min.js');?>" ></script>
    <!-- All Plugins js -->
    <script src="<?= base_url('assets/fronted/js/plugins/plugins.js');?>"></script>
    <!-- Active js -->
    <script src="<?= base_url('assets/fronted/js/active.js');?>"></script>
</body>

</html>