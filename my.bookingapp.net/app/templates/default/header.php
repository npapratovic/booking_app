<!DOCTYPE html>
<html lang="hr">
 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $data['title'];?> |  Booking app DEMO PORTAL</title>
 	<link href="<?php echo url::get_template_path();?>css/style.css" rel="stylesheet"> 

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootflat.css">  
 	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/custom.css">   
 	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/animate.css">
 
 	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootstrap-select.css">
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootstrap-select.css.map">
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootstrap-select.min.css">

	<!-- calendar -->
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/fullcalendar.css">
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/fullcalendar.print.css" media='print'> 

    <link rel="stylesheet" href="<?php echo url::get_template_path();?>dataTables.bootstrap.css">

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Custom Fonts -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- google maps for apartments -->
 	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/jquery-gmaps-latlon-picker.css">

 </head>
<body>
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=341384832723371";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>