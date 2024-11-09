
<!DOCTYPE html><html lang="en"><head itemscope="" itemtype="http://schema.org/WebSite"><meta name="viewport" content="width=device-width,initial-scale=1.0" /><meta charset="utf-8" /><meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" /><meta content="bZy1hUHwYCR1jasFz-tOXC0oPPX65TADe1phMtvjomQ" name="google-site-verification" /><meta content="ID" property="og:locale" /><meta content="SIFORLAT" name="author" /><meta content="website" property="og:type" /><meta content="#081569" name="theme-color" /><meta content="true" name="u2f-support" /><meta content="siforlat.com" name="hostname" /><title>Tema 1 Display Masjid by Zanuar Didik Bintoro</title>

<meta name="csrf-token" content="Aag/bklRyaWie3VKcr94MO9kqyNpY70KQg6RcYIkd/ZbuzfTvlHA824qcTDzaxPyth4V55tyBGJVhrw/hT9nyA==" /><link rel="stylesheet" media="all" href="anuan.css" /><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-130269337-1"></script><script src="pray.js"></script></head>
	
	
	
	<body>
		
		
		<?php
		include "tanggal.php";
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
<div id="bgr">
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#bgr').load('ubahbg.php')
			}, 1000);
		});
				</script></div>		
<style type="text/css">
body
{

background-repeat: no-repeat;
background-color: #fff;
background-size:cover;
} 
#trik_atas {position:fixed;_position:absolute;bottom:0px; left:0;right:0;clip:inherit;z-index: 2;
_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}
	
#trik_tengah {position:fixed;_position:absolute;bottom:50px; left:0;right:0;clip:inherit;z-index: 2;
_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}	
	
#float-left{position:fixed;_position:absolute;top:0px;float:left; left:10px; margin-left:0px;z-index:10;
clip:inherit;_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}
#float-right{
position:fixed;_position:absolute;top:0px;float:left; margin-left:800px;z-index:10;
clip:inherit;_top:expression(document.documentElement.scrollTop+
document.documentElement.clientHeight-this.clientHeight);
_left:expression(document.documentElement.scrollLeft+
document.documentElement.clientWidth - offsetWidth);}
.atas {
	font-size: 24px;
}
.atas {
	color: #CCC;
}
.atase {
	font-size: 18px;
}
.aaas {
	font-size: 18px;
}
.adasd {
	font-size: 16px;
}
.atas .adasd {
	color: #CCC;
}
.cdd {
	color: #9C0;
	font-size: 24px;
}
.videoplace {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-style: normal;
	color: #F60;
	
}
.hurup{font-size:<?=$isi[1];?>;}
</style>
		
		<header class="header-global"><nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom" id="navbar-main">
			
			</nav></header><main><div class="position-relative">
		<section class="section section-sm pb-200 pt-md-5"><div class="container py-lg-md d-flex"><div class="col px-0"><div class="row"><div class="col-lg-6">
		<?php include "slidershalat.php";?>
		<div id="float-left"> 
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
				$('#float-left').load('ubahlogo.php')
			}, 3000);
		});
				</script>	</div>
			<div id="trik_atas"><?php include "runtema6.php";?></div>
		</div><div class="col-lg-6"><div id="clock"></div><center class="mb-4"><p class="text-white" id="upcomingPrayer"></p><p class="text-white" id="gettingCurrentLocation"></p><div id="loader"><div id="timeDiv"></div></div><div id="upcomingSchedule"></div></center></div></div></div></div><!--SVG separator--></section><!--1st Hero Variation--></div><section class="section section-lg pt-lg-0 mt--200"><div class="container-fluid"><div class="row justify-content-center" id="prayerSchedule"><div class="col-lg-12"><div class="row row-grid">
		<div class="col-lg-2"><div class="card card-lift--hover shadow border-0"><div class="card-body bg-dark"><center><div class="icon icon-shape icon-shape-white rounded-circle mb-2"><i class="ni ni-istanbul"></i></div><h6 class="text-white text-uppercase">Imsak</h6><h1 class="text-white text-uppercase imsak prayer-clock"></h1></center></div></div></div>
		
		<div class="col-lg-2"><div class="card card-lift--hover shadow border-0"><div class="card-body bg-dark"><center><div class="icon icon-shape icon-shape-white rounded-circle mb-2"><i class="ni ni-istanbul"></i></div><h6 class="text-white text-uppercase">Subuh</h6><h1 class="text-white text-uppercase subuh prayer-clock"></h1></center></div></div></div>
		
		<div class="col-lg-2"><div class="card card-lift--hover shadow border-0"><div class="card-body bg-red"><center><div class="icon icon-shape icon-shape-white rounded-circle mb-2"><i class="ni ni-istanbul"></i></div><h6 class="text-white text-uppercase">Dzuhur</h6><h1 class="text-white text-uppercase dzuhur prayer-clock"></h1></center></div></div></div>
		
		
		<div class="col-lg-2"><div class="card card-lift--hover shadow border-0"><div class="card-body bg-red"><center><div class="icon icon-shape icon-shape-white rounded-circle mb-2"><i class="ni ni-istanbul"></i></div><h6 class="text-white text-uppercase">Ashar</h6><h1 class="text-white text-uppercase ashar prayer-clock"></h1></center></div></div></div>
		
		
		<div class="col-lg-2"><div class="card card-lift--hover shadow border-0"><div class="card-body"><center><div class="icon icon-shape icon-shape-success rounded-circle mb-2"><i class="ni ni-istanbul"></i></div><h6 class="text-info text-uppercase">Magrib</h6><h1 class="text-success text-uppercase magrib prayer-clock"></h1></center></div></div></div><div class="col-lg-2"><div class="card card-lift--hover shadow border-0"><div class="card-body"><center><div class="icon icon-shape icon-shape-success rounded-circle mb-2"><i class="ni ni-istanbul"></i></div><h6 class="text-info text-uppercase">Isya</h6><h1 class="text-success text-uppercase isya prayer-clock"></h1></center></div></div></div></div></div></div></div></section></main><script>$('#prayerSchedule').hide(100);
