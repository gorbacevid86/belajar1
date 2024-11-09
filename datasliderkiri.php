<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<?php

include "koneksi.php";
$lihat=mysqli_query($koneksi,"select * from gambar2 order by id DESC");

?>
<?php while ($slide=mysqli_fetch_array($lihat)){ ?>
  <img  src="banner/<?=$slide[2];?>" style="width:50%; padding-left: 0px">
  <?php } ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3500);    
}
</script>
