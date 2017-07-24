<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cabelin
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- font and Fontawesome-->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">
  <script src="https://use.fontawesome.com/9be276e1ba.js"></script>

  <!-- Latest bootstrap compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<?php 
		wp_head(); 
		$logo = get_field('logo');
  	$telephone = get_field('telephone');
	?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cabelin' ); ?></a>

	<div id="navigation">
	  <div class="container">
	    <img src="<?php echo $logo['url'];?>" class="logo">
	    <h3 class="pull-right">Call us now : <i class="fa fa-mobile fa-lg faa-ring animated"></i><br><a href="tel:<?php echo $telephone;?>" class="tel"><?php echo $telephone;?></a></h3>
	  </div>
	  <nav class="navbar navbar-default" data-spy="affix" data-offset-top="120">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="#navigation" id="nav_home">HOME</a></li>
	            <li><a href="#services" id="nav_services">SERVICES</a></li>
	            <li><a href="#about" id="nav_services">ABOUT US</a></li>
	            <li><a href="#contact" id="nav_cont">CONTACT</a></li>
	          </ul>
	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container -->
	    </nav>
	</div>