<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template-semi-dark/index.html">
          <div class="brand-logo"></div>
          <h2 class="brand-text mb-0">Pasien</h2>
        </a></li>
      <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="<?php echo is_active('profil'); ?> nav-item">
        <a href="?page=profil"><i class="feather icon-user"></i><span class="menu-title">Profil</span></a>
      </li>

      <li class="<?php echo is_active('jadwal_praktik'); ?> nav-item">
        <a href="?page=jadwal">
          <i class="feather icon-calendar"></i><span class="menu-title" >Jadwal Praktik</span>
        </a>
      </li>

      <li class="<?php echo is_active('riwayat_berobat'); ?> nav-item"><a href="?page=riwayat">
        <i class="feather icon-rotate-ccw"></i><span class="menu-title">Riwayat Berobat</span></a>
      </li>

      <li class="<?php echo is_active('kartu_berobat'); ?> nav-item"><a href="?page=kartu">
        <i class="feather icon-credit-card"></i><span class="menu-title" >Kartu Berobat</span></a>
      </li>

      <li class="<?php echo is_active('buku'); ?> nav-item"><a href="app/buku/BukuManual_Pasien.pdf" target="_blank">
        <i class="feather icon-book"></i><span class="menu-title" >Buku Panduan</span></a>
      </li>

    </ul>
  </div>
</div>
<!-- END: Main Menu-->