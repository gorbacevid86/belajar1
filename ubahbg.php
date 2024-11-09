<?php 
include "koneksi.php";
$ambilwbg=mysqli_query($koneksi,"select warna from warnabg where id=2");
$bg=mysqli_fetch_array($ambilwbg);

?>
<style>
#bg {
  position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
</style>
<img src="bg/<?=$bg[0];?>" id="bg" alt="">



