<html>
	<head>
		<title>Web Makanan Indonesia</title>
		<embed src="TrobleMaker.mp3" width ="0px" height ="0px" loop="true">
	<style type="text/css">
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
				background-image: url(empat.jpg);}
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
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
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
				font-size: 90%;
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
						<li><a href="menurestoran.html">Beranda</a></li>
						<li><a href="pesan.html" class="current">Pesan</a></li>
						<li><a href="login.html">Login</a></li>
											
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article>
					<hgroup>
						
					</hgroup>
					
					<?php
					//mulai proses tambah data

					//cek dahulu, jika tombol tambah di klik
					if(isset($_POST['tambah'])){
					 
					 //inlcude atau memasukkan file koneksi ke database
					 include('koneksi.php');
					 
					 //jika tombol tambah benar di klik maka lanjut prosesnya
					 $kd_lapangan  = $_POST['kd_lapangan']; //membuat variabel $nis dan datanya dari inputan NIS
					 $tanggal  = $_POST['tanggal']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
					 $bulan  = $_POST['bulan']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
					 $tahun = $_POST['tahun']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $wk_mulai = $_POST['wk_mulai']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $wk_selesai= $_POST['wk_selesai']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $no_hp= $_POST['no_hp']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $nama_pemesan= $_POST['nama_pemesan']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $nama_tim= $_POST['nama_tim']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 $email= $_POST['email']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
					 
					 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
					 $input = mysql_query("INSERT INTO dataproyek VALUES('$kd_lapangan', '$tanggal', '$bulan', '$tahun','$wk_mulai','$wk_selesai','$no_hp','$nama_pemesan','$nama_tim','$email')") or die(mysql_error());
					 
					 //jika query input sukses
					 if($input){
					  
					  echo 'Data pemesanan berhasil di tambahkan! Klik Info Pemesanan untuk melihat hasil pemesanan ';  //Pesan jika proses tambah sukses
					  //echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
					  
					 }else{
					  
					  echo 'Gagal menambahkan data pemesanan! ';  //Pesan jika proses tambah gagal
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
					<h2>Kontak Kami</h2>
					<p>SMS 0888 0210 8930 </p>
					<p>PIN 3155A08B </p>
				</section>
				<section class="contact-details">
					<h2>Cara Pesan Lapangan</h2>
					<h7>Untuk melakukan pemesanan tinggal pilih menu Pendaftarn dibagian navigasi atas, setelah melakukan 		pendaftaran kalian bisa lihat hasilnya di menu Info Pemesanan dan pembayaran dilakukan di bagian pengelola sebelum Tim futsal akan main</h7>
				</section>
			</aside>
			<footer>
				Hak cipta 2016 oleh Dani Purnama & Danil Kardia. All Right Reserved.
			</footer>
		</div><!-- .wrapper -->
</body>
</html>