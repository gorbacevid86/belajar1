

<?php
include "koneksi.php";
$cari=mysqli_query($koneksi,"select * from pengumuman where id=9");
$isi=mysqli_fetch_array($cari);


?>

<?php if(!empty($isi[1])){ ?>


	<?=$isi[1];?>
<?php } ?>

