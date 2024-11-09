<?php include "../koneksi.php";
$query=mysqli_query($koneksi,"select * from user where id=1");
$hasil=mysqli_fetch_array($query);

?>
<form action="index.php?menu=ubahpass.php&aksi=kirim" method="post" enctype="multipart/form-data" name="frm1">
  <table width="100%" border="0" class="table table-hover">
    <tbody>
      <tr>
        <td width="23%">Username Lama</td>
        <td width="3%">:</td>
        <td width="74%"><b><?=$hasil[1];?></b></td>
      </tr>
      <tr>
        <td>Username baru</td>
        <td>:</td>
        <td>
        <input type="text" name="username" id="textfield" size="35"></td>
      </tr>
      <tr>
        <td>Password baru</td>
        <td>:</td>
        <td><input type="text" name="password" id="password" size="35"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Ubah" class="btn btn-info"></td>
      </tr>
    </tbody>
  </table>



</form>

<?php
if($_GET["aksi"]=="kirim"){
	$input=mysqli_query($koneksi,"update user set username='$_POST[username]',password='$_POST[password]' where id=1");
	if($input)  echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=ubahpass.php\">");
	else echo "gagal";
}


?>
