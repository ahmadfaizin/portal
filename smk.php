<?php

include "koneksi.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beranda</title>
<link rel="shortcut icon" href="gambar/icon.jpg">	
<style>
	body {
		margin: 0 auto;
		font-family: Arial;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.header {
		max-width: 100%;
		height: auto;
		margin-bottom: -4px;
	}
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background: #33ccff;
	}
	li {
		float: left;
	}
	li a {
		display: block;
		padding: 14px 16px;
		text-align: center;
		text-decoration: none;
		color: #fff;
		-webkit-transition: 0.5s ease-in-out;
				transition: 0.5s ease-in-out;
	}
	li a:hover {
		background: #fff;
		color: #33ccff;
	}
	.right {
		float: right;
	}
	#slider {
		width: 100%;
		height: 500px;
		overflow: hidden;
	}
	#slide-holder {
		width: 100%;
		height: 500px;
		position: relative;
		left: 0;
		-webkit-animation: scroll 15s infinite;
				animation: scroll 15s infinite;
	}
	.slide {
		width: 33.3333%;
		height: 500px;
		position: relative;
		float: left;
	}
	@-webkit-keyframes scroll {
		0% {
			-webkit-transform: translateX(0);
					transform: translateX(0);
		}
		33% {
			-webkit-transform: translateX(-400px);
					transform: translateX(-400px);
		}
		66% {
			-webkit-transform: translateX(-800px);
					transform: translateX(-800px);
		}
		100% {
			-webkit-transform: translateX(0);
					transform: translateX(0);
		}
	}
	@keyframes scroll{
		0% {
			-webkit-transform: translateX(0);
					transform: translateX(0);
		}
		33% {
			-webkit-transform: translateX(-400px);
					transform: translateX(-400px);
		}
		66% {
			-webkit-transform: translateX(-800px);
					transform: translateX(-800px);
		}
		100% {
			-webkit-transform: translateX(0);
					transform: translateX(0);
		}
	}
	#slider {
		margin: 0 auto;
	}
	.slide:nth-child(1){
		background: #c69;
	}
	.slide:nth-child(2){
		background: wheat;
	}
	.slide:nth-child(3){
		background: #eee;
	}

	.tentang {
		margin-left: 40px;
		float: left;
		width: 45%;
		background: #f2f2f2;
		text-align: center;
		border: 1px solid #f8f8f8;
		border-radius: 10px;
		-webkit-box-shadow: 3px 3px 3px 3px rgba(1,1,1,0.25);
		-moz-box-shadow: 3px 3px 3px 3px rgba(1,1,1,0.25);
			box-shadow: 3px 3px 3px 3px rgba(1,1,1,0.25);

	} 
	.imgtentang:hover {
		opacity: 0.5;
	}
	.txt:hover {
		color: #33ccff;
	}
	.teks {
		margin-left: 10px;
		margin-right: 10px;
		text-align: justify;
		font-size: 14px;
		font-family: Arial;
	}
	.responsive {
		max-width: 100%;
		height: auto;
	}
	.kotak {
		display: block;
		padding: 8px 12px;
		background: #33ccff;
		color: white;
		border-left: 5px solid #000;
		text-decoration: none;
		text-align: left;
		margin: 20px;
		width: 25%;
		-webkit-transition: 0.5s ease-in-out;
				transition: 0.5s ease-in-out;
		-webkit-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
		-moz-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
			box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);

	}
	.kotak:hover{
		background: #000;
		border-left: 5px solid #33ccff;
		color: #fff;
	}
	.kotak2 {
		padding: 8px 12px;
		background: #33ccff;
		color: white;
		border-left: 5px solid #000;
		text-decoration: none;
		text-align: left;
		margin: 20px;
		width: 10%;
		-webkit-transition: 0.5s ease-in-out;
				transition: 0.5s ease-in-out;
		-webkit-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
		-moz-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
			box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);

	}
	.kotak2:hover{
		background: #000;
		border-left: 5px solid #33ccff;
		color: #fff;
	}
	.post {
		display: block;
		margin: 30px;
		float: left;
		width: 95%;
		border: 1px solid #fbfbfb;
		background: #f2f2f2;
		border-radius: 5px;
		-webkit-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
		-moz-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
			box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);

	}
	.post-info {
		margin-left: 10px;
		margin-top: 30px;
		margin-right: 10px;
		font-size: 10px;
		float: right;
	}
	.judul {
		margin-left: 20px;
	}
	.judul:hover {
		color: #33ccff;
	}
	.imgpost {
		float: left;
		max-width: 100%;
		height: auto;
		margin: 10px;
		opacity: 0.6;
	}
	.imgpost:hover {
		opacity: 1;
	}
	.sponsor1 {
		float: left;
		width: 45%:;
		margin-left: 20px;
	}
	.imgsponsor {
		opacity: 0.5;
	}
	.imgsponsor:hover {
		opacity: 1;
	}
	.sponsor1 a {
		margin: 20px;
	}
	.sponsor2 {
		width: 45%;
		float: right;
		text-align: center;
		background: #f2f2f2;
		margin-right: 40px;
		border-radius: 5px;
		-webkit-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
		-moz-box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
			box-shadow: 3px 3px 3px 0px rgba(1,1,1,0.25);
	}
	.sponsor2 h3:hover {
		color: #33ccff;
	}

	.footer {
		clear: both;
		background: #000;
		color: #fff;
		text-align: center;
		padding: 20px 22px;
		bottom: 0;

	}


