<?php
// mencegah direct access file PHP agar file PHP tidak bisa diakses secara langsung dari browser dan hanya dapat dijalankan ketika di include oleh file lain
// jika file diakses secara langsung
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
  // alihkan ke halaman error 404
  header('location: 404.html');
}
// jika file di include oleh file lain, tampilkan isi file
else {
  // pengecekan hak akses untuk menampilkan menu sesuai dengan hak akses
  // jika hak akses = Administrator, tampilkan menu
  if ($_SESSION['hak_akses'] == 'Administrator') {
    // pengecekan menu aktif
    // jika menu dashboard dipilih, menu dashboard aktif
    if ($_GET['module'] == 'dashboard') { ?>
      <li class="nav-item active">
        <a href="?module=dashboard">
          <i class="fas fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>
    <?php
    }
    // jika tidak dipilih, menu dashboard tidak aktif
    else { ?>
      <li class="nav-item">
        <a href="?module=dashboard">
          <i class="fas fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>
    <?php
    }

    // jika menu data pekerja (tampil data / tampil detail / form entri / form ubah) dipilih, menu data pekerja aktif
    if ($_GET['module'] == 'pekerja' || $_GET['module'] == 'tampil_detail_pekerja' || $_GET['module'] == 'form_entri_pekerja' || $_GET['module'] == 'form_ubah_pekerja') { ?>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">DATA MASTER</h4>
      </li>
      <li class="nav-item active">
        <a href="?module=pekerja">
          <i class="fas fa-users"></i>
          <p>Data Pekerja</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?module=peralatan">
          <i class="fas fa-tools"></i>
          <p>Data Peralatan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?module=penggunaan">
          <i class="fas fa-tasks"></i>
          <p>Data Penggunaan</p>
        </a>
      </li>
    <?php
    }
    elseif ($_GET['module'] == 'peralatan' || $_GET['module'] == 'tampil_detail_peralatan' || $_GET['module'] == 'form_entri_peralatan' || $_GET['module'] == 'form_ubah_peralatan') { ?>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">DATA MASTER</h4>
      </li>
      <li class="nav-item">
        <a href="?module=pekerja">
          <i class="fas fa-users"></i>
          <p>Data Pekerja</p>
        </a>
      </li>
      <li class="nav-item active">
        <a href="?module=peralatan">
          <i class="fas fa-tools"></i>
          <p>Data Peralatan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?module=penggunaan">
          <i class="fas fa-tasks"></i>
          <p>Data Penggunaan</p>
        </a>
      </li>
    <?php
    }

    elseif ($_GET['module'] == 'penggunaan' || $_GET['module'] == 'tampil_detail_penggunaan' || $_GET['module'] == 'form_entri_penggunaan' || $_GET['module'] == 'form_ubah_penggunaan') { ?>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">DATA MASTER</h4>
      </li>
      <li class="nav-item">
        <a href="?module=pekerja">
          <i class="fas fa-users"></i>
          <p>Data Pekerja</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?module=peralatan">
          <i class="fas fa-tools"></i>
          <p>Data Peralatan</p>
        </a>
      </li>
      <li class="nav-item active">
        <a href="?module=penggunaan">
          <i class="fas fa-tasks"></i>
          <p>Data Penggunaan</p>
        </a>
      </li>
    <?php
    }
    // jika tidak dipilih, menu pekerja tidak aktif
    else { ?>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">DATA MASTER</h4>
      </li>
      <li class="nav-item">
        <a href="?module=pekerja">
          <i class="fas fa-users"></i>
          <p>Data Pekerja</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?module=peralatan">
          <i class="fas fa-tools"></i>
          <p>Data Peralatan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="?module=penggunaan">
          <i class="fas fa-tasks"></i>
          <p>Data Penggunaan</p>
        </a>
      </li>
    <?php
    }
    if ($_GET['module'] == 'user' || $_GET['module'] == 'form_entri_user' || $_GET['module'] == 'form_ubah_user') { ?>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Pengaturan</h4>
      </li>

      <li class="nav-item active">
        <a href="?module=user">
          <i class="fas fa-user"></i>
          <p>Manajemen User</p>
        </a>
      </li>
    <?php
    }
    // jika tidak dipilih, menu manajemen user tidak aktif
    else { ?>
      <li class="nav-section">
        <span class="sidebar-mini-icon">
          <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">Pengaturan</h4>
      </li>

      <li class="nav-item">
        <a href="?module=user">
          <i class="fas fa-user"></i>
          <p>Manajemen User</p>
        </a>
      </li>
    <?php
    }
  }
}
?>