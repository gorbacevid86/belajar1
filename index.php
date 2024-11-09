

<?php 
include "koneksi.php";
$pilih=mysqli_query($koneksi,"select tema from tema where id=1");
$tema=mysqli_fetch_row($pilih);
ob_start();  

	
	include $tema[0].".php";

 ?>