/* Responsive Design */

	@media screen and (max-width: 980px){
		body {
			margin: 0 auto;
			background-image: none;
		}
		.header {
			width: 100%;
		}
		ul {
			width: 100%;
			margin: 0 auto;
		}
		li {
			float: none;
		}
		li a{
			width: 100%;
			font-size: 14px;
		}
		.tentang {
			width: 100%;
			float: none;
			margin: 0 auto;
		}
		.teks {
			font-size: 14px;
		}
		.kotak {
			width: 90%;
			margin: 0 auto;
		}
		.kotak2 {
			width: 100%;
			display: block;
			margin: 0 auto;
		}
		.post {
			width: 100%;
			margin: 0 auto;
			text-align: center;
		}
		.sponsor1 {
			float: none;
			width: 100%;
			margin: 0 auto;
			text-align: center;
		}
		.sponsor2 {
			width: 100%;
			float: none;
			text-align: center;
		}
		.footer {
			width: 100%;
			margin: 0 auto;
			font-size: 12px;
		}
		
	}

	@media screen and (max-width: 680px){
		body {
			margin: 0 auto;
			background-image: none;
		}
		.header {
			width: 100%;
		}
		ul {
			width: 100%;
			margin: 0 auto;
		}
		li {
			float: none;
		}
		li a{
			width: 100%;
			font-size: 14px;
		}
		#slider {
			display: none;
		}
		#slide-holder {
			display: none;
		}
		.slide {
			display: none;
		}
		.right {
			float: none;
			width: 100%;
		}
		.tentang {
			margin: 0 auto;
			width: 90%;
			font-size: 12px;
			text-align: center;
			padding: 14px 16px;
		}
		.teks {
			font-size: 12px;
		}
		.kotak {
			width: 80%;
			margin: 0 auto
		}
		.kotak2 {
			width: 100%;
			display: block;
			margin: 0 auto;
		}
		.post {
			width: 100%;
			margin: 0 auto;
			text-align: center;
		}
		.sponsor1 {
			float: none;
			width: 100%;
			margin: 0 auto;
			text-align: center;
		}
		.sponsor2 {
			width: 100%;
			float: none;
			text-align: center;
		}
		.footer {
			width: 90%;
			margin: 0 auto;
			font-size: 12px;
		}
		
	}
</style>
</head>
<body>
<div class="header">
	<a href="#"><img src="gambar/logo2.jpg"></a>
</div>
<ul>
	<li><a href="index.php">Beranda</a></li>
	<li><a href="tentang.php">Tentang</a></li>
	<li><a href="paket.php">Paket Tubing</a></li>
	<li><a href="berita.php">Berita</a></li>
	<li><a href="kontak.php">Kontak</a></li>
	<li class="right"><a href="login.php">Login</a></li>
</ul> 
<center><div id="slider">
	<div id="slide-holder">
		<img class="slide" src="gambar/gono4.jpg">
		<img class="slide" src="gambar/gono2.jpg">
		<img class="slide" src="gambar/gono3.jpg">
	</div>
</div>
</center>
<div class="tentang">
	<h3 class="txt">Tentang</h3>
	<a href="tentang.php"><img class="responsive imgtentang" src="gambar/logo2.jpg"></a>
