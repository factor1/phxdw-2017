<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">
  <meta name="theme-color" content="#111">


  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>



  <?php wp_head(); ?>
  
  
  <?php 
	  // HIDE Google analytics for now
		  
	  //<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');__gaTracker('create','UA-64160014-1','auto');__gaTracker('set','forceSSL',true);__gaTracker('send','pageview');</script>
  
  ?>
  
</head>

<body <?php body_class(); ?>>

  <?php // Header ?>
  <header class="container">
	  <div class="row">
		  <div class="col-4">
			  Logo
		  </div>
		  <div class="col-5">
			  NAV
		  </div>
		  <div class="col-3">
			  <a href="#">Buy Tickets</a>
		  </div>
	  </div>

  </header>

  <?php // END Header Start Main Content ?>

