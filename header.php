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


	  <script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');__gaTracker('create','UA-64160014-1','auto');__gaTracker('set','forceSSL',true);__gaTracker('send','pageview');</script>

  <script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("1643074858");
</script>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('parts/alert'); ?>

	<header class="container">
	  	<div class="row">

<?php if(is_page_template('templates/home.php')) { ?>

		  	<div class="col-12 text-center md-hide-down">
		  	<?php wp_nav_menu(array ('menu' => 'primary', 'depth'=>2)); ?>
		  	</div>

		  	<?php // Mobile only ?>
		  	<div class="sm-col-8  md-hide-up conf-date">
		  		<p>OCT 27 - NOV 3 2017</p>
		  	</div>

		  	<div class="sm-col-4 sm-col-4 md-hide-up niftyburger">
			  <a id="nifty-nav-toggle" ><span></span></a>
		  	</div>



<?php }
else {
?>
		  <div class="md-col-3 sm-col-8 header--branding">
			  <h1><a href="<?php bloginfo( 'home' ); ?>">PHX Design Week 2017</a></h1>
		  </div>
		  <div class="col-9 md-hide-down">
			  <a href="https://phxdwmethodmadness2017.eventbrite.com/" class="button header--buynow">Get Tickets</a>
			  <?php wp_nav_menu(array ('menu' => 'primary', 'depth'=>2, 'container_id' => 'interior-menu')); ?>
		  </div>

		  <div class="sm-col-4 md-col-4 md-hide-up niftyburger">
			  <a id="nifty-nav-toggle" ><span></span></a>
		  </div>

<?php } ?>


<?php // Nifty Nav Panel ?>
<div class="nifty-panel">
  <div class="container">
    <div class="row">
      <div class="col-12 text-right" style="padding: 0;">
          <a href="https://phxdwmethodmadness2017.eventbrite.com/" class="button header--buynow">Get Tickets</a>
        <?php wp_nav_menu(array ('menu' => 'primary', 'depth'=>2)); ?>
      </div>
    </div>
  </div>
</div>




	  </div>
  </header>

  <?php // END Header Start Main Content ?>
