<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="albabakso.ico">
	<title>Web Makanan Indonesia</title>
	<embed src="TrobleMaker.mp3" width ="0px" height ="0px" loop="true">
	<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url(green-bamboopowerpoint-desain.jpg);
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 250px;
				background-image: url(selvenia_resto.jpg);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 240px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #F08080;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 220px;
				height: 220px;
				padding: 3px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 70%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Indonesia Punya Makanan</h1>
				<nav>
					<ul>
						<li><a href="menurestoran.html" class="current">Beranda</a></li>
						<li><a href="pesan.html" >Pesan</a></li>
						<li><a href="login.html">Login</a></li>
											
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
					
					<?php
					//mulai proses tambah data

					//cek dahulu, jika tombol tambah di klik
					if(isset($_POST['tambah'])){
					 
					 //inlcude atau memasukkan file koneksi ke database
					 include('koneksi.php');
					 
					 //jika tombol tambah benar di klik maka lanjut prosesnya
					 $No  = $_POST['No']; //membuat variabel $nis dan datanya dari inputan NIS
					 $Nama_Pegawai  = $_POST['Nama_Pegawai']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
					 $Tgl_Laporan  = $_POST['Tgl_Laporan']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
					 $Jumlah = $_POST['Jumlah']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $Lampiran = $_POST['Lampiran']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 
					 
					 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
					 $input = mysql_query("INSERT INTO dataproyek VALUES('$No', '$Nama_Pegawai', '$Tgl_Laporan', '$Jumlah','$Lampiran')") or die(mysql_error());
					 
					 //jika query input sukses
					 if($input){
					  
					  echo 'Data laporan berhasil di tambahkan! Klik Info Pemesanan untuk melihat hasil pemesanan ';  //Pesan jika proses tambah sukses
					  //echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
					  
					 }else{
					  
					  echo 'Gagal menambahkan data laporan! ';  //Pesan jika proses tambah gagal
					  //echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
					  
					 }

					//}else{ //jika tidak terdeteksi tombol tambah di klik

					 //redirect atau dikembalikan ke halaman tambah
					 //echo '<script>window.history.back()</script>';

					}
					?>
				
				</article>    
			</section>
			
			<aside>
				<section class="popular-recipes">
					<h2>Menu Hari ini</h2>
					<a href="food.html">Food</a>
					<a href="drink.html">Drink</a>
					<a href="dessert.html">Dessert</a>
					</section>
				<section class="contact-details">
					<h2>Kontak</h2>
					<p>Selvenia Resto<br />
						081320221567
				</section>
			</aside>
			<footer>
				@Selvenia Resto
			</footer>
		</div><!-- .wrapper -->
	</body>
</html> 

