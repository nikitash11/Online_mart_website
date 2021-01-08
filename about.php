
<?php
	include 'header.php';
?>
<style>
	*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.team-section{
	overflow: hidden;
	text-align: center;
	padding: 60px;	
	background: linear-gradient(to bottom, #0099cc 0%, #cc6600 100%);
}
.team-section h1{
	text-transform: uppercase;
	margin-bottom: 60px;
	color: white;
	font-size: 40px;
}
.border{
	display:block;
	margin: auto;
	width:160px;
	height:3px;
	background:#3498db;
	margin-bottom: 20px;
}
.ps 
{
	margin-bottom: 40px;
}
.ps a{
	display: inline-block;
	margin: 0 30px;
	width: 140px;
	height: 180px;
	overflow: hidden;
	border-radius: 80%;
}

.ps a img
{
	width: 110%;
	filter: grayscale(100%);
	transition: 0.7s all;
}

.ps a:hover > img
{
	filter: none;
}

.section{
	width: 600px;
	margin: auto;
	font-size: 20px;
	color: white;
	text-align: justify;
	height: 0;
	overflow: hidden;	
}
.section:target{
	height: auto;
}
.name{
	display: block;
	margin-bottom: 30px;
	text-transform: uppercase;
	text-align:center;
	font-size: 22px;
}

.work
{
	display: block;
	text-align: center;
	font-size: 18px;

}



/* images and text*/

.column {
  float: left;
  width: 50%;
  padding: 10px;
  background-color: #d3d3d3;
  margin-bottom: 20px;
}

.column p
{
	font-size: 20px;
	font-family: Times New Roman;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
<body>
	<div class="grid-container" style="margin-bottom: 10%; margin-top: 30px;">
		<h1 style="border: 2px solid black; color: black; text-align: center; font-weight: bold; text-transform: uppercase; height: 65px; padding-top: 10px;">About Us</h1>
		<div class="row">
			<!-- column 1-->
	  		<div class="column">
	  			<img src="about_img/team2.jpg" style="width: 100%; height: 500px;">
	  		</div>

	  		<!-- column 2-->
		  	<div class="column">
		    	<p>We are group of individual traders based in Cleckhuddesfax who decided to establish an e-commerce platform that would sell locally produced goods and make it available for the local residents who cannot buy at the opening hour so we have decided to extend the opening hour time for the locals and to do so we decided to develop a prototype E-commerce website.<br><br>

				A small area of one of the shop where the order could be collected by the residents at three time slot according to their choice which must be after 24	hour after the order. Our aim is to help the local residents since they could visit the site through their phone or laptops which makes it convenient for the users to place order even if they are at work.</p> <br>

				<p>Our cutomers can get high quality locally produced goods all at one specific location whether it be	bakery item, vegetable etc. which will be available for the residents in opening hours as well as extended opening hours and collect their goods at their preferred time slot. We have 5 traders which are fishmonger, butcher, greengrocer, bakery and delicatessen they specialise in locally sourced high quality goods which are growing in popularity but cannot be purchased through local supermarkets.</p>


		  	</div>
		</div>
	</div>

	<div class="team-section">
		<h1>Meet the Crew</h1>
		<span class="border"></span>
		<div class="ps">
			
			<a href="#p1"><img src="about_img/akhil.jpg" alt=""> </a>
			<a href="#p2"><img src="about_img/gaurab2.jpg" alt=""> </a>
			<a href="#p3"><img src="about_img/rij3.jpg" alt=""> </a>
			<a href="#p4"><img src="about_img/nikita.jpg" alt=""> </a>
			<a href="#p5"><img src="about_img/sujal2.jpg" alt=""> </a>
			<a href="#p6"><img src="about_img/samrat.jpg" alt=""> </a>
		</div>

		<div class="section" id ="p1">
			<span class="name">Akhil khanal </span>
			<span class="border"> </span>
			<p>I love every pixel part of design and constantly pushing myself in new ways to design and improve my craft. I also have a serious addiction to Netflix, all Marvel movies, and everything John Mayer.</p>
		</div>

		<div class="section" id ="p2">
			<span class="name">Gaurav Adhikari </span>
			<span class="border"> </span>
			<p>I am a web and software developer with a passion for taking seemingly complex problems and forming unique solutions intended to serve and delight the end user.</p>
		</div>

		<div class="section" id ="p3">
			<span class="name">Rijen Maharjan </span>
			<span class="border"> </span>
			<p>My passion for graphic design has lead me to specialise in creating highly advanced, experimental works with a keen eye, steady hand and endless imagination.
			</p>
		</div>

		<div class="section" id ="p4">
			<span class="name"> Nikita Shrestha </span>
			<span class="border"> </span>
			<p>I approach all projects with enthusiasm and a strong desire to create fresh, insightful and relevant ideas to how the frontend design should work with a backend custom content management system. </p>
		</div>

		<div class="section" id ="p5">
			<span class="name">Sujal Shrestha </span>
			<span class="border"></span>
			<p>I am always on the lookout for ways to improve performance and make a better experience for the user while keeping the project on target and meeting our clients’ expectations.</p>
		</div>

		<div class="section" id ="p6">
			<span class="name">Samrat Chand </span>
			<span class="border"> </span>
			<p>I am a designer and digital illustrator who loves creating things that don't yet exist and making them as beautiful as they are functional. For fun, I likes live music, comic books, and cooking.</p>
		</div>
	</div>
</body>
<?php include 'footer.php'; ?>
