<?php session_start();
ob_start();
include "../koneksi.php";
$cari=mysqli_query($koneksi,"select * from informasi where id=2");
$isi=mysqli_fetch_array($cari);


?>
<form action="index.php?menu=inputlebar.php&aksi=kirim" method="post" enctype="multipart/form-data" name="frm1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="79%">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">Lebar Video</td>
    <td valign="top">:</td>
    <td><textarea name="isi" cols="70" rows="5" style="border-color:#9C0; background-color: #FBB144; font-size:14px;"><?=$isi[1];?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Update" name="kirim">
    <input type="reset" value="Reset" name="reset"></td>
  </tr>
</table></form>
<?php
if($_GET["aksi"]=="kirim"){
	$input=mysqli_query($koneksi,"update informasi set info='$_POST[isi]' where id=2");
	if($input) echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=inputlebar.php\">");
	else echo "gagal";
}


?>

