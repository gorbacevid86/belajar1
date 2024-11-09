
<?php
$tv=array("tema1","tema2");


?>
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <!-- Optionally, you can add icons to the links -->
	<?php if (in_array("tema1", $tv)) {
	?>
		   <li <?php if($_GET['menu']=="pilihtemplate.php") echo "class=active";?> > <a href="index.php?menu=pilihtemplate.php" class="tabel"> <i class="fa fa-th-large"></i><span>Pilih Template</span></a></li> <?php } ?>
		  
		   <!-- Optionally, you can add icons to the links -->
		   <li <?php if($_GET['menu']=="ubahgbrbg.php") echo "class=active";?> > <a href="index.php?menu=ubahgbrbg.php" class="tabel"> <i class="fa fa-newspaper-o"></i><span>Ubah Background</span></a></li>
		  
		  <li <?php if($_GET['menu']=="ubahbg.php") echo "class=active";?> > <a href="index.php?menu=ubahbg.php" class="tabel"> <i class="fa fa-bars"></i><span>Ubah Warna Background</span></a></li>
		  
		
		   <li <?php if($_GET['menu']=="inputpeng.php") echo "class=active";?> > <a href="index.php?menu=inputpeng.php" class="tabel"> <i class="fa fa-quote-right"></i><span>Pengumuman</span></a></li>
	
		  
		   <li <?php if($_GET['menu']=="inputtwit.php") echo "class=active";?> > <a href="index.php?menu=inputtwit.php" class="tabel"> <i class="fa fa-facebook"></i><span>Twitter dan Facebook</span></a></li>
		  
		  <!--header -->
        <li class="treeview">
          <a href="#"><i class="fa fa-photo"></i> <span>Header</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($_GET['menu']=="ubahlogo.php") echo "class=active";?> > <a href="index.php?menu=ubahlogo.php" class="tabel"> <i class="fa fa-adjust"></i><span>Ubah Logo (Header)</span></a></li>
             <li <?php if($_GET['menu']=="editlebar.php") echo "class=active";?> > <a href="index.php?menu=editlebar.php" class="tabel"> <i class="fa fa-edit"></i><span>Ubah Lebar Logo (Header)</span></a></li>
          </ul>
        </li>
	
        <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Running Teks</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($_GET['menu']=="inputlow.php") echo "class=active";?> > <a href="index.php?menu=inputlow.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input</span></a></li>
             <li <?php if($_GET['menu']=="showlow.php") echo "class=active";?> > <a href="index.php?menu=showlow.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit</span></a></li>
			  <li <?php if($_GET['menu']=="ubahwteks.php") echo "class=active";?> > <a href="index.php?menu=ubahwteks.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Tampilan</span></a></li>
			   <li <?php if($_GET['menu']=="inputteks.php") echo "class=active";?> > <a href="index.php?menu=inputteks.php" class="tabel"> <i class="fa fa-text-height"></i><span>Edit Ukuran</span></a></li>
			 
          </ul>
        </li>
		  
		  <!-- running teks berita -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-file-text"></i> <span>Running Teks Berita</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputrss.php") echo "class=active";?> > <a href="index.php?menu=inputrss.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input Running Teks Berita</span></a></li>
			  <li <?php if($_GET['menu']=="showberita.php") echo "class=active";?> > <a href="index.php?menu=showberita.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Running Teks Berita</span></a></li>
			  
			   <li <?php if($_GET['menu']=="inputteksberita.php") echo "class=active";?> > <a href="index.php?menu=inputteksberita.php" class="tabel"> <i class="fa fa-text-height"></i><span>Edit Ukuran Running Text Berita</span></a></li>
          </ul>
        </li>
		  
		  
		    <!-- agebda -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-tasks"></i> <span>Agenda Kegiatan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputagenda.php") echo "class=active";?> > <a href="index.php?menu=inputagenda.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input Agenda</span></a></li>
			  <li <?php if($_GET['menu']=="showagenda.php") echo "class=active";?> > <a href="index.php?menu=showagenda.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Agenda</span></a></li>
			   
          </ul>
        </li>
		    <!-- sidang -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-tasks"></i> <span>Persidangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
				<ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputwaktu.php") echo "class=active";?> > <a href="index.php?menu=inputwaktu.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input Bulan dan Tahun</span></a></li>
					<li <?php if($_GET['menu']=="inputjadwalsidang.php") echo "class=active";?> > <a href="index.php?menu=inputjadwalsidang.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input Jadwal Persidangan</span></a></li>
			  <li <?php if($_GET['menu']=="inputselesai.php") echo "class=active";?> > <a href="index.php?menu=inputselesai.php" class="tabel"> <i class="fa fa-edit"></i><span>Input Penyelesaian</span></a></li>
			   
          </ul>
         
        </li>
		  <!-- anggaran -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Anggaran</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputanggaran.php") echo "class=active";?> > <a href="index.php?menu=inputanggaran.php" class="tabel"> <i class="fa fa-list-alt"></i><span>Input Anggaran</span></a></li>
			  <li <?php if($_GET['menu']=="showanggaran.php") echo "class=active";?> > <a href="index.php?menu=showanggaran.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Anggaran</span></a></li>
			   
          </ul>
        </li>
		   <!-- slider -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-file-picture-o"></i> <span>Slider</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputslider.php") echo "class=active";?> > <a href="index.php?menu=inputslider.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Input Slider</span></a></li>
			  
			  <li <?php if($_GET['menu']=="inputslider.php") echo "class=active";?> > <a href="index.php?menu=aturslider.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Atur Durasi Slider</span></a></li>
			  <li <?php if($_GET['menu']=="showslider.php") echo "class=active";?> > <a href="index.php?menu=showslider.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Slider</span></a></li>
			  
          </ul>
        </li>
	
		   <!-- slider -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-file-picture-o"></i> <span>Slider (Tema 16)</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputslideratas.php") echo "class=active";?> > <a href="index.php?menu=inputslideratas.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Input Slider Atas</span></a></li>
			  <li <?php if($_GET['menu']=="showslideratas.php") echo "class=active";?> > <a href="index.php?menu=showslideratas.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Slider Atas</span></a></li>
			    <li <?php if($_GET['menu']=="inputsliderbawah.php") echo "class=active";?> > <a href="index.php?menu=inputsliderbawah.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Input Slider Bawah</span></a></li>
			  <li <?php if($_GET['menu']=="showsliderbawah.php") echo "class=active";?> > <a href="index.php?menu=showsliderbawah.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Slider Bawah</span></a></li>
			  
          </ul>
        </li>
		   <li <?php if($_GET['menu']=="inputiframe.php") echo "class=active";?> > <a href="index.php?menu=inputiframe.php" class="tabel"> <i class="fa fa-quote-right"></i><span>Input Iframe URL (Tema 16, 17)</span></a></li>
		  <li <?php if($_GET['menu']=="inputurl.php") echo "class=active";?> > <a href="index.php?menu=inputurl.php" class="tabel"> <i class="fa fa-quote-right"></i><span>Input Slide URL (Tema 20)</span></a></li>
		   <!-- Banner -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-file-picture-o"></i> <span>Banner</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputbanner.php") echo "class=active";?> > <a href="index.php?menu=inputbanner.php" class="tabel"> <i class="fa fa-picture-o"></i><span>Input Banner Kanan</span></a></li>
			  <li <?php if($_GET['menu']=="showbanner.php") echo "class=active";?> > <a href="index.php?menu=showbanner.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Banner Kanan</span></a></li>
			   <li <?php if($_GET['menu']=="inputbanner1.php") echo "class=active";?> > <a href="index.php?menu=inputbanner1.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Banner Bawah (tema 1, 9) </span></a></li>
          </ul>
        </li>
		  
		  <!-- video -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-video-camera"></i> <span>Video</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputvideo.php") echo "class=active";?> > <a href="index.php?menu=inputvideo.php" class="tabel"> <i class="fa fa-video-camera"></i><span>Input Video</span></a></li>
			  <li <?php if($_GET['menu']=="showvideo.php") echo "class=active";?> > <a href="index.php?menu=showvideo.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Video</span></a></li>
			   <li <?php if($_GET['menu']=="inputlebar.php") echo "class=active";?> > <a href="index.php?menu=inputlebar.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Lebar Video</span></a></li>
          </ul>
        </li>
		  <!-- excel -->
		    <li class="treeview">
          <a href="#"><i class="fa fa-file"></i> <span>Input File</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputexcel.php") echo "class=active";?> > <a href="index.php?menu=inputexcel.php" class="tabel"> <i class="fa fa-etsy"></i><span>Input File Excel (Tema 18)</span></a></li>
			 
          </ul>
        </li>
		   <!-- video -->
		  
		    <!-- video ytb-->
		    <li class="treeview">
          <a href="#"><i class="fa fa-youtube"></i> <span>Youtube</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputvideoy.php") echo "class=active";?> > <a href="index.php?menu=inputvideoy.php" class="tabel"> <i class="fa fa-video-camera"></i><span>Input Video</span></a></li>
			  <li <?php if($_GET['menu']=="showvideoy.php") echo "class=active";?> > <a href="index.php?menu=showvideoy.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Video</span></a></li>
			   <li <?php if($_GET['menu']=="inputlebary.php") echo "class=active";?> > <a href="index.php?menu=inputlebary.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit Lebar Video</span></a></li>
          </ul>
        </li>
		   <!-- video -->
		  
		  
		    <li class="treeview">
          <a href="#"><i class="fa fa-laptop"></i> <span>TV</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputv.php") echo "class=active";?> > <a href="index.php?menu=inputv.php" class="tabel"> <i class="fa fa-video-camera"></i><span>Input Stasiun TV</span></a></li>
			  <li <?php if($_GET['menu']=="showtv.php") echo "class=active";?> > <a href="index.php?menu=showtv.php" class="tabel"> <i class="fa fa-edit"></i><span>Edit TV</span></a></li>
			 
          </ul>
        </li>
		  
          <!-- jadwal kerja -->
		  
		  
		    <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>Jadwal Kerja</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          
			  <li <?php if($_GET['menu']=="inputjadwal.php") echo "class=active";?> > <a href="index.php?menu=inputjadwal.php" class="tabel"> <i class="fa fa-database"></i><span>Input Jadwal Kerja</span></a></li>
			  <li <?php if($_GET['menu']=="relasi.php") echo "class=active";?> > <a href="index.php?menu=relasi.php" class="tabel"> <i class="fa fa-edit"></i><span>Atur Jadwal</span></a></li>
			 
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-briefcase"></i> <span>Jadwal Ronda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <li <?php if($_GET['menu']=="inputjudulronda.php") echo "class=active";?> > <a href="index.php?menu=inputjudulronda.php" class="tabel"> <i class="fa fa-info-circle"></i><span>Kop Jadwal Ronda</span></a></li>
			  <li <?php if($_GET['menu']=="inputketronda.php") echo "class=active";?> > <a href="index.php?menu=inputketronda.php" class="tabel"> <i class="fa fa-houzz"></i><span>Keterangan Jadwal Ronda</span></a></li>
			  
			  <li <?php if($_GET['menu']=="inputjadwalronda.php") echo "class=active";?> > <a href="index.php?menu=inputjadwalronda.php" class="tabel"> <i class="fa fa-database"></i><span>Input Jadwal Ronda</span></a></li>
			  <li <?php if($_GET['menu']=="relasironda.php") echo "class=active";?> > <a href="index.php?menu=relasironda.php" class="tabel"> <i class="fa fa-edit"></i><span>Atur Jadwal</span></a></li>
			 
          </ul>
        </li>
		  
		   <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>Jadwal Rapat</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <li <?php if($_GET['menu']=="inputjadwal.php") echo "class=active";?> > <a href="index.php?menu=inputminggu.php" class="tabel"> <i class="fa fa-database"></i><span>Input Minggu</span></a></li>
			  <li <?php if($_GET['menu']=="inputjadwal.php") echo "class=active";?> > <a href="index.php?menu=inputrapat.php" class="tabel"> <i class="fa fa-database"></i><span>Input Jadwal Rapat</span></a></li>
			  <li <?php if($_GET['menu']=="relasi.php") echo "class=active";?> > <a href="index.php?menu=aturjadwal.php" class="tabel"> <i class="fa fa-edit"></i><span>Atur Jadwal</span></a></li>
			 
          </ul>
        </li>
		  
		  
		   <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>Rapat Keluar &amp; Undangan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <li <?php if($_GET['menu']=="inputrapatkeluar.php") echo "class=active";?> > <a href="index.php?menu=inputrapatkeluar.php" class="tabel"> <i class="fa fa-database"></i><span>Input Undangan Rapat Keluar</span></a></li>
			  <li <?php if($_GET['menu']=="inputrapatinternal.php") echo "class=active";?> > <a href="index.php?menu=inputrapatinternal.php" class="tabel"> <i class="fa fa-database"></i><span>Input Rapat Internal</span></a></li>
			  
			 
          </ul>
        </li>
		  
		   <li class="treeview">
          <a href="#"><i class="fa fa-calendar"></i> <span>Tombol</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <li <?php if($_GET['menu']=="inputtombol.php") echo "class=active";?> > <a href="index.php?menu=inputtombol.php" class="tabel"> <i class="fa fa-database"></i><span>Input Button</span></a></li>
			  <li <?php if($_GET['menu']=="inputrapatinternal.php") echo "class=active";?> > <a href="index.php?menu=inputrapatinternal.php" class="tabel"> <i class="fa fa-database"></i><span>Input Rapat Internal</span></a></li>
			  
			 
          </ul>
        </li>
		  
		  <li <?php if($_GET['menu']=="ubahpass.php") echo "class=active";?> > <a href="index.php?menu=ubahpass.php" class="tabel"> <i class="fa fa-user"></i><span>Ubah Password Admin</span></a></li> 
		   <li <?php if($_GET['menu']=="manual.php") echo "class=active";?> > <a href="index.php?menu=manual.php" class="tabel"> <i class="fa fa-info-circle"></i><span>Petunjuk Penggunaan</span></a></li> 
		  
		   <li <?php if($_GET['menu']=="inputiframe.php") echo "class=active";?> > <a href="index.php?menu=about.php" class="tabel"> <i class="fa fa-copyright"></i><span>About</span></a></li>
		  
      <li <?php if($_GET['menu']=="logout.php") echo "class=active";?> > <a href="index.php?menu=logout.php" class="tabel"> <i class="fa fa-sign-out"></i><span>Logout</span></a></li>
      </ul>