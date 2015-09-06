<!DOCTYPE html>
<html lang="hr">
 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $data['title'];?> | Booking app</title>

	<meta name="description" value="Booking app je proizvod koji na jednom mjestu okuplja sve što vam treba za upravljanje rezervacijama.">
	<meta name="author" value="Nikola Papratović">
 
	
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootstrap.css">
   
    <!-- front page css -->
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/pe-icon-7-stroke.css">   
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/bootflat.css">
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/custom.css">
 <style type="text/css">
 body {
 	background: url(http://frontierstrategygroup.com/wp-content/uploads/2014/08/background-world-map.gif);
 }


  </style> 
    <!-- Custom Fonts -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,700,300,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo url::get_template_path();?>css/landing-page.css">   

  	<meta property="article:author" content="https://www.facebook.com/nikola.papratovic">

 </head>
<body class="landing-page">
 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=341384832723371";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>