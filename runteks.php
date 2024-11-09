<?php
include "koneksi.php";
$take=mysqli_query($koneksi,"select * from rteks where id=1");
$prop=mysqli_fetch_array($take);



//tampil lowongan scrolling
$low=mysqli_query($koneksi,"select * from lowongan order by id DESC");
$cari=mysqli_query($koneksi,"select * from informasi where id=3");
$isi=mysqli_fetch_array($cari);
?>
 <?php while ($hasil=mysqli_fetch_array($low)){ ?>
   
	
	<?php 
	if(empty($hasil[3])){
	echo "&nbsp;&nbsp;&nbsp;<font color=$prop[4] class=jajal>$hasil[2] |</font> &nbsp;&nbsp;&nbsp;";
	}
	else{
	echo "<font class=jajal color=$prop[4]>$hasil[2] </font><font color=$prop[4] class=jajal>[$hasil[3]]&nbsp;&nbsp;&nbsp;&nbsp;|</font>";
	}
	?>
    
    
   
    <?php } ?>