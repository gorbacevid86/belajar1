<?php error_reporting (E_ALL ^ E_NOTICE); ?>


<?php
//session_start();
include "../koneksi.php";

$hapus = !empty($_GET['hapus']) ? $_GET['hapus'] : '';
$aksi = !empty($_GET['aksi']) ? $_GET['aksi'] : '';


$lihat=mysqli_query($koneksi,"select * from video order by id DESC");
//$low=mysqli_fetch_array($lihat);
$i=0;
?>
<div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tv"></i> Data Video</h3>

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
   <th >No</th>
    <th >Judul</th>
    <th>Durasi</th>
     <th>Aksi</th>
  </tr>
  <?php 
  while($low=mysqli_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td ><?=$i;?></td>
    <td><?=$low[1];?> </td>
    <td><?php echo $low[3]." detik";
	
	?></td>
    <td><a href="#" 
onclick="Popup=window.open('preview.php?id=<?=$low[0];?>','Popup','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=640,height=400,left=430,top=23'); return false;">
<b><font face="Arial" size="2" color="#0000">
<button type="button" class="btn btn-alert">Lihat Preview</button></font></b></a></td>
    <!--<td width="17%" align="center" style=" border-bottom-color:#3C0; border-top-color:#FFF;border-left-color:#FFF;  border-right-color:#FFF; border-style: dotted"><a href="index.php?menu=editvideo.php&data=<?=$low[0];?>" class="ngedit">Edit</a></td>-->
    <td><a href="index.php?menu=showvideo.php&data=<?=$low[0];?>&aksi=hapus" class="ngedit"><button type="button" class="btn btn-danger">Hapus</button></a></td>
  </tr>
  <?php } ?>
</table>
<?php

if($_GET["aksi"]=="hapus"){
	?>
    <p>
<div style="border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" > 
    <?php
$lihat=mysqli_query($koneksi,"select * from video where id=$_GET[data]");
$hps=mysqli_fetch_array($lihat);
	
echo "Yakin akan menghapus video $hps[2]</b> ?";	
echo "<center><p> <a href='index.php?menu=showvideo.php&uhui=ya&id=$_GET[data]&img=$hps[2]' class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showlow.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ 
unlink("../video/$_GET[img]");
$sql=mysqli_query($koneksi,"delete from video where id=$_GET[id]");
if($sql) //header("location:index.php?menu=showvideo.php");
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=inputvideo.php\">");
}


?></div>
