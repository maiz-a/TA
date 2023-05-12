<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template-semi-dark/index.html">
          <div class="brand-logo"></div>
          <h2 class="brand-text mb-0">Klinik</h2>
        </a></li>
      <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="<?php echo is_active('dashboard'); ?> nav-item">
        <a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>

      <li class="<?php echo is_active('profil'); ?> nav-item">
        <a href="index.php"><i class="feather icon-home"></i><span class="menu-title">Profil</span></a>
      </li>

      <li class="<?php echo is_active('jadwal'); ?> nav-item"><a href="?page=jadwal"><i class="feather icon-calendar"></i><span class="menu-title" >Jadwal Praktik</span></a>
      </li>

      <li class="nav-item"><a href="javascript:;"><i class="feather icon-archive"></i><span class="menu-title">Manajemen Data</span></a>
        <ul class="menu-content">
          <li class="<?php echo is_active('pasien'); ?>"><a href="?page=pasien"><i class="feather icon-circle"></i><span class="menu-item">Pasien</span></a>
          </li>
        </ul>

        <ul class="menu-content">
          <li class="<?php echo is_active('ruang'); ?>"><a href="?page=ruang"><i class="feather icon-circle"></i><span class="menu-item">Apoteker</span></a>
          </li>
        </ul>

        <ul class="menu-content">
          <li class="<?php echo is_active('dokter'); ?>"><a href="?page=dokter"><i class="feather icon-circle"></i><span class="menu-item">Tenaga Kesehatan</span></a>
          </li>
        </ul>

        <ul class="menu-content">
          <li class="<?php echo is_active('obat'); ?>"><a href="?page=obat"><i class="feather icon-circle"></i><span class="menu-item">Diagnosa</span></a>
          </li>
        </ul>

        <ul class="menu-content">
          <li class="<?php echo is_active('rekam-medis'); ?>"><a href="?page=rekam-medis"><i class="feather icon-circle"></i><span class="menu-item">Rekam Medis</span></a>
          </li>
        </ul>

        <li class="<?php echo is_active('rekap'); ?> nav-item">
        <a href="?page=rekap">
          <i class="feather icon-bar-chart"></i><span class="menu-title">Rekap Rekam Medis</span>
        </a>
      </li>

      <li class="<?php echo is_active('buku'); ?> nav-item">
        <a href="app/buku_panduan/Buku Manual_Admin.pdf" target="_blank">
          <i class="feather icon-book"></i><span class="menu-title">Buku Panduan</span>
        </a>
      </li>

      </li>

    </ul>
  </div>
</div>
<!-- END: Main Menu-->