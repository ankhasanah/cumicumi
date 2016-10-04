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
				
					<hgroup>
					<h3> Laporan</h3>
					 <form action="tambah-proses.php" method="post">
					 <div class="col-md-6">
						<table class="table table-condensed">
						<tr>
							<td>No </td>
							<td>:</td>
							<td><input type="text" name="no"  size="35" required></td>
					  
					   </tr>
					   
					   <tr>
							<td>Nama Pegawai</td>
							<td>:</td>
							<td><input type="text" name="no_hp"  size="35" required></td>
					   </tr>
					   
					   <td>Tanggal</td>
							<td>:</td>
							<td>
								<select name="Tanggal" required>
									<option value="">Tanggal</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>	
								</select>
								<select name="Bulan" required>
									<option value="">Bulan</option>
									<option value="Januari">Januari</option>
									<option value="Februari">Februari</option>
									<option value="April">April</option>
									<option value="Mei">Mei</option>
									<option value="Juni">Juni</option>
									<option value="Juli">Juli</option>
									<option value="Agustus">Agustus</option>
									<option value="September">September</option>
									<option value="Oktober">Oktober</option>
									<option value="November">November</option>
									<option value="Desember">Desember</option>
								</select>
								<select name="Tahun" required>
									<option value="">Tahun</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
								</select>
							</td>
					   </tr>
					   
					   					   
					   <tr>
							<td>Lampiran</td>
							<td>:</td>
							<td><input type="text" name="nama_pemesan" size="35" required></td>
					   </tr>
					   
					   					   
					   <tr>
						<td>&nbsp;</td>
						<td></td>
						<td><input type="submit" name="tambah" value="Tambah"></td>
					   </tr>
					  </table>
					  </div>
					 </form>
					</hgroup>
					 
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

