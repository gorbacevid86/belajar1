<form name="inputnews" action="index.php?menu=inputlow.php&aksi=kirim" enctype="multipart/form-data" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover table-responsive">
  <tr>
    <td width="23%">Running Text</td>
    <td width="1%">:</td>
    <td width="76%"><input name="nama" type="text" id="kat2" size="50"></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><input name="lowongan" type="text" id="kat3" size="45"></td>
  </tr>
</table>
<input name="kirim" type="submit" value="Kirim" class="btn btn-primary" />
<input name="reset" type="reset" value="Ulangi" class="btn btn-danger" />
</form>
<?php
include "../koneksi.php";
if($_GET['aksi']=="kirim"){
$sql=mysqli_query($koneksi,"insert into lowongan(kategori,perusahaan,pekerjaan,syarat,kontak) values ('$_POST[kategori]','$_POST[nama]','$_POST[lowongan]','$_POST[kualifikasi]','$_POST[kontak]')");
if($sql){
	echo "input data berhasil";
}
else echo "error";

	
}




?>