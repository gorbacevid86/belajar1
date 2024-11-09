 <?php
include "koneksi.php";
			$sql=mysqli_query($koneksi,"select * from gambar1 where id=1");
$hasilnya=mysqli_fetch_array($sql);
//default w=650 t=200
			?>
<img src="banner/<?=$hasilnya[3];?>" width="<?=$hasilnya[5];?>" height="<?=$hasilnya[7];?>"  alt=""/>