<!DOCTYPE html>
<html lang="hr">
 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $data['title'];?></title>

	<meta name="description" value="Booking app je proizvod koji na jednom mjestu okuplja sve što vam treba za upravljanje rezervacijama.">
	<meta name="author" value="Nikola Papratović">
 	
    
    <!-- front page css -->
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/pe-icon-7-stroke.css">   

	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/portal.css">   
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/carousel.css">   


 
    <!-- Custom Fonts -->
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
 
  	<meta property="article:author" content="https://www.facebook.com/nikola.papratovic">
	<style>
		body{
			padding-top:70px;
		}
		.margin-top-10{
			margin-top:10px;
		}
		.gradient-bg{
			
			-webkit-box-shadow:  21px -14px 50px rgba(150, 150, 150, 0.05) inset;
			-moz-box-shadow:     21px -14px 50px rgba(150, 150, 150, 0.05) inset;
			box-shadow:          21px -14px 50px rgba(150, 150, 150, 0.05) inset;

			border-left:2px solid #DEDEDE;
			border-top:none;
			border-left:none;
			border-bottom:none;
			border-width:2px;
			-webkit-border-image: 
				-webkit-gradient(linear, 0 100%, 0 0, from(rgba(0, 0, 0, .1)), to(rgba(0, 0, 0, 0))) 1 100%;
			-webkit-border-image: 
				-webkit-linear-gradient(bottom, rgba(0, 0, 0, .1), rgba(0, 0, 0, 0)) 1 100%;
			-o-border-image:
					 -o-linear-gradient(bottom, rgba(0, 0, 0, .1), rgba(0, 0, 0, 0)) 1 100%;
			-moz-border-image:
				   -moz-linear-gradient(bottom, rgba(0, 0, 0, .1), rgba(0, 0, 0, 0)) 1 100%; 
		}
	
		.hov-action-border{
			border: 2px solid transparent;
		}
		.hov-action-border:hover{
			border: 2px solid #ffde9f;
		}
		.frm-wrapper{
			position:absolute; 
			left:100px; 
			top:120px; 
			display:inline-block; 
			min-width:40%; 
			z-index:1020;
		}
		
		.carousel-caption{
			bootom:auto;
			top:100px;
		}
		
		/* carousel custom fade effect */
	 
		.carousel-inner{
			min-height:570px;
		}
		.carousel.carousel-fade .carousel-inner >.item {
			-webkit-transition: opacity 0.7s ease-in-out;
			-moz-transition: opacity 0.7s ease-in-out;
			-ms-transition: opacity 0.7s ease-in-out;
			-o-transition: opacity 0.7s ease-in-out;
			transition: opacity 0.7s ease-in-out;
			opacity:1;
			position:absolute;
			left: 0;
			top:0;
			right:0;
			bottom:0;
			z-index: 1;
			display:block;
		}

		.carousel.carousel-fade .active.item {
			opacity:1;
			-webkit-transition: opacity 0.7s ease-in-out;
			-moz-transition: opacity 0.7s ease-in-out;
			-ms-transition: opacity 0.7s ease-in-out;
			-o-transition: opacity 0.7s ease-in-out;
			transition: opacity 0.7s ease-in-out;
			z-index: 2;
		}

		.carousel.carousel-fade .active.left,
		.carousel.carousel-fade .active.right {
		-webkit-transition: opacity 0.7s ease-in-out;
			-moz-transition: opacity 0.7s ease-in-out;
			-ms-transition: opacity 0.7s ease-in-out;
			-o-transition: opacity 0.7s ease-in-out;
			transition: opacity 0.7s ease-in-out;
			left: 0;
			z-index: 2;
			opacity: 0;
			filter: alpha(opacity=0);
		}

		.carousel.carousel-fade .next,
		.carousel.carousel-fade .prev {
			left: 0;
			z-index: 1;
		}

		.carousel.carousel-fade .carousel-control {
			z-index: 3;
		}
		
		.carousel-control .icon-prev, 
		.carousel-control .icon-next{
			text-shadow: 2px 2px 3px rgba(0,0,0, .4);
		}
/* effect-end*/

/* helper classes*/
.relative{
	position:relative;
}
		
	@media (max-width:768px){
		.frm-wrapper{
			position:absolute; 
			left:10%;
			right:20%;
			top:100px; 
			display:inline-block; 
			width:80%; 
			z-index:1020;
		}
		.carousel-inner{
			min-height:500px;
			max-width:768px;
			overflow:hidden;
		}
		.carousel-inner > .item{
			max-width:768px;
		}
		.carousel-inner > .item > img {
			position: relative;
			top: 0;
			left: 0;
			max-width:none;
			width: auto;
			height: 500px;
			}
		.carousel-caption{
			bottom:50px;
			}
		
	  }
	  #map_canvas {
	  	width: 100%;
	  	height: 200px;
	  }
	  @media (min-width: 768px) {
	  	#map_canvas {
	  		width: 100%;
	  		height: 400px;
	  	}
	  }
	  @media (min-width: 960px){
		.carousel-control .icon-prev, 
		.carousel-control .icon-next{
			font-size:60px;
		}
		
	  }
	</style>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
<body class="portal"  onLoad="initializeMaps()">
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=341384832723371";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>