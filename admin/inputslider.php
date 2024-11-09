<form name="frmupl" method="post" action="index.php?menu=inputslider.php&aksi=upload" enctype="multipart/form-data">
<table class="table table-hover table-responsive">
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" size="30"></td>
  </tr>
  <tr>
    <td>Upload Slider</td>
    <td>:</td>
    <td><input type="file" name="file"> </td>
  </tr>
	
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Upload" name="upload" class="btn btn-primary" />
    <input type="reset" value="Reset" name="reset" class="btn btn-danger" />
    </td>
  </tr>
</table>
</form>
<?php
include "../koneksi.php";
if($_GET['aksi']=="upload"){
	//echo "Nama: $_POST[judul], gambar = $gambar_name, ukuran=$gambar_size";
	/*if(!empty($gambar)){
	copy($gambar,"../banner/$gambar_name");
	$inputgbr=mysqli_query($koneksi,"insert into gambar2 (judul, gambar, size) values ('$_POST[judul]','$nama','$ukuran')");
	if($inputgbr) echo "sukses";
	}
	else echo "Harap masukkan file gambar";
*/	
	
	$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg','gif','bmp');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 5044070){			
					move_uploaded_file($file_tmp, '../banner/'.$nama);
 $query=mysqli_query($koneksi,"insert into gambar2 (judul, gambar, size) values ('$_POST[judul]','$nama','$ukuran')");
 if($query){
	 echo "Gambar berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputslider.php\">");

					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
}


include "showslider.php";
?>

