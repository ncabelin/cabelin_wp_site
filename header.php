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



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cabelin' ); ?></a>

	<div id="navigation">
	  <div class="container">
	    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/cabelinslogo.jpg" class="logo">
	    <h3 class="pull-right">Call us now : <i class="fa fa-mobile fa-lg faa-ring animated"></i><br><a href="tel:+1(323)835-1448" class="tel">+1 (323) 835-1448</a></h3>
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

	        <?php
	        	wp_nav_menu( array(
	        			'menu_location' => 'primary',
	        			'container' => 'nav',
	        			'container_class' => 'navbar-collapse collapse',
	        			'menu_class' => 'nav navbar-nav navbar-right'
	        		)
	        	);

	        ?>
	      </div><!-- /.container -->
	    </nav>
	</div>