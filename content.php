<?php
// mencegah direct access file PHP agar file PHP tidak bisa diakses secara langsung dari browser dan hanya dapat dijalankan ketika di include oleh file lain
// jika file diakses secara langsung
if (basename($_SERVER['PHP_SELF']) === basename(__FILE__)) {
  // alihkan ke halaman error 404
  header('location: 404.html');
}
// jika file di include oleh file lain, tampilkan isi file
else {
  // panggil file "database.php" untuk koneksi ke database
  require_once "config/database.php";

  // pemanggilan file halaman konten sesuai "module" yang dipilih
  // jika module yang dipilih "dashboard"
  if ($_GET['module'] == 'dashboard') {
    // panggil file tampil data dashboard
    include "modules/dashboard/tampil_data.php";
  }
  // jika module yang dipilih "user" dan hak akses "Administrator"
  elseif ($_GET['module'] == 'user' && $_SESSION['hak_akses'] == 'Administrator') {
    // panggil file tampil data user
    include "modules/user/tampil_data.php";
  }
  // jika module yang dipilih "form_entri_user" dan hak akses "Administrator"
  elseif ($_GET['module'] == 'form_entri_user' && $_SESSION['hak_akses'] == 'Administrator') {
    // panggil file form entri user
    include "modules/user/form_entri.php";
  }
  // jika module yang dipilih "form_ubah_user" dan hak akses "Administrator"
  elseif ($_GET['module'] == 'form_ubah_user' && $_SESSION['hak_akses'] == 'Administrator') {
    // panggil file form ubah user
    include "modules/user/form_ubah.php";
  }
  // jika module yang dipilih "form_ubah_password"
  elseif ($_GET['module'] == 'form_ubah_password') {
    // panggil file form ubah password
    include "modules/password/form_ubah.php";
  }
  elseif ($_GET['module'] == 'pekerja' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file tampil data pekerja
    include "modules/pekerja/tampil_data.php";
  }
  // jika module yang dipilih "form_entri_pekerja" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'form_entri_pekerja' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file form entri pekerja
    include "modules/pekerja/form_entri.php";
  }
  // jika module yang dipilih "form_ubah_pekerja" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'form_ubah_pekerja' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file form ubah pekerja
    include "modules/pekerja/form_ubah.php";
  }
  // jika module yang dipilih "tampil_detail_pekerja" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'tampil_detail_pekerja' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file tampil detail pekerja
    include "modules/pekerja/tampil_detail.php";
  }
  elseif ($_GET['module'] == 'peralatan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file tampil data peralatan
    include "modules/peralatan/tampil_data.php";
  }
  // jika module yang dipilih "form_entri_peralatan" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'form_entri_peralatan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file form entri peralatan
    include "modules/peralatan/form_entri.php";
  }
  // jika module yang dipilih "form_ubah_peralatan" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'form_ubah_peralatan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file form ubah peralatan
    include "modules/peralatan/form_ubah.php";
  }
  // jika module yang dipilih "tampil_detail_peralatan" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'tampil_detail_peralatan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file tampil detail peralatan
    include "modules/peralatan/tampil_detail.php";
  }
  elseif ($_GET['module'] == 'penggunaan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file tampil data penggunaan
    include "modules/penggunaan/tampil_data.php";
  }
  // jika module yang dipilih "form_entri_penggunaan" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'form_entri_penggunaan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file form entri penggunaan
    include "modules/penggunaan/form_entri.php";
  }
  // jika module yang dipilih "form_ubah_penggunaan" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'form_ubah_penggunaan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file form ubah penggunaan
    include "modules/penggunaan/form_ubah.php";
  }
  // jika module yang dipilih "tampil_detail_penggunaan" dan hak akses bukan "Administrator"
  elseif ($_GET['module'] == 'tampil_detail_penggunaan' && $_SESSION['hak_akses'] = 'Administrator') {
    // panggil file tampil detail penggunaan
    include "modules/penggunaan/tampil_detail.php";
  }
}
