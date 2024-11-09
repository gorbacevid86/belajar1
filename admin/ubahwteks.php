<?php include "../koneksi.php";
include "../tanggal.php";
include "tampilow2.php";
$qbg=mysqli_query($koneksi,"select warna from warnabg where id=1");
$bg=mysqli_fetch_array($qbg);
//echo "Warna sekarang adalah #$bg[0], preview";
$take=mysqli_query($koneksi,"select * from rteks where id=1");
$prop=mysqli_fetch_array($take);
?>
<style>

	.nganu tr, table{
		background-color: cadetblue;
		padding: 50px 50px;
		color: #000000;
		font-size: 14px;
		
		
	}
	.tengah input{
		position: relative;
		padding-left: 30px;
	}
</style>

<h3>Untuk mengubah warna background klik ambil warna berikut</h3><br />
<script src="jscolor.js"></script>
<form name="ambilwarna" method="post" action="index.php?menu=ubahwteks.php&aksi=kirim" enctype="multipart/form-data">

	
	<table width="100%" border="0" class="table table-responsive" align="right">
	  <tbody>
	    <tr class="nganu">
	      <td>Warna Background Hari: <input name="bghari" class="jscolor" value="<?=$prop[1];?>"></td>
	      <td>Warna Teks Hari:<input name="fonthari" class="jscolor" value="<?=$prop[2];?>"></td>
        </tr>
	   <tr class="nganu">
	      <td>Warna Background Running Teks: <input name="bgteks" class="jscolor" value="<?=$prop[3];?>"></td>
	      <td>Warna Teks Running Teks:<input name="fonteks" class="jscolor" value="<?=$prop[4];?>"></td>
        </tr>
	   <tr class="nganu">
	      <td>Warna Background Jam: <input name="bgjam" class="jscolor" value="<?=$prop[5];?>"></td>
	      <td>Warna Teks Jam:<input name="fontjam" class="jscolor" value="<?=$prop[6];?>"></td>
        </tr>
	    <tr>
	      <td><input type="submit" value="Ubah" class="btn btn-primary"></td>
	      <td>&nbsp;</td>
        </tr>
      </tbody>
  </table>
	<p></p>

		
	

</form>
<?php
if($_GET["aksi"]=="kirim"){
include "../koneksi.php";
	//echo "Warna dipilih=$_POST[warna] <br>";
	//echo "Warna dipilih=$_POST[warna1]";
	$query=mysqli_query($koneksi,"update rteks set bghari='$_POST[bghari]', fonthari='$_POST[fonthari]', bgteks='$_POST[bgteks]', fonteks='$_POST[fonteks]', bgjam='$_POST[bgjam]', fontjam='$_POST[fontjam]' where id=1");

if($query)  echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=ubahwteks.php\">");
}

?>

