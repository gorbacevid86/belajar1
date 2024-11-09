<?php
include "../koneksi.php";
$cari=mysqli_query($koneksi,"select * from informasi where id=7");
$isi=mysqli_fetch_array($cari);
//include "koneksi.php";

?>

<form action="index.php?menu=aturslider.php&aksi=kirim" method="post" enctype="multipart/form-data" name="frm1">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="79%">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">Masukkan durasi misal 3500 untuk 3,5 detik</td>
    <td valign="top">:</td>
    <td><input name="isi" value="<?=$isi[1];?>" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Update" name="kirim" class="btn btn-primary">
    <input type="reset" value="Reset" name="reset" class="btn btn-warning"></td>
  </tr>
</table></form>
<?php
if($_GET["aksi"]=="kirim"){
	$input=mysqli_query($koneksi,"update informasi set info='$_POST[isi]' where id=7");
	if($input)  echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=aturslider.php\">");
	else echo "gagal";
}


?>

