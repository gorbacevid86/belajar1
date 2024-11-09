<?php
include "../koneksi.php";
$qbg=mysqli_query($koneksi,"select warna from warnabg where id=4");
$bg=mysqli_fetch_array($qbg);
$my_image = array_values(getimagesize('../bg/'.$bg[0]));
 
  list($lebar, $tinggi, $jenis, $attr) = $my_image;

//  print_r($my_image);

 // echo 'Attribute: '.$attr.'<br />';
  
 // echo "Jenis: $jenis <br>";
?>

        
<div class="box box-success box-solid">
 <div class="box-header with-border">
              <h3 class="box-title">Logo Kiri Sekarang</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            Gambar logo Kiri sekarang (<?php echo "$bg[0] "; echo "ukuran: $lebar x $tinggi pixel";?>) :<br><br>
<img src="../bg/<?=$bg[0];?>" width="400">
	</div></div>

<form action="index.php?menu=ubahlogokiri.php&aksi=kirim" method="post" enctype="multipart/form-data" name="gbr" >


	  <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Perhatian!</h4>
               Untuk mengubah gambar, masukkkan file gambar berformat jpg/png/gif (rekomendasi ukuran tinggi 100 pixel):
		    <input name="file" type="file"> 

  
              </div>
	  
	
    <input type="submit" value="Ubah Logo (kiri)" name="submit" class="btn btn-primary">

</form>
<?php

include "../koneksi.php";
if(isset($_POST["submit"])){
/*echo "Gambarnya adalah $gambar_name";	
	if(!empty($gambar)){
	copy($gambar,"../bg/$gambar_name");
	$inputgbr=mysqli_query($koneksi,"update warnabg set warna='$gambar_name' where id=3");
	if($inputgbr)  echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=ubahlogo.php\">");
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
 $query=mysqli_query($koneksi,"update warnabg set warna='$nama' where id=4");
 if($query){
	 echo "Gambar berhasil diinput....silahkan menunggu";
						echo("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=ubahlogokiri.php\">");

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