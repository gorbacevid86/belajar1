<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Please activate your programs</title>
</head>
<link href="admin/bootstrap.css" rel="stylesheet" type="text/css" />
<body>
	<div style="padding-left:100px; padding-right: 100px; padding-top: 50px ">
	<?php
	  
include "koneksi.php";
 ob_start();  
   
 system('ipconfig /all');  
 
   $mycom=ob_get_contents();  
 // membersihkan output buffer  
   ob_clean();  
 $findme = "Physical";  
 
 $pmac = strpos($mycom, $findme);  
 $mac=substr($mycom,($pmac+36),17);  
$serial=md5($mac);
$query=mysqli_query($koneksi,"update kode set judul='$serial', isi='0' where idberita=1");

?>
<div class="panel panel-primary">
	<div class="panel-heading">
  <div class="panel-body">
	 <h3>Please activate your programs</h3>
		</div></div>
  <div class="panel-footer"><h3 class="alert alert-danger" role="alert">Your <?php echo "Serial: <b>".md5($mac)."</b>"; ?>
</h3>
<p>Please send an email to raseco.purworejo@gmail.com or send an Whatsapp to 081212418055 <a href="https://api.whatsapp.com/send?phone=6281212418055&text=aktivasi kode <?=md5($mac); ?>
	" class="btn btn-primary"> Click to Send Message </a> and tell this ID: <b class="label label-danger"><?=md5($mac); ?></b> to get activation code</p>
<p>Please input your activation code here
	<form method="post" action="sorry.php?aksi=aktivasi" enctype="multipart/form-data" name="aktivasi">
<input type="text" name="lisensi" size="50">
	
	<input type="submit" value="Activate" name="submit" class="btn btn-info">

</form></div>
</div>

<?php
if($_GET["aksi"]=="aktivasi"){
	if(empty($_POST['lisensi'])){
	echo "Check your activation code";
}
	else if(!empty($_POST['lisensi'])){
		$query=mysqli_query($koneksi,"update kode set isi='$_POST[lisensi]' where idberita=1");
	echo "Your activation code is <b>$_POST[lisensi]</b>, if your activation code is correct then your programs will be running soon, please wait we are checking....(this page will be autoreload in 3 second)";
		
	echo("<meta http-equiv=\"refresh\" content=\"3;url=index.php\">");	
	
	}

}
	   
?>
</p>
	</div>
</body>
</html>