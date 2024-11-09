
<?php

include "../koneksi.php";
$lihat=mysqli_query($koneksi,"select * from gambar2 order by id DESC");
//$low=mysqli_fetch_array($lihat);
$i=0;
?>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Slider</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
 <div class="box-body table-responsive no-padding">
<table class="table table-hover">
  <tr>
    <th>No</th>
   <th>Judul</th><th>Slider</th>
     <td colspan="2" align="center">&nbsp;</td>
  </tr>
  <?php 
  while($low=mysqli_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td><?=$i;?></td>
    <td ><?=$low[1];?></td>
    <td ><?php 
	if($low[2]!=NULL){
	$size=$low[3]/1000;
	echo "<img src='../banner/$low[2]' width='80'><br><font size=2 color=#333333><i>$low[2] / $size B</i></font>";	
	}
	else "Belum ada gambar";
	
	?></td>
    <td width="17%" align="center" ><!--<a href="index.php?menu=editslider.php&data=<?=$low[0];?>" class="ngedit"><button type="button" class="btn btn-info">Edit</button></a>--></td>
    <td width="15%" align="center" ><a href="index.php?menu=showslider.php&data=<?=$low[0];?>&aksi=hapus" class="ngedit"><button type="button" class="btn btn-danger">Hapus</button></a></td>
  </tr>
  <?php } ?>
</table>
<?php
include "../koneksi.php";
if($_GET["aksi"]=="hapus"){
	?>

    <p>
 <div style="border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" > 
    <?php
$lihat=mysqli_query($koneksi,"select * from gambar2 where id=$_GET[data]");
$hps=mysqli_fetch_array($lihat);
	
echo "Yakin akan menghapus gambar $hps[2]</b> ?";	
echo "<center><p> <a href=index.php?menu=showslider.php&uhui=ya&id=$_GET[data]&img=$hps[2] class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showslider.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ 
unlink("../banner/$_GET[img]");
$sql=mysqli_query($koneksi,"delete from gambar2 where id=$_GET[id]");
if($sql) //header("location:index.php?menu=showbanner.php");
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=inputslider.php\">");
}


?></div>