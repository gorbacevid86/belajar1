<form name="frmupl" method="post" action="index.php?menu=inputvideo.php&aksi=upload" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="83%">&nbsp;</td>
  </tr>
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" size="30" onblur='if (this.value == &quot;&quot;) {this.value = &quot;Input judul&quot;;}' onfocus='if (this.value == &quot;Input judul&quot;) {this.value =&quot;&quot;;}' value='Input judul'></td>
  </tr>
  <tr>
    <td>Durasi</td>
    <td>:</td>
    <td><input type="text" name="durasi" size="30" id="durasi" />
      &nbsp;&nbsp;&nbsp; *masukkan dalam detik</td>
  </tr>
  <tr>
    <td>Upload Video</td>
    <td>:</td>
    <td><input type="file" name="file" id="video">
    *masukkan file berformat MP4 (Max: 999 MB)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Upload" name="upload" />
    <input type="reset" value="Reset" name="reset" />
    </td>
  </tr>
</table>
</form>
<?php
//$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';

include "../koneksi.php";
if(isset($_POST["upload"])){
	//echo "Nama: $_POST[judul], gambar = $video_name, ukuran=$gambar_size";
	
	/*if(!empty($video)){
	copy($video,"../video/$video_name");
	$inputgbr=mysqli_query($koneksi,"insert into video (judul, video, durasi) values ('$_POST[judul]','$video_name','$_POST[durasi]')");
	if($inputgbr) echo "sukses";
	}
	else echo "Harap masukkan file video";
	
}*/

$ekstensi_diperbolehkan	= array('mp4','mpeg','avi');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1073741824){			
					move_uploaded_file($file_tmp, '../video/'.$nama);
 $query=mysqli_query($koneksi,"insert into video (judul, video, durasi) values ('$_POST[judul]','$nama','$_POST[durasi]')");
 if($query){
	 echo "Video berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=inputvideo.php\">");

					}else{
						echo 'GAGAL MENGUPLOAD video';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
}


include "showvideo.php";



?>
