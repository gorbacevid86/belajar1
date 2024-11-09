<html>
<head>
<meta name = "viewport" content = "width = device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">		
<script src="../js/geo.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script>

function initialize_map()
{
    var myOptions = {
	      zoom: 4,
	      mapTypeControl: true,
	      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	      navigationControl: true,
	      navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
	      mapTypeId: google.maps.MapTypeId.ROADMAP      
	    }	
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}
function initialize()
{
	if(geo_position_js.init())
	{
		document.getElementById('current').innerHTML="Menerima data...";
		geo_position_js.getCurrentPosition(show_position,function(){document.getElementById('current').innerHTML="Couldn't get location"},{enableHighAccuracy:true});
	}
	else
	{
		document.getElementById('current').innerHTML="Gagal";
	}
}

function show_position(p)
{
    document.getElementById('current').innerHTML="Latitude="+p.coords.latitude.toFixed(2)+" - Longitude="+p.coords.longitude.toFixed(2);

    document.cookie="latitude="+p.coords.latitude.toFixed(2);
    document.cookie="longitude="+p.coords.longitude.toFixed(2);
	var pos=new google.maps.LatLng(p.coords.latitude,p.coords.longitude);
	map.setCenter(pos);
    map.setZoom(14);
    
	var infowindow = new google.maps.InfoWindow({
	    content: "<strong>Lokasi Anda</strong>"
	});

	var marker = new google.maps.Marker({
	    position: pos,
	    map: map,
	    title:"Anda disini"
	});

	google.maps.event.addListener(marker, 'click', function() {
	  infowindow.open(map,marker);
	});
	
}





</script >

<style>
	body {font-family: Helvetica;font-size:11pt;padding:0px;margin:0px}
	#title {background-color:#e22640;padding:5px;}
	#current {font-size:10pt;padding:5px;}	
</style>
</head>
<body onload="initialize_map();initialize()">
<div class="row">
<div class=" col-md-4">
	<div id="title">Lokasi anda saat ini</div>
	<div id="current">Mengambil data...</div>
	<div id="map_canvas" style="width:320px; height:350px" class="embed-responsive-16by9"></div>
    </div>
    <div class="col-md-8">
<h4>Input data latitude dan longitude (Angka berikut diambil otomatis dari GPS, jika lokasi kurang akurat dapat anda inputkan secara manual dengan mencari titik lokasi menggunakan Google Map)</h4>
<p class="alert-danger">Jika angka belum muncul, silahkan refresh halaman ini (tekan F5)</p>
<?php 
$latitude = $_COOKIE['latitude'];
  $longitude = $_COOKIE['longitude'];
  ?>
<form name="inputlok" method="post" action="index.php?menu=carilokasi.php">
Latitude <input type="text" name="latitude" value="<?=$latitude;?>">
Longitude <input type="text" name="longitude" value="<?=$longitude;?>">
<input type="submit" value="Simpan" name="simpan" class="btn btn-success">
</form>
<?php
if(isset($_POST["simpan"])){
    echo "longitude = $_POST[longitude]";
    $sql=mysqli_query($koneksi,"update lokasi set longitude='$_POST[longitude]', latitude='$_POST[latitude]' where id=1");
}
?>
    </div> 
    </div>
</body>
</html>