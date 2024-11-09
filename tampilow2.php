

<?php
//include "koneksi.php";

//ambil properti
$take=mysqli_query($koneksi,"select * from rteks where id=1");
$prop=mysqli_fetch_array($take);

//echo "warnane = $prop[1]";
//tampil lowongan scrolling
$low=mysqli_query($koneksi,"select * from lowongan order by id DESC");
$cari=mysqli_query($koneksi,"select * from informasi where id=3");
$isi=mysqli_fetch_array($cari);
?>
<style>
.jajal{font-size:<?=$isi[1];?>}
</style>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
 <tr align="center" valign="middle">
   <td bgcolor="#<?=$prop[1];?>" width="271">
  <font face="Arial, Helvetica, sans-serif" color="#<?=$prop[2];?>" size="5" ><?php 
	 // include "tanggal.php"; 
	  echo tanggal_hari_ini();  ?>
    </font></font></td>
 <td width="745" align="center" valign="middle" style="padding-left:20px; padding-right:20px; background-size:1000px" bgcolor="#<?=$prop[3];?>">
<marquee direction="left" scrolldelay="90">
<div id="runteks">
 <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#runteks').load('runteks.php')
			}, 3000);
		});
				</script>
 </div>
</marquee>
</td>
<td width="95" align="middle" bgcolor="#<?=$prop[5];?>">
<script language="javascript" runat="server" type="text/javascript">
function mytime()
   {
   var d=new Date();
   //ap="am";
   h=d.getHours();
   m=d.getMinutes();
   s=d.getSeconds();
   //if (h>11) { ap = "pm"; }
   //if (h>24) { h = h-12; }
   //if (h>24) { h = 0; }
   if (h==0) { h = 0; }
   if (m<10) { m = "0" + m; }
   if (s<10) { s = "0" + s; }
   document.getElementById('timehere').innerHTML=h + ":" + m + ":" + s + " ";
   t=setTimeout('mytime()',200);
   }

</script>


<body onLoad="mytime()">
<div id="timehere" style="font-size:25px; color:#<?=$prop[6];?>" ></div>
</body>
</td></tr>
</table>