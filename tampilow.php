<meta http-equiv="refresh" content="3000">

<?php
include "koneksi.php";



//tampil lowongan scrolling
$low=mysqli_query($koneksi,"select * from lowongan order by id DESC");
$cari=mysqli_query($koneksi,"select * from informasi where id=3");
$isi=mysqli_fetch_array($cari);
?>
<style>
.jajal{font-size:<?=$isi[1];?>}
</style>

<marquee direction="left" scrolldelay="90">

  <?php while ($hasil=mysqli_fetch_array($low)){ ?>
   
	
	<?php 
	if(empty($hasil[3])){
	echo "&nbsp;&nbsp;&nbsp;<font class=jajal color=white>$hasil[2] |</font> &nbsp;&nbsp;&nbsp;";
	}
	else{
	echo "<font class=jajal color=white>$hasil[2] </font><font class=jajal color=yellow>[$hasil[3]]&nbsp;&nbsp;&nbsp;&nbsp;|</font>";
	}
	?>
    
    
   
    <?php } ?>
 
</marquee>
