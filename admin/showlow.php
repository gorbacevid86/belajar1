<?php
session_start();

include "../koneksi.php";
$lihat=mysqli_query($koneksi,"select * from lowongan order by id DESC");
//$low=mysqli_fetch_array($lihat);
$i=0;
?>
 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Running Teks</h3>

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
    <th >Running Text</th>
    <th>Keterangan</th>
     <th colspan="2">&nbsp;</th>
  </tr>
  <?php 
  while($low=mysqli_fetch_array($lihat)){
$i++;
  ?>
  <tr>
    <td><?=$i;?></td>
    <td ><?=$low[2];?></td>
    <td ><?=$low[3];?></td>
    <td><a href="index.php?menu=editlow.php&data=<?=$low[0];?>" class="ngedit"><button type="button" class="btn btn-info">Edit</button></a></td>
    <td ><a href="index.php?menu=showlow.php&data=<?=$low[0];?>&aksi=hapus" class="ngedit"><button type="button" class="btn btn-danger">Hapus</button></a></td>
  </tr>
  <?php } ?>
</table></div>
<?php
if($_GET["aksi"]=="hapus"){
	?>
    <p>
 <div style="border-color:#F00; background-color:#CF9; border-style: dotted; padding-top:10px; padding-left:10px; padding-bottom:10px" > 
    <?php
$lihat=mysqli_query($koneksi,"select * from lowongan where id=$_GET[data]");
$hps=mysqli_fetch_array($lihat);
	
echo "Yakin akan menghapus data perusahaan <b>$hps[2]</b> lowongan <b>$hps[3]</b> ?";	
echo "<center><p> <a href=index.php?menu=showlow.php&uhui=ya&id=$_GET[data] class=tabel>[YA]</a>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp; <a href=index.php?menu=showlow.php class=tabel>[TIDAK]</a></center>";

	
}
if($_GET['uhui']=="ya"){ $sql=mysqli_query($koneksi,"delete from lowongan where id=$_GET[id]");
if($sql) 
 echo("<meta http-equiv=\"refresh\" content=\"0;url=index.php?menu=showlow.php\">");
//header("location:index.php?menu=showlow.php");
}


?></div>
