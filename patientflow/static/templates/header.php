<?php include('functions.php'); if ($basepage == '') { $basepage = basename($_SERVER['PHP_SELF'], ".php"); } ?>
<!DOCTYPE html>
<html lang="en" class="wf-inactive">
<head>
	<style type="text/css" media="screen">html.wf-inactive h1, html.wf-inactive h2, html.wf-inactive h3, html.wf-inactive h4, html.wf-inactive p, html.wf-inactive li, html.wf-inactive a, html.wf-inactive span, html.wf-inactive label, html.wf-inactive td, html.wf-inactive th, html.wf-inactive input, html.wf-inactive select, html.wf-inactive textarea, html.wf-inactive small, html.wf-loading h1, html.wf-loading h2, html.wf-loading h3, html.wf-loading h4, html.wf-loading p, html.wf-loading li, html.wf-loading a, html.wf-loading span, html.wf-loading label, html.wf-loading td, html.wf-loading th, html.wf-loading input, html.wf-loading select, html.wf-loading textarea, html.wf-loading small {visibility: hidden;}</style>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title><?php if ($meta_title) { echo $meta_title; } else { echo 'Patient Flow'; } ?></title>

	<!-- <meta name="description" content=""> -->
	<!-- <meta name="keywords" content=""> -->
	<!-- <meta name="author" content=""> -->
	<!-- <meta name="viewport" content="width=1450"> -->
	<!-- <meta name="apple-mobile-web-app-capable" content="yes" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" href="<?= $burl ?>css/styles.css" type="text/css" media="screen">
	<script type="text/javascript" src="<?= $burl ?>js/jquery.min.js"></script>
	<script type="text/javascript">(function() { var config = { kitId: 'hkz5fci', scriptTimeout: 3000};
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s) })(); var $docWidth = $(window).width();</script>
</head>

<body id="<?= $basepage ?>" class="<?= $baseclass ?>"><ul id="grid"><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li></ul><!-- END #grid -->
	
	<div class="wrapper">

<!-- - - - - - - - - - HEADER STARTS - - - - - - - - - -->

		<header>
			<h1>Patient<strong>Flow</strong></h1>
			<form action="" method="get" id="auto-manual" accept-charset="utf-8"><fieldset><div id="switch"><input type="checkbox" value="auto" class="checkbox" checked="checked" /><label>Auto</label></div><div style="display:none"><button id="add-one"><span>Add One</span></button></div></fieldset></form>
			<nav>
				<ul class="inline">
					<li id="add-patient-btn"><a href="#add-patient">Add Patient</a></li>
					<li id="add-practitioner-btn"><a href="#add-practitioner">Add Practitioner</a></li>
					<li id="collapse-btn"><a href="#" class="img-txt">Hide Buttons</a></li>
				</ul>
			</nav>
		</header>