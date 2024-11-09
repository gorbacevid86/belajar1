<meta http-equiv="refresh" content="3000">

<?php
include "koneksi.php";



//tampil lowongan scrolling
$low=mysqli_query($koneksi,"select * from lowongan order by id DESC");
$cari=mysqli_query($koneksi,"select * from informasi where id=3");
$isi=mysqli_fetch_array($cari);
?>
<style>
.jajal{font-size:<?=$isi[1];?>}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
 <tr align="center" bgcolor="#F05205" valign="middle">
   <td bgcolor="#333333" width="271"><font size=5 color=yellow>Informasi</font><br>
  <font size=3 color="#99FF00"> <font face="Arial, Helvetica, sans-serif" color="#9C0" size="4" >&nbsp;&nbsp;&nbsp;<?php 
	  //include "tanggal.php"; 
	  echo tanggal_hari_ini();  ?>
    </font></font></td>
 <td width="745" align="center" valign="middle" style="padding-left:20px; padding-right:20px; background-size:1000px" bgcolor="#FF6600">
<marquee direction="left" scrolldelay="90">

  <?php while ($hasil=mysqli_fetch_array($low)){ ?>
   
	
	<?php 
	if(empty($hasil[3])){
	echo "&nbsp;&nbsp;&nbsp;<font class=jajal color=white>$hasil[2] |</font> &nbsp;&nbsp;&nbsp;";
	}
	else{
	echo "<font class=jajal color=white>$hasil[2] </font><font class=jajal color=yellow>[$hasil[3]]&nbsp;&nbsp;&nbsp;&nbsp;|</font>";
	}
	?>
    
    
   
    <?php } ?>
 
</marquee>
</td>
<td width="95" align="middle" bgcolor="#006633"><?php include "jam.html";?></td></tr>
</table>