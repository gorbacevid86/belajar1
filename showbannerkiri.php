 <?php
include "koneksi.php";
			$sql=mysqli_query($koneksi,"select * from gambar1 where id=1");
$hasilnya=mysqli_fetch_array($sql);

			?>
<img src="banner/<?=$hasilnya[2];?>" width="<?=$hasilnya[4];?>" height="<?=$hasilnya[6];?>"  alt=""/>