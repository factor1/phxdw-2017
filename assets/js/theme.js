jQuery( document ).ready(function( $ ) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}


/* Nifty Nav */

  // Nifty Nav without the mask and with sub-menu toggles
  $('#nifty-nav-toggle').niftyNav({
    mask: false,
    subMenus: true
  });

  // Alert Bar
  $('.alert-bar').delay(700).slideToggle(700);
  $('header').delay(700).animate({'margin-top': $('.alert-bar').height() + 'px'}, 700);

});
