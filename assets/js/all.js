!function(n){n.fn.niftyNav=function(i){$nifty_toggle=n("#nifty-nav-toggle"),$nifty_panel=n(".nifty-panel"),$nifty_nav_item=n(".nifty-nav-item"),$nifty_parent=n(".nifty-panel ul li");var e=n.extend({subMenus:!1,mask:!0,itemClickClose:!0,panelPosition:"absolute",subMenuParentLink:!1},i);if(subMenus=e.subMenus,mask=e.mask,itemClickClose=e.itemClickClose,panelPosition=e.panelPosition,subMenuParentLink=e.subMenuParentLink,niftyRemove=function(){n(".nifty-mask").remove()},niftyUnmask=function(){n(".nifty-mask").animate({opacity:0}),setTimeout(niftyRemove,800)},$nifty_toggle.click(function(){n(this).toggleClass("nifty-active"),$nifty_panel.slideToggle(500).css("position",panelPosition),"fixed"==panelPosition&&n("body").toggleClass("nifty-lock"),!0===mask&&(n(".nifty-mask").length>0?niftyUnmask():(n("body").append('<div class="nifty-mask"></div>'),n(".nifty-mask").animate({opacity:1}),n(".nifty-mask").click(function(){$nifty_panel.slideUp(500),niftyUnmask(),$nifty_toggle.removeClass("nifty-active"),"fixed"==panelPosition&&n("body").removeClass("nifty-lock")})))}),!0===itemClickClose&&$nifty_nav_item.click(function(){$nifty_panel.slideUp(500),niftyUnmask(),$nifty_toggle.removeClass("nifty-active"),"fixed"==panelPosition&&n("body").removeClass("nifty-lock")}),!0===subMenus){var t;!1===subMenuParentLink&&n(".nifty-panel .menu-item-has-children > a").click(function(n){n.preventDefault()}),$nifty_parent.click(function(){t=n(this),t.find(".sub-menu").slideToggle(),t.toggleClass("nifty-menu-opened")})}}}(jQuery);
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
