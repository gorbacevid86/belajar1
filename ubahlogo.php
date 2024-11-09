<?php 
include "koneksi.php";
$ambilwlogo=mysqli_query($koneksi,"select warna from warnabg where id=3");
$logoku=mysqli_fetch_array($ambilwlogo);
$ambilw=mysqli_query($koneksi,"select warna from warnabg where id=1");
$warna=mysqli_fetch_array($ambilw);
$ambilwbg=mysqli_query($koneksi,"select warna from warnabg where id=2");
$bg=mysqli_fetch_array($ambilwbg);
$cari=mysqli_query($koneksi,"select * from informasi where id=4");
$isi=mysqli_fetch_array($cari);
$cari1=mysqli_query($koneksi,"select * from informasi where id=5");
$isi1=mysqli_fetch_array($cari1);

?>
<img src="bg/<?=$logoku[0];?>" width="<?=$isi1[1];?>" />
	