$('#gettingCurrentLocation').html('Menentukan lokasi anda.......' + '<br>'+'Berikan akses lokasi pada browser anda');
navigator.geolocation.getCurrentPosition((loc) => {
    console.log('your location is: [', loc.coords.latitude, ',', loc.coords.longitude, ']');
    $.ajax({
        type: "GET",
        url: 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ loc.coords.latitude+','+ loc.coords.longitude +'&sensor=true&key=AIzaSyAgPpgOeWedR2DXbnJYcg0hI9rFGVJQ5dw',
        cache: false,
        success: function(data){
            $('#upcomingPrayer').html('Waktu shalat mendatang di '+'<h2>'+ data.results[1].address_components[4].long_name+','+ data.results[0].address_components[7].long_name +'</h2>');
            console.log(data.results[0].address_components[1].long_name)
        }
    });

    var duration = function(end){
        var start  = moment();
        // mencari jarak berupa detik
        //jam tujuan dikurangi dengan jam sekarang dengan moment diff dalam bentuk detik
        //console.log(start); //lihat waktu sekarang dari moment.
        return end.diff(start, 'seconds');

    };
    var strToMoment = function(str){
        // mengubah string ke moment object hari ini
        // javascript memang pusing. but its beutiful
        // misal: 18:00 => akan diubah ke moment berdasarkan hari sekarang jam 18:00
        // HH => jam 00 - 24
        // mm => 00 - 59
        return moment(str, 'HH:mm');
    };
    var getJadwal = function(when){
        prayTimes.setMethod('Karachi');
        // mendapatkan moment object pada hari ini
        var toDay = moment();
        if (when == 'tomorrow') {
            // jika besok maka tambah satu hari
            date = toDay.add('1', 'days');
        } else {
            // hari ini
            date = toDay;
        }

        return prayTimes.getTimes(date.toDate(), [loc.coords.latitude, loc.coords.longitude], +7);
    };
    var getUpcomingSchedule = function(){
        var result = null;
        // looping berdasarkan jadwal hari ini
        // tergantung urutan di json dari praytime
        // baru engeh di praytime ada midnight. pantes dari isya ke subuh jedahnya cuma 4 jam
        // ga taunya itu midnight bukan subuh.
        // 2 hari nyari ginian baru ketemu. you make me........!
        // harus di delete lagi json objectnya :(
        // untung ada di google
            // karena urutan dari subuh ke isya jadi gk perlu reorder lagi
            var jedah = getJadwal(); // data json jadwal sholat
            var hapus ="midnight"; //cari yg mau dihapus
            //console.log(jedah);
            delete jedah[hapus]; //hapus midnight biar langsung ke subuh
            // console.log(jedah);

        $.each(jedah,function(key, val) {
            momentVal = strToMoment(val);
            // jika jam sholat belum lewat jam sekarang
        // jadwal dari praytime dibandingin sama jam sekarang lebih dari nol brrti itu jadwal sepanjutnya
            if (momentVal.diff(moment()) > 0) {
                result = strToMoment(val);
                //console.log(result);
                return false;
            }
        });
        //console.log(getUpcomingSchedule);

        // jika hari ini sudah melewati sholat isya
        if (result === null) {
            result = strToMoment(getJadwal('tomorrow').fajr).add(1, 'days');
        }
        return result;
    };

    var duration = function(end){
        var start  = moment();
        // mencari jarak berupa detik
        //jam tujuan dikurangi dengan jam sekarang dengan moment diff dalam bentuk detik
        //console.log(start); //lihat waktu sekarang dari moment.
        return end.diff(start, 'seconds');
    };
    // console.log(getJadwal())
    $(document).ready(function() {
        var getScheduleFor = getJadwal();
    console.log(getScheduleFor);
    // var clock = $('.clock').FlipClock(3600);

        console.log(getScheduleFor.fajr)
        var upcoming = getUpcomingSchedule();

        var theCounter = $('#upcomingSchedule').FlipClock(duration(upcoming), {
            clockFace: 'HourCounter',
            countdown: true,
            autoStart: false,
            //console.log(theCounter)
            callbacks: {
                interval:function(){
                    // mendapatkan jeda waktu ke sholat selanjutnya
                    //console.log(theCounter.getTime().time);
                    /* var time = theCounter.getTime().time;
                     * console.log(time);
                     * Minggu 17:20 @ Lab sisdig nyari selang sekian menit di flipclockjs.
                     * jika waktu solat selanjutnya 1 jam lagi maka beri reminder
                     */
                    //console.log(duration(upcoming));
                    if ( theCounter.getTime().time == 3600 ) {
                        $(".audioSatujam").trigger('load');
                        $(".audioSatujam").trigger('play');
                    }
                    // jika waktu solat selanjutnya 30 menit lagi. maka beri reminder
                    if (theCounter.getTime().time == 1800) {
                        $(".audioTigaPuluh").trigger('load');
                        $(".audioTigaPuluh").trigger('play');
                    }
                    // jika wakto solat sleanjutnya 10 menit lagi, maka beri reminder
                    if (theCounter.getTime().time == 600) {
                        $(".audioSepuluh").trigger('load');
                        $(".audioSepuluh").trigger('play');
                    }

                    // jika wakto solat sleanjutnya lima menit lagi, maka beri reminder
                    if ( theCounter.getTime().time == 300) {
                        $(".audioLima").trigger('load');
                        $(".audioLima").trigger('play');
                        //$(".videokajian").trigger('pause');
                        // 5 minute before adzan change video to slider


                    }
                    // jika wakto solat sleanjutnya 3 menit lagi, maka beri reminder
                    // if ( theCounter.getTime().time == 180) {
                    // 	$(".audioTiga").trigger('load');
                    // 	$(".audioTiga").trigger('play');
                    // }
                    // jika wakto solat sleanjutnya 1 menit lagi, maka beri reminder
                    if ( theCounter.getTime().time == 60) {
                        //swal("Good job!", "Selamat Menggunakan Aplikasi Kami :) ", "success");
                        $(".audioSatuMenit").trigger('load');
                        $(".audioSatuMenit").trigger('play');
                    }

                },
                stop: function(){
                    // jalankan counter dengan jarak
                    // ke waktu sholat selanjutnya
                    // var AdzanAudio = new Audio('adzan.mp3');
                    // AdzanAudio.play();
                    $(".videokajian").trigger('pause');
                    $(".audioAdzan").trigger('load');
                    $(".audioAdzan").trigger('play');
                    // ketika sudah lewat 10 menit dari waktu solat beri reminder
                    setTimeout(function() {
                        // var afterTenMinutue = new Audio('after2.mp3');
                        // afterTenMinutue.play();
                        // naha sih kudu ka ms
                        //1 detik = 1000 milisecond
                        // 1 menit = 60000 ms
                        //10 menit = 600000 ms
                        // 20 menit 1200000
                        //reminder pertama
                        upcoming = getUpcomingSchedule();
                        theCounter.setTime(duration(upcoming));
                        theCounter.start();
                        },10000);
                    setTimeout(function() {
                        // var afterTwentyMinute = new Audio('after20.mp3');
                        // afterTwentyMinute.play();
                        // $(".videokajian").trigger('play');

                        //20 minute after adzan change slider to video kajian
                        //reminder lagi. gera solat woy
                    },10000);
                }
            }
        });
        console.log(getJadwal().isha);
        $('#jsonData').html(JSON.stringify(getJadwal()));
        theCounter.start();
        $('#timeDiv').show("fast");
        $('.subuh').html(getScheduleFor.fajr);
        $('.fajar').html(getScheduleFor.sunrise);
        $('.imsak').html(getScheduleFor.imsak);
        $('.dzuhur').html(getScheduleFor.dhuhr);
        $('.ashar').html(getScheduleFor.asr);
        $('.magrib').html(getScheduleFor.maghrib);
        $('.isya').html(getScheduleFor.isha);
        $('#prayerSchedule').show("fast");
        $('#gettingCurrentLocation').hide();
        $('#loader').hide();
        // var clock = $('.clock').FlipClock({});
    });
});

$('#clock').FlipClock({
    clockFace: 'TwentyFourHourClock'
});


var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
var myDays = ['Minggu','Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
month = months[month];
var thisDay = date.getDay();
thisDay = myDays[thisDay];
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
//console.log(month);
$('.tanggal').html(thisDay +',' + ' ' + day + ' ' + month + ' ' + year);</script>
	

	</body></html>