<p class="teks">Xgono Tubing  atau Tubing di Kali Gono merupakan salah satu destinasi wisata air terbaru dan menantang di Kota Magelang.
Xgono Tubing  berdiri di 25 Januari 2017. Dikelola secara mandiri oleh para pemuda dari Desa Treko, Kecamatan Mungkid, Kabupaten Magelang. Lokasi start tempat memulai petualangan jeram ini berada di Dusun Treko 5, Desa Treko sedangkan Finishnya berada di Dusun Treko 3 .
</p>
<a class="kotak" href="tentang.php">Read More</a>
</div>

<div class="tentang">
	<h3 class="txt">Paket Tubing</h3>
	<a href="paket.php"><img class="responsive imgtentang" src="logo/tubing.png"></a>
<p class="teks">Ingin Berkunjung ke X-Gono Tubing ? Kapanpun dan dimanapun bisa sekarang, Tinggal satu klik anda bisa berkunjung di X-Gono Tubing. Kalau gak sekarang kapan lagi, Sebelum ditutup tempatnya. Buruan Pesan sekarang sebelum kehabisan.
</p>
<br>
<a class="kotak" href="paket.php">Pesan Sekarang</a>
</div>

<div class="post">
<div class="post-info">Di Posting oleh Fulan<br> Rabu, 27 September 2017 </div>
<h3 class="judul">Berselancar di Tubing</h3>
<a href="berita.php"><img class="imgpost" src="gambar/post1.jpg" width="200" height="100"></a>
<p class="teks">Xgono Tubing  menggunakan Sungai Gono sebagai arena tempat petualangan wisata air tubing merupakan salah satu sungai di Kabupaten Magelang yang aliran berhulu di Gunung Merbabu. Aliran airnya sendiri melewati beberapa wilayah seperti Kec. Candimulyo dan Kec. Mungkid dan berakhir menyatu dengan aliran kali Elo. Mata airnya sendiri cukup terjaga belum tercemar dengan limbah - limbah pabrik karena sumber mata air nya berasal dari aliran - aliran sungai kecil maupun mata air murni yang muncul di sepanjang tebing kali Gono.

Sungai Gono  sendiri mempunyai karakter tenang hingga sedang sehingga pastinya aman untuk dilewati. Rute yang dilaluipun cukup bervariasi dan tentunya menantang. Terdapat beberapa spot jeram yang tentunya dapat memacu adrenalin dan menantang untuk dijajal. Rute pengarungan tubing ini sepanjang sepanjang 1 sampai dengan 2 kilometer dapat ditempuh dalam waktu 1 jam 30 Menit hingga 2 jam dengan kedalaman air bervariasi antara 0.5 - 3 meter.
</p>	
<br>
<br>
<a class="kotak2" href="berita.php">Read More</a>
</div>

<div class="post">
<div class="post-info">Di Posting oleh Fulan<br> Rabu, 27 September 2017 </div>
<h3 class="judul">Jarak yang Jauh Membuat Bersemangat</h3>
<a href="berita.php"><img class="imgpost" src="gambar/post2.jpg" width="200" height="100"></a>
<p class="teks">Xgono Tubing  menggunakan Sungai Gono sebagai arena tempat petualangan wisata air tubing merupakan salah satu sungai di Kabupaten Magelang yang aliran berhulu di Gunung Merbabu. Aliran airnya sendiri melewati beberapa wilayah seperti Kec. Candimulyo dan Kec. Mungkid dan berakhir menyatu dengan aliran kali Elo. Mata airnya sendiri cukup terjaga belum tercemar dengan limbah - limbah pabrik karena sumber mata air nya berasal dari aliran - aliran sungai kecil maupun mata air murni yang muncul di sepanjang tebing kali Gono.

Sungai Gono  sendiri mempunyai karakter tenang hingga sedang sehingga pastinya aman untuk dilewati. Rute yang dilaluipun cukup bervariasi dan tentunya menantang. Terdapat beberapa spot jeram yang tentunya dapat memacu adrenalin dan menantang untuk dijajal. Rute pengarungan tubing ini sepanjang sepanjang 1 sampai dengan 2 kilometer dapat ditempuh dalam waktu 1 jam 30 Menit hingga 2 jam dengan kedalaman air bervariasi antara 0.5 - 3 meter.
</p>	
<br>
<br>
<a class="kotak2" href="berita.php">Read More</a>
</div>

