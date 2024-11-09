<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codedthemes.com/demos/admin-templates/datta-able/bootstrap/default/bc_card.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 14:36:41 GMT -->
<head>
    <title>Tema 3 Display Masjid by Zanuar Didik Bintoro</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."/>
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes" />
    <!-- Hotjar Tracking Code for http://html.codedthemes.com/datta-able/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1629436,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <!-- Favicon icon -->
     <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- notification css -->
    <link rel="stylesheet" href="assets/plugins/notification/css/notification.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
<style>
body {
  overflow-y: hidden; /* Hide vertical scrollbar */
  overflow-x: hidden; /* Hide horizontal scrollbar */
}</style>
</head>


<body>
<?php
	
include "koneksi.php";
	$pilih=mysqli_query($koneksi,"select tema from tema where id=1");
$tema=mysqli_fetch_row($pilih);

$ambilwlogo=mysqli_query($koneksi,"select warna from warnabg where id=3");
$logoku=mysqli_fetch_array($ambilwlogo);
$ambilw=mysqli_query($koneksi,"select warna from warnabg where id=1");
$warna=mysqli_fetch_array($ambilw);
$ambilwbg=mysqli_query($koneksi,"select warna from warnabg where id=2");
$bg=mysqli_fetch_array($ambilwbg);
$cari=mysqli_query($koneksi,"select * from informasi where id=4");
$isi=mysqli_fetch_array($cari);
$cari1=mysqli_query($koneksi,"select * from informasi where id=5");
$isi1=mysqli_fetch_array($cari1);
?>
<script type="text/javascript" src="PrayTimes.js"></script>
<style>
    body
{

background-repeat: no-repeat;
background-color: #fff;
background-size:cover;
}
</style>

<div id="bgr"><script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#bgr').load('ubahbg.php')
			}, 1000);
		});
				</script></div>
   <?php
   $lok=mysqli_query($koneksi,"select * from lokasi where id=1");
   $hasil=mysqli_fetch_array($lok);
  // echo "longitude". $hasil['longitude'];
   
   ?>
	<?php   
include "tanggal.php";                                                    
include "koneksi.php";

?>
<body>
<script type="text/javascript">
	
	var date = new Date(); // today
var times = prayTimes.getTimes(new Date(), [<?=$hasil['latitude'];?>, <?=$hasil['longitude'];?>, 10], +7);
</script>

     
      <div class="content">
          <div class="pcoded-inner-content">
              <!-- [ breadcrumb ] start -->

              <!-- [ breadcrumb ] end -->
              <div class="main-body">
               
                 
                            <!-- [ Main Content ] start -->
                        <div class="row">
       
			 
			 
        <div class="col-4 p-0 m-0 p-r-10">
           <div style="height:100px;" class="bg-blue text-center" id="kiri">
			   
			   <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#kiri').load('ubahlogokiri.php')
			}, 1000);
		});
				</script>
			   
			  </div>
          
        </div>

        <div class="col-4 p-0 m-0 p-r-10">
           <div style="height:100px;" class="bg-blue text-center" id="tengah">
			 <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#tengah').load('ubahlogotengah.php')
			}, 1000);
		});
				</script>
			
			</div>
          
        </div>
							    <div class="col-4 p-0 m-0 p-r-10">
           <div style="height:100px;" class="bg-blue text-center" id="kanan">
									
									 <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#kanan').load('ubahlogokanan.php')
			}, 1000);
		});
				</script>
									</div>
           
        </div>
							
<div class="col-4 p-1 m-0 p-r-10 img-responsive">
<div>


<?php include "slider.php";?>              
            
            </div>
							       </div>
							
<div class="col-2 p-1 m-0 p-r-10">
<div class="panel panel-success">
  <div class="panel-heading"><font size="3">Laporan Kas</font></div>
	 <marquee direction="up" scrolldelay="300" height="340">
	  <div class="panel-body" id="kass">
	 
			 <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#kass').load('laporankas.php')
			}, 1000);
		});
				</script>					
		  
		  
			</div></marquee>
</div>
        </div>
				  
<div class="col-3 p-1 m-0 p-r-10">
<div class="panel panel-warning">
  <div class="panel-heading"><font size="3">Jadwal Khatib</font></div>
	  <marquee direction="up" scrolldelay="300" height="340">
	  <div class="panel-body" id="katib">
	 
			 <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#katib').load('katib.php')
			}, 1000);
		});
				</script>					
		  
		  
			</div></marquee>
</div>
        </div>				
<div class="col-3 p-1">
<div class="panel panel-info">
  <div class="panel-heading"><font size="3">Jadwal Kajian</font></div>
	  <marquee direction="up" scrolldelay="300" height="340">
	  <div class="panel-body" id="kajian">
	 
			 <script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#kajian').load('kajian.php')
			}, 1000);
		});
				</script>					
		  
		  
			</div></marquee>
</div>
        </div>
    <!-- [ Main Content ] end -->  
                           
                           
                                <div class="card-group m-b-10 m-t-10">

                                 	    <div class="card bg-dark">
                                        <img class="card-img" src="assets/images/slider/bgisya.jpg" alt="Card image">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title text-white">&nbsp;&nbsp;Isya</h3>
                                            <h1 class="text-white"><script>
document.write(times.isha);
</script></h1>
                                          
                                        </div>
                                    </div>								
                                    <div class="card bg-dark">
                                        <img class="card-img" src="assets/images/slider/bgsubuh.jpg" alt="Card image">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title text-white">Subuh</h3>
                                            <h1 class="card-text text-white"><script>
document.write(times.fajr);
</script></h1>
                                           
                                        </div>
                                    </div>	
                                    <div class="card bg-dark">
                                        <img class="card-img" src="assets/images/slider/bgduhur.jpg" alt="Card image">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title text-blue">Dhuhur</h3>
                                            <h1 class="card-text text-blue"><script>
document.write(times.dhuhr);
</script></p>
                                           
                                        </div>
                                    </div>
                                    <div class="card bg-dark">
                                        <img class="card-img" src="assets/images/slider/bgashar.jpg" alt="Card image">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title text-blue">Ashar</h3>
                                            <h1 class="card-text text-blue"><script>
document.write(times.asr);
</script></h1>
                                            
                                        </div>
                                    </div>
                                    <div class="card bg-dark">
                                        <img class="card-img" src="assets/images/slider/bgmagrib.jpg" alt="Card image">
                                        <div class="card-img-overlay">
                                            <h3 class="card-title text-white">Maghrib</h3>
                                            <h1 class="card-text text-white"><script>
document.write(times.maghrib);
</script></h1>
                                            
                                        </div>
                                    </div>
                                    </div>
                                 </div>
                                    
									
                                 <div class="row">
                               
                               <div class="col-xl-12 ">
                               <div id="trik_atas"><?php include "tampilow2.php";?></div>	</div>
</div>                          
 
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="../assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="../assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="../assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="../assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="../assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
   

</body>

<!-- Mirrored from codedthemes.com/demos/admin-templates/datta-able/bootstrap/default/bc_card.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 14:36:44 GMT -->
</html>
