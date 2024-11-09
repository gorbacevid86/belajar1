<title>Video preview</title>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
<?php
include "../koneksi.php";
$vid=mysqli_query($koneksi,"select * from video where id=$_GET[id]");
$hasil=mysqli_fetch_array($vid);

?>
 <?php
		$stw=mysqli_query($koneksi,"select info from informasi where id=2");
		$tw=mysqli_fetch_array($stw);
		
		?>
<video width="<?=$tw[0];?>" autoplay>
  <source src="../video/<?=$hasil[2];?>" type="video/mp4">
 <!-- <source src="../video/<?=$hasil[2];?>" type="video/ogg"> -->
Your browser does not support the video tag.
</video>

