<ul class="sidebar-menu" data-widget="tree">
    <!-- Optionally, you can add icons to the links -->
<?php
$menu="";?>
    <li <?php if ($_GET['menu'] == "pilihtemplate.php") echo "class=active"; ?>> <a href="index.php?menu=pilihtemplate.php" class="tabel"> <i class="fa fa-th-large"></i><span>Pilih Template</span></a></li>

    <!-- Optionally, you can add icons to the links -->
    <li <?php if ($_GET['menu'] == "ubahgbrbg.php") echo "class=active"; ?>> <a href="index.php?menu=ubahgbrbg.php" class="tabel"> <i class="fa fa-newspaper-o"></i><span>Ubah Background</span></a></li>

    <li <?php if ($_GET['menu'] == "ubahbg.php") echo "class=active"; ?>> <a href="index.php?menu=ubahbg.php" class="tabel"> <i class="fa fa-bars"></i><span>Ubah Warna Background</span></a></li>

    <!--header -->
    <li class="treeview">
        <a href="#"><i class="fa fa-photo"></i> <span>Header</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li <?php if ($_GET['menu'] == "ubahlogo.php") echo "class=active"; ?>> <a href="index.php?menu=ubahlogo.php" class="tabel"> <i class="fa fa-adjust"></i><span>Ubah Logo (Header)</span></a></li>
            <li <?php if ($_GET['menu'] == "editlebar.php") echo "class=active"; ?>> <a href="index.php?menu=editlebar.php" class="tabel"> <i class="fa fa-edit"></i><span>Ubah Lebar Logo (Header)</span></a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-building-o"></i> <span>Tema 3 (Setting)</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li <?php if ($_GET['menu'] == "ubahlogokiri.php") echo "class=active"; ?>> <a href="index.php?menu=ubahlogokiri.php" class="tabel"> <i class="fa fa-adjust"></i><span>Ubah Logo
                        Kiri</span></a></li>
            <li <?php if ($_GET['menu'] == "ubahlogo.php") echo "class=active"; ?>> <a href="index.php?menu=ubahlogo.php" class="tabel"> <i class="fa fa-adjust"></i><span>Ubah Logo Tengah</span></a></li>
            <li <?php if ($_GET['menu'] == "ubahlogokanan.php") echo "class=active"; ?>> <a href="index.php?menu=ubahlogokanan.php" class="tabel"> <i class="fa fa-adjust"></i><span>Ubah Logo
                        Kanan</span></a></li>

            <li>
                <hr>
            </li>

            <li <?php if ($_GET['menu'] == "inputkas.php") echo "class=active"; ?>> <a href="index.php?menu=inputkas.php" class="tabel"> <i class="fa fa-adjust"></i><span>Laporan Kas</span></a></li>
            <li <?php if ($_GET['menu'] == "inputkhatib.php") echo "class=active"; ?>> <a href="index.php?menu=inputkhatib.php" class="tabel"> <i class="fa fa-adjust"></i><span>Jadwal
                        Khatib</span></a></li>
            <li <?php if ($_GET['menu'] == "inputkajian.php") echo "class=active"; ?>> <a href="index.php?menu=inputkajian.php" class="tabel"> <i class="fa fa-adjust"></i><span>Jadwal
                        Kajian</span></a></li>

        </ul>
    </li>

    <li class="treeview">
        <a href="#"><i class="fa fa-file-text"></i> <span>Running Teks</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li <?php if ($_GET['menu'] == "inputlow.php") echo "class=active"; ?>> <a href="index.php?menu=inputlow.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input</span></a></li>
            <li <?php if ($_GET['menu'] == "showlow.php") echo "class=active"; ?>> <a href="index.php?menu=showlow.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit</span></a></li>
            <li <?php if ($_GET['menu'] == "ubahwteks.php") echo "class=active"; ?>> <a href="index.php?menu=ubahwteks.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Tampilan</span></a></li>
            <li <?php if ($_GET['menu'] == "inputteks.php") echo "class=active"; ?>> <a href="index.php?menu=inputteks.php" class="tabel"> <i class="fa fa-text-height"></i><span>Edit Ukuran</span></a></li>

        </ul>
    </li>

    <!-- running teks berita -->

    <!-- agebda -->    <!-- slider -->
    <li class="treeview">
      <a href="#"><i class="fa fa-file-picture-o"></i> <span>Slider</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        
        <li <?php if ($_GET['menu'] == "inputslider.php") echo "class=active"; ?>> <a href="index.php?menu=inputslider.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Input
          Slider</span></a></li>
        
        <li <?php if ($_GET['menu'] == "inputslider.php") echo "class=active"; ?>> <a href="index.php?menu=aturslider.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Atur Durasi
          Slider</span></a></li>
        <li <?php if ($_GET['menu'] == "showslider.php") echo "class=active"; ?>> <a href="index.php?menu=showslider.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit
          Slider</span></a></li>
        
      </ul>
    </li>

    <!-- slider -->    <!-- Banner -->
    <!-- video -->
    <li class="treeview">
      <a href="#"><i class="fa fa-video-camera"></i> <span>Video</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        
        <li <?php if ($_GET['menu'] == "inputvideo.php") echo "class=active"; ?>> <a href="index.php?menu=inputvideo.php" class="tabel"> <i class="fa fa-video-camera"></i><span>Input
          Video</span></a></li>
        <li <?php if ($_GET['menu'] == "showvideo.php") echo "class=active"; ?>> <a href="index.php?menu=showvideo.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Video</span></a></li>
        <li <?php if ($_GET['menu'] == "inputlebar.php") echo "class=active"; ?>> <a href="index.php?menu=inputlebar.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Lebar
          Video</span></a></li>
      </ul>
    </li>
    <!-- videoprokes -->
    <!-- excel -->    <!-- video -->

    <!-- video ytb-->
    <li class="treeview">
      <a href="#"><i class="fa fa-laptop"></i> <span>Lokasi (Jadwal Shalat)</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        
        <li <?php if ($_GET['menu'] == "carilokasi.php") echo "class=active"; ?>> <a href="index.php?menu=carilokasi.php" class="tabel"> <i class="fa fa-video-camera"></i><span>Cari
          Lokasi</span></a></li>
        
      </ul>
    </li>

    <!-- jadwal kerja -->

    <li <?php if ($_GET['menu'] == "ubahpass.php") echo "class=active"; ?>> <a href="index.php?menu=ubahpass.php" class="tabel"> <i class="fa fa-user"></i><span>Ubah Password Admin</span></a></li>
    <li <?php if ($_GET['menu'] == "manual.php") echo "class=active"; ?>> <a href="index.php?menu=manual.php" class="tabel"> <i class="fa fa-info-circle"></i><span>Petunjuk Penggunaan</span></a></li>

    <li <?php if ($_GET['menu'] == "inputiframe.php") echo "class=active"; ?>> <a href="index.php?menu=about.php" class="tabel"> <i class="fa fa-copyright"></i><span>About</span></a></li>

    <li <?php if ($_GET['menu'] == "logout.php") echo "class=active"; ?>> <a href="index.php?menu=logout.php" class="tabel"> <i class="fa fa-sign-out"></i><span>Logout</span></a></li>
</ul>
