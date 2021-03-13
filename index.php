<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">
    <meta name="supported-color-schemes" content="dark light">
    <meta name="color-scheme" content="dark light">
    <meta name="theme-color" content="">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link rel="stylesheet" type="text/css" href="assets/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/assets/owl.theme.default.min.css">
    <title>Isna Prasetyo</title>

	<link rel="manifest" href="/manifest-light.webmanifest" data-href-light="/manifest-light.webmanifest" data-href-dark="/manifest-dark.webmanifest">      
    <link rel="icon" href="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Flight.png" data-href-light="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Flight.png" data-href-dark="https://cdn.glitch.com/791b2241-459b-4a2e-8cca-c0fdc21f0487%2Fdark.png" sizes="144x144">
    <script type="module" src="https://googlechromelabs.github.io/dark-mode-toggle/src/dark-mode-toggle.mjs"></script> 
    <script>
	if (!window.matchMedia('(prefers-color-scheme)').matches) {
		document.documentElement.style.display = 'none';
		document.head.insertAdjacentHTML(
		    'beforeend',
		    '<link rel="stylesheet" href="light.css" onload="document.documentElement.style.display = ``">'
		);
	}
	const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
	darkModeMediaQuery.addListener((e) => {
		const darkModeOn = e.matches;
		console.log(`Dark mode is ${darkModeOn ? '🌒 on' : '☀️ off'}.`);
	});
    </script> 
	<style>
		fieldset {
		  background-color: gainsboro;
		}
		@media (prefers-color-scheme: dark) {
		  fieldset {
		    background-color: darkslategray;
		  }
		}
	</style>

	<link rel="stylesheet" href="assets/css/dark.css" media="(prefers-color-scheme: dark)">
	<link rel="stylesheet" href="assets/css/light.css" media="(prefers-color-scheme: light)">
	<link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body style="font-family: 'Spartan', sans-serif; " class="scrollbar">
	<nav class="navbar navbar-expand navbar-light shadow-0 fixed-top " id="nav">
	  <div class="container">
	    <div class="collapse navbar-collapse">
			<ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link active-link active fw-bold p-0 m-2" aria-current="page" href="#intro">Intro</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link active-link fw-bold p-0 m-2" href="#projects">Projects</a>
				</li>
			</ul>
	    	<ul class="nav navbar-nav mx-auto">
	    		<li class="nav-item"><dark-mode-toggle appearance="toggle"></dark-mode-toggle></li>
	    	</ul>
	    	<ul class="nav navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active-link fw-bold p-0 m-2" href="#about">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active-link fw-bold p-0 m-2" href="#contact">Contact</a>
		        </li>
	    	</ul>
	    </div>
	  </div>
	</nav>
	<div class="alert shadow alert-dismissible fade show" role="alert">
	  <div class="text-center">
	  	<div class="triangle"></div>
	  	<span>Click to switch thme</span>
	  </div>
	  <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
	</div>
	<section id="intro" style="height: 100vh; padding-top: 10em; padding-bottom: 10em;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 mb-4 mb-lg-0 text-lg-start text-center">
					<h1 class="mb-3 fw-bold color-1">Front-End Web Developer.</h1>
					<figure>
						<blockquote class="blockquote">
							<p class="fs-6">A front-end developer architects and develops websites and applications using web technologies (i.e., HTML, CSS, DOM, and JavaScript), which run on the Open Web Platform or act as compilation input for non-web platform environments</p>
						</blockquote>
						<figcaption class="blockquote-footer">
						 <cite title="Source Title">frontendmasters.com</cite>
						</figcaption>
					</figure>					
					<a href="#contact" class="btn m-0 text-capitalize text-white" style="border: 2px solid #565472; background-color: #565472">I need a website &nbsp;&nbsp; <i class="fa fa-chevron-right"></i></a>
					<a href="#contact" class="btn m-0 ms-md-3 text-capitalize fw-bold color-1" style="border: 2px solid #565472; ">I'm looking for hire &nbsp;&nbsp; <i class="fa fa-chevron-right"></i></a>
				</div>
				<div class="col-lg-6 col-12">
					<img class="img-fluid" src="assets/img/undraw_quitting_time_dm8t.svg">
				</div>
			</div>
			<a href="#projects"><div class="icon-scroll"></div></a>
		</div>
	</section>
	<section id="projects" style="height: 100vh; padding-top: 10em; padding-bottom: 10em;">
		<div class="container">
			<div class="text-center mb-4" style="background-image: url('assets/img/undraw_working_from_anywhere_ub67.svg'); background-repeat: no-repeat; background-size: 300px">
				<h1 class="fw-bold color-1">Our Projects</h1>
				<p>We made some awesome websites, interest? check the <a class="fw-bold text-reset color-1" href="#contact">Contact</a> page.</p>
			</div>
			<div class="carousel-wrap">
			  <div class="owl-carousel owl-theme">
			    <div class="item my-4">
					<div class="card card-hover">
						<div class="card-body">
							<a href="http://www.smkn1mandiraja.unaux.com" target="http://www.smkn1mandiraja.unaux.com">
							<div class="figure rounded" style="background-image: url('assets/img/1.png'); background-repeat: no-repeat; background-position: top; background-size: cover; width: 100%; height: 220px"></div>
							</a>
						</div>
					</div>
			    </div>
			    <div class="item my-4">
					<div class="card card-hover">
						<div class="card-body">
							<a href="http://www.sikos.unaux.com" target="http://www.sikos.unaux.com">
							<div class="figure rounded" style="background-image: url('assets/img/2.png'); background-repeat: no-repeat; background-position: top; background-size: cover; width: 100%; height: 220px"></div>
							</a>
						</div>
					</div>
			    </div>
			    <div class="item my-4">
					<div class="card card-hover">
						<div class="card-body">
							<a href="http://www.rania.unaux.com" target="http://www.rania.unaux.com">
							<div class="figure rounded" style="background-image: url('assets/img/3.png'); background-repeat: no-repeat; background-position: top; background-size: cover; width: 100%; height: 220px"></div>
							</a>
						</div>
					</div>
			    </div>
			    <div class="item my-4">
					<div class="card card-hover">
						<div class="card-body">
							<a href="http://www.tabungan.unaux.com" target="http://www.tabungan.unaux.com">
							<div class="figure rounded" style="background-image: url('assets/img/4.png'); background-repeat: no-repeat; background-position: top; background-size: cover; width: 100%; height: 220px"></div>
							</a>
						</div>
					</div>
			    </div>
			    <div class="item my-4">
					<div class="card card-hover">
						<div class="card-body">
							<a href="http://www.mmkproject.unaux.com" target="http://www.mmkproject.unaux.com">
							<div class="figure rounded" style="background-image: url('assets/img/5.png'); background-repeat: no-repeat; background-position: top; background-size: cover; width: 100%; height: 220px"></div>
							</a>
						</div>
					</div>
			    </div>
			    <div class="item my-4">
					<div class="card card-hover">
						<div class="card-body">
							<div class="figure rounded" style="background-image: url('assets/img/6.png'); background-repeat: no-repeat; background-position: top; background-size: cover; width: 100%; height: 220px"></div>
						</div>
					</div>
			    </div>
			  </div>
			</div>
		</div>
	</section>
	<section id="about" style="height: 100vh; padding-top: 10em; padding-bottom: 10em;">
		<div class="container text-lg-start text-center">
			<div class="row">
				<div class="col-lg-6 col-12 mb-5 mb-lg-0">
					<img class="img-fluid illustration" src="assets/img/undraw_absorbed_in_xahs.svg">
				</div>
				<div class="col-lg-6 col-12">
					<h1 class="fw-bold color-1">About</h1>
					<p><span class="fw-bold color-1">Hello there!</span><br>My name is <span class="fw-bold color-1">Isna Prasetyo</span>, I work in the field of website developer especially <span class="fw-bold color-1">frontend</span> developer, I have about 2 years experience in the frontend developer field, I make several websites such as schools, companies, and personal.<br>I am used to using <span class="fw-bold color-1">Bootstrap</span> to create UI websites and use Adobe Illustrator, Adobe Photoshop to support my design.	Majoring in informatics and <span class="fw-bold color-1">computer engineering</span> education at Semarang state university.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" style="height: 100vh; padding-top: 10em; padding-bottom: 10em;">
		<div class="container text-center">
			<div class="row">
				<div class="col-12 mb-5 mb-lg-0">
					<h1 class="fw-bold color-1">Contact</h1>
					<p class="m-0">If you interest, please contact me at <a href="mailto:praseetyaa@gmail.com" class="fw-bold color-1">praseetyaa@gmail.com</a> to talk about your project</p>
					<p>We waiting for your message, see you on mail.</p>
				</div>
				<div class="col-12">
					<img class="img-fluid illustration" src="assets/img/undraw_contact_us_15o2.svg" style="max-width: 80%">
				</div>
			</div>
		</div>
	</section>
	<!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"></script>
    <!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<!-- app -->
	<script type="text/javascript" src="assets/js/app.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets/dist/owl.carousel.min.js"></script>
    <style type="text/css">
    	i.fa.fa-angle-left{position: absolute; left:0; top: 30%; font-size: 3rem; color: #565472}
    	i.fa.fa-angle-right{position: absolute; right:0; top: 30%; font-size: 3rem; color: #565472}
    	.color-1 {color: #565472!important}
    	/*mouse*/
	    .icon-scroll,
		.icon-scroll:before {
		  position: absolute;
		  left: 50%;
		}
		.icon-scroll {
		  width: 30px;
		  height: 50px;
		  margin-left: -20px;
		  bottom: 50px;
		  margin-top: -35px;
		  border: 2px solid #565472;
		  border-radius: 25px;
		  display: block;
		}
		@media (max-width: 768px) {
		  .icon-scroll {
		    position: relative;
		    display: none;
		  }
		  .illustration{
		  	max-width: 70%!important;
		  }
		}
		.icon-scroll:before {
		  content: '';
		  width: 8px;
		  height: 8px;
		  background: #565472;
		  margin-left: -4px;
		  top: 8px;
		  border-radius: 4px;
		  -webkit-animation-duration: 1.5s;
		          animation-duration: 1.5s;
		  -webkit-animation-iteration-count: infinite;
		          animation-iteration-count: infinite;
		  -webkit-animation-name: scroll;
		          animation-name: scroll;
		}
		@-webkit-keyframes scroll {
		  0% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		    transform: translateY(26px);
		  }
		}
		@keyframes scroll {
		  0% {
		    opacity: 1;
		  }
		  100% {
		    opacity: 0;
		    transform: translateY(26px);
		  }
		}
		/*scrollbar*/
		.scrollbar::-webkit-scrollbar-track{
			-webkit-box-shadow: inset 0 0 0px rgba(0,0,0,0.0);
			background-color: transparent;
			border-radius: 10px;}
		.scrollbar::-webkit-scrollbar{
			width: 8px;
			background-color: transparent;}
		.scrollbar::-webkit-scrollbar-thumb{
			border-radius: 10px;
			background: #565472}
		#nav a {opacity: 0.7; transition: opacity .3s ease}
		#nav a.active {opacity: 1; color: #565472;}
		.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{background: #565472; transition: .3s ease}
		.card-hover {transition: .3s ease}
		.item:hover .card-hover {transform: scale(1.1);} 
    </style>
    <script type="text/javascript">
	jQuery(document).ready(function($) {
	"use strict";
	$('.owl-carousel').owlCarousel( {
			loop: true,
			center: true,
			items: 3,
			margin: 30,
			autoplay: true,
			dots:true,
	    	nav:true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			smartSpeed: 450,
	  		navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		});
	});
    </script>
    <script type="text/javascript">
		$('#nav a').click(function () {
		    $('#nav a.active').removeClass('active');
		    $(this).addClass('active');
		});
		$(window).scroll(function () {
		    var href = $(this).scrollTop();
		    $('.active-link').each(function (event) {
		        if (href >= $($(this).attr('href')).offset().top - 1) {
		            $('#nav a.active').removeClass('active');
		            $(this).addClass('active');
		        }
		    });
		});
    </script>
    <script type="text/javascript">
	/**
	 * Copyright 2019 Google LLC.
	 * SPDX-License-Identifier: Apache-2.0
	 */

	(() => {
	  if (window.matchMedia('(prefers-color-scheme)').media === 'not all') {
	    // alert('Your browser does not support the `prefers-color-scheme` media query.');
	  }
	  
	  const darkModeToggle = document.querySelector('dark-mode-toggle');
	  const manifests = document.querySelectorAll('link[rel="manifest"]');
	  const favicons = document.querySelectorAll('link[rel="icon"]');
	  const themeColor = document.querySelector('meta[name="theme-color"]');
	      
	  const toggleTheme = (e) => {    
	    const darkModeOn = e.detail.colorScheme === 'dark' ? true : false;        
	    manifests.forEach((link) => {               
	      link.href = darkModeOn ? link.dataset.hrefDark : link.dataset.hrefLight; 
	    });
	    favicons.forEach((link) => {      
	      link.href = darkModeOn ? link.dataset.hrefDark : link.dataset.hrefLight;   
	    });    
	    themeColor.content = darkModeOn ? 'black' : 'white';    
	  };
	  document.addEventListener('colorschemechange', toggleTheme);
	  toggleTheme({detail: {colorScheme: darkModeToggle.mode}});
	})();
    </script>
  </body>
</html>