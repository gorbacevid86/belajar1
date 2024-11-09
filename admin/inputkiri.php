<link rel="stylesheet" href="./minified/themes/default.min.css" id="theme-style" />
		  
		<script src="./minified/sceditor.min.js"></script>
		<script src="./minified/icons/monocons.js"></script>
		<script src="./minified/formats/bbcode.js"></script>
<?php
session_start();
include "../koneksi.php";
$cari=mysqli_query($koneksi,"select * from informasi where id=8");
$isi=mysqli_fetch_array($cari);


?>

<form action="index.php?menu=inputkiri.php&aksi=kirim" method="post" enctype="multipart/form-data" name="frm1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="79%">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top">Menu Kiri</td>
    <td valign="top">:</td>
    <td><textarea name="isi" cols="70" rows="30" id="example" style="height:300px;width:600px;"><?=$isi[1];?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Update" name="kirim">
      <input type="reset" value="Reset" name="reset"></td>
  </tr>
</table></form>

<script>
			var textarea = document.getElementById('example');
			sceditor.create(textarea, {
				format: 'xhtml',
				icons: 'monocons',
				style: '../minified/themes/content/default.min.css'
			});


			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = '../minified/themes/' + themeInput.value + '.min.css';

				document.getElementById('theme-style').href = theme;
			};
		</script>
<?php
if($_GET["aksi"]=="kirim"){
	$input=mysqli_query($koneksi,"update informasi set info='$_POST[isi]' where id=8");
	
	if($input) 
		echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputkiri.php\">");

		//header("location:index.php?menu=inputtwit.php");
	else echo "gagal";
}


?>

