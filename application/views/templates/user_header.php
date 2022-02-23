<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/KPK.png');?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('assets/fronted/style.css');?>">

    <link href="<?= base_url('assets/backend/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    

   
  <!-- Datatables-->
  <script type="text/javascript" src="<?= base_url('assets/backend/DataTables/js/jquery.js'); ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/backend/DataTables/'); ?>js/jquery.dataTables.js"></script>
  <link href="<?= base_url('assets/backend/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/backend/DataTables/') ;?>css/jquery.dataTables.css" rel="stylesheet" type="text/css">
  <link  href="<?= base_url('assets/backend/DataTables/');?> css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">


  



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
                          <div class="classynav">
                            <div class="register-login-area" >
                                  
                            <ul>
                                <li><a class="text-primary" href="<?= base_url('User/daftaranggota'); ?>" class="btn"><b>Daftar Anggota</b></a></li>
                                <li><a class="text-primary" href="<?= base_url('User/informasi'); ?>" class="btn"><b>Informasi</b></a></li>
                                <li><a class="text-primary" href="<?= base_url('User/jadwalpengajar'); ?>" class="btn"><b>Jadwal Pengajar</b></a></li>
                                <li><a class="text-primary" href="<?= base_url('User/modul'); ?>" class="btn"><b>Modul</b></a></li>
                                <li><a class="text-primary" href="<?= base_url('User/soal'); ?>" class="btn"><b>Soal</b></a></li>
                                <li><a class="text-primary" href="<?= base_url('Auth/logout/'); ?>" class="btn"><b>Logout</b></a></li>
                            </ul>  
                            
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
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?= base_url('assets/logokpk5.png');?>"  >
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
        
    <!-- ##### Upcoming Events End ##### -->
