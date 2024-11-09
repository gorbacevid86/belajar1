<?php
include "../koneksi.php";
$qbg=mysqli_query($koneksi,"select warna from warnabg where id=2");
$bg=mysqli_fetch_array($qbg);
$my_image = array_values(getimagesize('../bg/'.$bg[0]));
 
  list($lebar, $tinggi, $jenis, $attr) = $my_image;

//  print_r($my_image);

 // echo 'Attribute: '.$attr.'<br />';
  
 // echo "Jenis: $jenis <br>";
?>

Gambar background sekarang (<?php echo "$bg[0] "; echo "ukuran: $lebar x $tinggi pixel";?>) :<br><br>
<img src="../bg/<?=$bg[0];?>" class="img-responsive"><br>

<form action="index.php?menu=ubahgbrbg.php&aksi=kirim" method="post" enctype="multipart/form-data" name="gbr" >

  <p>
 Untuk mengubah gambar, masukkkan file gambar berformat jpg/png/gif :<br> <input name="file" type="file">
  </p>
  
    <input type="submit" value="Ubah Background depan" name="submit" class="btn btn-primary">
 
</form>
<?php

include "../koneksi.php";
if(isset($_POST["submit"])){
/*echo "Gambarnya adalah $gambar_name";	
	if(!empty($gambar)){
	copy($gambar,"../bg/$gambar_name");
	$inputgbr=mysqli_query($koneksi,"update warnabg set warna='$gambar_name' where id=2");
	if($inputgbr)  echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=ubahgbrbg.php\">");
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
					move_uploaded_file($file_tmp, '../bg/'.$nama);
 $query=mysqli_query($koneksi,"update warnabg set warna='$nama' where id=2");
 if($query){
	 echo "Gambar berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=ubahgbrbg.php\">");

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

?>