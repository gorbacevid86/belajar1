<?php
session_start();
error_reporting(0);
//include "parser-php-version.php";
$uid = isset($_POST['username']) ? $_POST['username'] : $_SESSION['username']; 
$password = isset($_POST['password']) ? $_POST['password'] : $_SESSION['password'];
if(isset($uid)){
	
?>
<?php
	include "../koneksi.php";
	$sql=mysqli_query($koneksi,"select tema from tema where id=1");
$temaku=mysqli_fetch_array($sql);

$menu = !empty($_GET['menu']) ? $_GET['menu'] : '';
	$tema=$temaku[0];
			if($_GET['menu']=="inputkiri.php") {$anu="Ubah Menu Kiri"; $ket="Tema 21";}
      if($_GET['menu']=="ubahlogokiri.php") {$anu="Ubah Logo Kiri"; $ket="Tema 21";}

      if($_GET['menu']=="inputtabelatas.php") {$anu="Ubah konten tabel atas"; $ket="Tema 35";}
      if($_GET['menu']=="inputtabeltengah.php") {$anu="Ubah konten tabel tengah"; $ket="Tema 35";}
      if($_GET['menu']=="inputtabelbawah.php") {$anu="Ubah konten tabel bawah"; $ket="Tema 35";}
			if($_GET['menu']=="inputdokter.php") {$anu="Input Jadwal Dokter"; $ket="Tema 30";}

      if($_GET['menu']=="inputtemakiri.php") {$anu="Ubah konten kiri"; $ket="Tema 35";}

		if($_GET['menu']=="inputspm.php") {$anu="Input SPM"; $ket="Tema 26";}
	if($_GET['menu']=="inputruang.php") {$anu="Input Ruangan"; $ket="Tema 29";}

		if($_GET['menu']=="random.php") {$anu="Random Template"; $ket="Random";}

	if($_GET['menu']=="inputwaktu.php") {$anu="Input Bulan dan Tahun"; $ket="Tema 19";}
  if($_GET['menu']=="inputtombol.php") {$anu="Input Tombol"; $ket="Tema 25";}
  if($_GET['menu']=="lihattombol.php") {$anu="Edit Tombol"; $ket="Tema 25";}
		if($_GET['menu']=="manual.php") {$anu="Petunjuk Penggunaan"; $ket="Informasi dan Panduan";}

	if($_GET['menu']=="inputurl.php") {$anu="Input Slide URL"; $ket="Tema 20 - Tidak semua website support Iframe URL";}
	if($_GET['menu']=="inputjadwalsidang.php") {$anu="Input Jadwal Sidang"; $ket="Tema 19";}
	if($_GET['menu']=="inputexcel.php") {$anu="Input File Excel"; $ket="Tema 18";}
	if($_GET['menu']=="inputselesai.php") {$anu="Input Penyelesaian Perkara"; $ket="Tema 19";}

if($_GET['menu']=="inputjadwalronda.php") {$anu="Input Nama Warga"; $ket="Data nama ronda";}
	if($_GET['menu']=="ubahwteks.php") {$anu="Atur Tampilan"; $ket="Atur tampilan running teks";}

	if($_GET['menu']=="inputslideratas.php") {$anu="Input Slider Atas"; $ket="Tema 16";}
if($_GET['menu']=="showslideratas.php") {$anu="Edit Slider Atas"; $ket="Tema 16";}
	if($_GET['menu']=="inputsliderbawah.php") {$anu="Input Slider Bawah"; $ket="Tema 16";}
if($_GET['menu']=="showsliderbawah.php") {$anu="Edit Slider Bawah"; $ket="Tema 16";}
	if($_GET['menu']=="inputiframe.php") {$anu="Input alamat URL untuk Iframe"; $ket="Tema 16";}
	if($_GET['menu']=="inputjudulronda.php") {$anu="Input Kop Judul Ronda"; $ket="Tema 15";}
	if($_GET['menu']=="inputketronda.php") {$anu="Input Keterangan Ronda"; $ket="Tema 15";}
	if($_GET['menu']=="about.php") {$anu="Tentang Sistem"; $ket="Made with love";}


if($_GET['menu']=="relasironda.php") {$anu="Atur jadwal ronda"; $ket="Pilih hari dan nama";}
	if($_GET['menu']=="ubahpass.php") {$anu="Ubah Password"; $ket="Input user dan password admin";}

if($_GET['menu']=="inputlow.php") {$anu="Input Running Text"; $ket="keterangannya";}

	if($_GET['menu']=="inputminggu.php") {$anu="Input Minggu"; $ket="Input tanggal setiap hari";}
if($_GET['menu']=="inputrapat.php") {$anu="Input Rapat"; $ket="Masukkan data rapat";}
	if($_GET['menu']=="aturjadwal.php") {$anu="Atur jadwal yang akan ditampilkan"; $ket="Tema 14";}


	if($_GET['menu']=="inputagenda.php") {$anu="Input Agenda"; $ket="Berlaku untuk Tema 3 dan 4";}
	if($_GET['menu']=="showagenda.php") {$anu="Edit Agenda"; $ket="Berlaku untuk Tema 3 dan 4";}
	if($_GET['menu']=="editagenda.php") {$anu="Edit Agenda"; $ket="Berlaku untuk Tema 3 dan 4";}
	
		if($_GET['menu']=="ubahbg.php") {$anu="Ubah Warna Background"; $ket="Berlaku untuk Tema 3 dan 4";}

	
	if($_GET['menu']=="inputanggaran.php") {$anu="Input anggaran"; $ket="Berlaku untuk Tema 4";}
	if($_GET['menu']=="showanggaran.php") {$anu="Edit anggaran"; $ket="Berlaku untuk Tema 4";}
	if($_GET['menu']=="editanggaran.php") {$anu="Edit anggaran"; $ket="Berlaku untuk Tema 4";}
	
	if($_GET['menu']=="inputrss.php") {$anu="Input Running Text Berita"; $ket="Input teks";}
	if($_GET['menu']=="pilihtemplate.php") {$anu="Pilih Template"; $ket="Pilih template sebagai tampilan utama";}
	if($_GET['menu']=="ubahgbrbg.php") {$anu="Ubah Gambar Background"; $ket="Pilih gambar latar belakang anda";}
if($_GET['menu']=="showlow.php") {$anu="Edit Running Text";$ket="Ubah running teks";}
if($_GET['menu']=="inputpeng.php") {$anu="Input Pengumuman";$ket="Berlaku untuk tema 3";}
if($_GET['menu']=="editlow.php") {$anu="Edit Runnning Text";$ket="keterangannya";}
	if($_GET['menu']=="showberita.php") {$anu="Edit Runnning Text Berita";$ket="Pilih teks yang akan diedit";}

if($_GET['menu']=="inputbanner.php") {$anu="Input Banner Informasi";$ket="keterangannya";}
	
	if($_GET['menu']=="inputslider.php") {$anu="Input Slider Informasi";$ket="Berlaku untuk Tema 5 dan 6";}

	
	if($_GET['menu']=="inputbanner1.php") {$anu="Input Banner Informasi (Bawah)";$ket="Input gambar sebagai banner kanan & kiri";}

if($_GET['menu']=="inputvideo.php") {$anu="Input video";$ket="keterangannya";}
if($_GET['menu']=="inputvideoprokes.php") {$anu="Input video prokes";$ket="Video Protokol Kesehatan";}
if($_GET['menu']=="showvideoprokes.php") {$anu="Video prokes";$ket="Video Protokol Kesehatan";}
	if($_GET['menu']=="inputvideoy.php") {$anu="Input video Youtube";$ket="keterangannya";}
	if($_GET['menu']=="inputv.php") {$anu="Input Stasiun Televisi";$ket="Inputkan URL Iframe";}
	if($_GET['menu']=="showtv.php") {$anu="Edit Stasiun Televisi";$ket="Ubah alamat URL";}
	if($_GET['menu']=="carilokasi.php") {$anu="Tentukan Lokasi Anda";$ket="Latitude dan Longitude (untuk tema 22)";}


if($_GET['menu']=="showvideo.php") {$anu="Edit video";$ket="keterangannya";}
	if($_GET['menu']=="showvideoy.php") {$anu="Edit video Youtube";$ket="Hapus video";}

if($_GET['menu']=="inputtwit.php") {$anu="Edit Alamat Twitter";$ket="Berlaku untuk Tema 2";}
if($_GET['menu']=="inputlebar.php") {$anu="Edit Lebar Player Video";$ket="keterangannya";}
	if($_GET['menu']=="inputteks.php") {$anu="Edit Ukuran Running Teks";$ket="Masukkan dalam piksel";}
		if($_GET['menu']=="inputteksberita.php") {$anu="Edit Ukuran Running Teks Berita";$ket="Masukkan dalam piksel";}

if($_GET['menu']=="ubahlogo.php") {$anu="Ubah Logo Display Informasi";$ket="Pilih gambar logo anda";}
	if($_GET['menu']=="editlebar.php") {$anu="Ubah Ukuran Lebar Logo";$ket="Masukkan dalam jumlah piksel";}
	if($_GET['menu']=="inputjadwal.php") {$anu="Input Driver";$ket="Masukkan data driver disini";}
if($_GET['menu']=="relasi.php") {$anu="Atur Driver";$ket="Sesuaikan jadwal driver";}
	if($_GET['menu']=="inputrapatkeluar.php") {$anu="Rapat Keluar";$ket="Data undangan rapat keluar Tema 21";}
	if($_GET['menu']=="inputrapatinternal.php") {$anu="Rapat Internal";$ket="Data undangan rapat internal Tema 21";}
  
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator Page - Display Informasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">DISP</span>
      <!-- logo for regular state and mobile devices -->
		<span class="logo-lg">Display Informasi</span>
		
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?=$_SESSION["username"];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?=$_SESSION["username"];?>
                  <small>Full Access</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Active <b><?=$tema;?></b></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION["username"];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <?php include "menux.php"; ?>
		
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$anu;?>
        <small><?=$ket;?></small>
      </h1>
		
	
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
	<?php 
	
	if(!empty($_GET['menu']))
	include $_GET['menu'];
	else { echo "<h2>Selamat datang admin, gunakan menu di sebelah kiri untuk administrasi</h2>";
		 
		 ?>
		
		<iframe width="800" height="400" src="https://www.youtube.com/embed/ecDAj6zNpeI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<?php
		 
		 }
	?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Versi 1.0 | Support 081212418055
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023&nbsp; <a href="https://www.raseco.web.id/">Raseco.web.id</a></strong>
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
<?php }

else{
	
	header("location:login.php");
	echo " <div style='border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px' align='center' > ";
	echo "<h2>Anda tidak diperkenankan melihat halaman ini, silahkan login terlebih dahulu!</h2><br><a href=login.php>Klik disini untuk LOGIN</a></div><br>";
	
}
 ?>