<div class="post">
<div class="post-info">Di Posting oleh Fulan<br> Rabu, 27 September 2017 </div>
<h3 class="judul">Mainan Air Merupakan Hobiku</h3>
<a href="berita.php"><img class="imgpost" src="gambar/post3.jpg" width="200" height="100"></a>
<p class="teks">Xgono Tubing  menggunakan Sungai Gono sebagai arena tempat petualangan wisata air tubing merupakan salah satu sungai di Kabupaten Magelang yang aliran berhulu di Gunung Merbabu. Aliran airnya sendiri melewati beberapa wilayah seperti Kec. Candimulyo dan Kec. Mungkid dan berakhir menyatu dengan aliran kali Elo. Mata airnya sendiri cukup terjaga belum tercemar dengan limbah - limbah pabrik karena sumber mata air nya berasal dari aliran - aliran sungai kecil maupun mata air murni yang muncul di sepanjang tebing kali Gono.

Sungai Gono  sendiri mempunyai karakter tenang hingga sedang sehingga pastinya aman untuk dilewati. Rute yang dilaluipun cukup bervariasi dan tentunya menantang. Terdapat beberapa spot jeram yang tentunya dapat memacu adrenalin dan menantang untuk dijajal. Rute pengarungan tubing ini sepanjang sepanjang 1 sampai dengan 2 kilometer dapat ditempuh dalam waktu 1 jam 30 Menit hingga 2 jam dengan kedalaman air bervariasi antara 0.5 - 3 meter.
</p>	
<br>
<br>
<a class="kotak2" href="berita.php">Read More</a>
</div>

<div class="post">
<div class="post-info">Di Posting oleh Fulan<br> Rabu, 27 September 2017 </div>
<h3 class="judul">X-Gono Tubing Treko Mungkid</h3>
<a href="#"><img class="imgpost" src="gambar/post4.jpg" width="200" height="100"></a>
<p class="teks">Xgono Tubing  menggunakan Sungai Gono sebagai arena tempat petualangan wisata air tubing merupakan salah satu sungai di Kabupaten Magelang yang aliran berhulu di Gunung Merbabu. Aliran airnya sendiri melewati beberapa wilayah seperti Kec. Candimulyo dan Kec. Mungkid dan berakhir menyatu dengan aliran kali Elo. Mata airnya sendiri cukup terjaga belum tercemar dengan limbah - limbah pabrik karena sumber mata air nya berasal dari aliran - aliran sungai kecil maupun mata air murni yang muncul di sepanjang tebing kali Gono.

Sungai Gono  sendiri mempunyai karakter tenang hingga sedang sehingga pastinya aman untuk dilewati. Rute yang dilaluipun cukup bervariasi dan tentunya menantang. Terdapat beberapa spot jeram yang tentunya dapat memacu adrenalin dan menantang untuk dijajal. Rute pengarungan tubing ini sepanjang sepanjang 1 sampai dengan 2 kilometer dapat ditempuh dalam waktu 1 jam 30 Menit hingga 2 jam dengan kedalaman air bervariasi antara 0.5 - 3 meter.
</p>	
<a class="kotak2" href="berita.php">Read More</a>
</div>


<div class="sponsor1">
<h3 >Supported By :</h3>
	<a class="imgsponsor" href="dinas.php" target="_blank"><img src="logo/magelang.png" width="100" height="100"></a>
	<a class="imgsponsor" href="magelang.php" target="_blank"><img src="logo/dinas.png" width="100" height="100"></a>
</div>

<div class="sponsor2">
	<h3>Informasi</h3>
	<div class="teks">
		Xgono Tubing<br>
		Alamat : Jl. Candimulyo Km 02, Desa Treko, Kec. Mungkid, Kab. Magelang.<br>
		Jam Buka : Senin - Minggu (Pukul 07:00 WIB - 17:00 WIB)<br>
		No Hp / WhatsApp :  doko 0857_7270_1907 / eni 0857_9997_2448<br>
		Email : kaligonoadventure@gmail.com<br>
		Instagram : @xgonotubingadventure<br>
		Facebook : facebook.com/xgono tubing treko/<br>
		<br>

	</div>
</div>

<div class="footer">
	Copyright &copy; LKS Kabupaten Magelang 2017  
</div>
</body>
</html>
