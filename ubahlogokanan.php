<?php 
include "koneksi.php";
$ambilwlogo=mysqli_query($koneksi,"select warna from warnabg where id=5");
$logoku=mysqli_fetch_array($ambilwlogo);


?>
<img src="bg/<?=$logoku[0];?>" height="100" />
	


