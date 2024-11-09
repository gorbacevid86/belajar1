<?php
include "../koneksi.php";
//echo "terpilih $_POST[pilih]";
$sql = mysqli_query($koneksi,"select tema from tema where id=1");
$temaku = mysqli_fetch_array($sql);

?>
<style>
  #btnku {
    position: fixed;
    width: 100px;
    height: 80px;
    right: 0px;
    top: 200px;
    z-index: 10;
  }
</style>
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="glyphicon glyphicon-edit"></i> Tema saat ini</h4>
  Tema dipilih : <button type="button" class="btn btn-warning"> <?= $temaku[0]; ?></button>

  <img src="<?= $temaku[0] . ".jpg"; ?>" width="300" class="img-thumbnail"> Klik <a href="../index.php" target="_blank" class="btn btn-app bg-maroon btn-flat margin"><i class="fa fa-eye"></i>Disini </a>untuk melihat preview
</div>
<form name="frmcb" action="index.php?menu=pilihtemplate.php&aksi=kirim" method="post" enctype="multipart/form-data">

  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border bg-blue-active color-palette">
        <i class="fa fa-photo"></i>

        <h3 class="box-title">Silahkan pilih tema yang anda inginkan</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        Pilih salah satu tema di bawah ini lalu klik tombol Pilih pada sebelah kanan layar anda <input type="submit" name="submit" value="Pilih" class="btn btn-danger" id="btnku">
      </div>
      <!-- /.box-body -->
    </div>
  </div>

  
  <div class="col-md-6">
    <div class="box box-default ">
      <div class="box-header with-border bg-purple-active color-palette">
        <i class="fa fa-tag"></i>

        <h3 class="box-title">Tema 1 ------> <a class="btn btn-info" target="_blank" href="../tema6.php">Preview</a></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body"> <label><input type="radio" name="pilih" id="tema6" value="tema6">
          <img src="tema6.jpg" class="img-responsive"></label>

        <p class="text-muted well well-sm no-shadow" style="margin-left: 10px;margin-right: 10px;">
          Merupakan display informasi jadwal sholat berdasarkan daerah. Ijinkan browser anda untuk mengakses lokasi untuk menentukan jadwal sholat otomatis. Terdapat banner informasi berupa slide di sebelah kiri display
        </p>
      </div>


    </div>
    <!-- /.box-body -->
  </div>

 
  <div class="col-md-6">

    <div class="box box-default ">
      <div class="box-header with-border bg-red color-palette">
        <i class="fa fa-rss"></i>

        <h3 class="box-title">Tema 2 ------> <a class="btn btn-info" target="_blank" href="../tema22.php">Preview</a></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body"> <label><input type="radio" name="pilih" id="tema22" value="tema22">
          <img src="tema22.jpg" class="img-responsive"></label>

        <p class="text-muted well well-sm no-shadow" style="margin-left: 10px;margin-right: 10px;">
          Display informasi Custom menampilkan jadwal shalat otomatis
        </p>
      </div>


    </div>
    <!-- /.box-body -->
  </div>

 

  <div class="col-md-6 ">

    <div class="box box-default ">
      <div class="box-header with-border bg-blue color-palette">
        <i class="fa fa-unlock"></i>

        <h3 class="box-title">Tema 3 ------> <a class="btn btn-info" target="_blank" href="../tema31.php">Preview</a></h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body"> <label><input type="radio" name="pilih" id="tema31" value="tema31">
          <img src="tema31.jpg" class="img-responsive"></label>

        <p class="text-muted well well-sm no-shadow" style="margin-left: 10px;margin-right: 10px;">
          Display informasi Masjid
      </div>


    </div>
    <!-- /.box-body -->
  </div>


  


</div>
<!-- /.box-body -->
</div>
</form>
<?php
if ($_GET["aksi"] == "kirim") {
  session_start();
  include "../koneksi.php";
  //echo "terpilih $_POST[pilih]";
  $sql = mysqli_query($koneksi,"update tema set tema='$_POST[pilih]' where id=1");
  if ($sql) echo "Tema telah diupdate";
  echo ("<meta http-equiv=\"refresh\" content=\"1;url=index.php?menu=pilihtemplate.php\">");
}


?>