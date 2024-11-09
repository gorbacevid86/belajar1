
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<?php
include "koneksi.php";
$vid=mysqli_query($koneksi,"select * from video order by rand() limit 1");
$hasil=mysqli_fetch_array($vid);

?>
 <?php
		$stw=mysqli_query($koneksi,"select info from informasi where id=2");
		$tw=mysqli_fetch_array($stw);
		
		?>

<meta http-equiv="refresh" content="<?=$hasil[3];?>" />
<body>

<video width="<?=$tw[0];?>" autoplay >
  <source src="video/<?=$hasil[2];?>" type="video/mp4">
  <!-- <source src="video/<?=$hasil[2];?>" type="video/ogg"> -->
Your browser does not support the video tag.
</video>

</body>
</html>