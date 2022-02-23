    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">KPK LISUMA GUNADARMA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/index'); ?>">
          <i class="fas fa-fw fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Profile anggota -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/daftaranggota'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Daftar Anggota</span></a>
      </li>


       <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/kurikulum'); ?>">
          <i class="fas fa-fw fa-book-reader"></i>
          <span>Kurikulum</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/informasi'); ?>">
          <i class="fas fa-fw fa-info"></i>
          <span>Informasi</span></a>
      </li>

       <!-- Divider -->
<!--    <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Dashboard -->
<!--      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/jadwalpengajar'); ?>">
          <i class="far fa-fw fa-calendar-alt"></i>
          <span>Jadwal Pengajar</span></a>
      </li> -->

      <!-- Divider -->
<!--      <hr class="sidebar-divider my-0"> -->

      <!-- Nav Item - Pages Modul -->
<!--      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/modul'); ?>">
          <i class="fas fa-fw fa-book-open"></i>
          <span>Modul</span></a>
      </li> -->
      

      <!-- Divider -->
<!--      <hr class="sidebar-divider my-0">  -->

      <!-- Nav Item - Utilities Collapse Menu -->
<!--      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/soal'); ?>">
          <i class="fas fa-fw fa-bookmark"></i>
          <span>Soal</span></a>
      </li>  -->

      <!-- Divider -->
      <hr class="sidebar-divider my-0">  

      <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/pengguna'); ?>">
          <i class="fas fa-fw fa-user-alt"></i>
          <span>Pengguna dan Hak Akses</span></a>
      </li>  

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->