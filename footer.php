

<footer class="container">
  <div class="row" style="padding-top: 42px;">
    <div class="col-6 text-center social-icons">

      <h3>
        Follow us and share the #PHXDW love!
      </h3>

      <a href="http://twitter.com/phxdc" class="social-icon">
        <i class="fa fa-twitter"></i>
      </a>

      <a href="https://www.facebook.com/phxdw/" class="social-icon">
        <i class="fa fa-facebook"></i>
      </a>

      <a href="https://www.instagram.com/aigaarizona/" class="social-icon">
        <i class="fa fa-instagram"></i>
      </a>

    </div>

    <div class="col-6 col-centered text-center aiga">
      <h3>Presented By 
      <a href="https://arizona.aiga.org/"><img style="margin: 0 0 0 15px; max-width: 150px; vertical-align: middle;" src="<?php bloginfo('template_url');?>/assets/images/aiga.svg" alt="AIGA Arizona"></a></h3>
    </div>
  </div>
  
  <div class="row" style="padding-top: 30px; padding-bottom:55px">
    <div class="col-12 text-center">
      <p>
        Phoenix Design Week was founded by <a href="http://www.lostcreature.com/">Lost Creature</a> and is organized by
        <a href="http://arizona.aiga.org/">AIGA Arizona</a>.  
      </p>
      <p>
        <a href="http://www.aiga.org/terms/">Privacy Policy</a>
        &nbsp;
        <a href="http://www.aiga.org/code-of-conduct/">Code of Conduct</a>
         &nbsp;
        <a href="<?php echo home_url(); ?>/contact">Contact Us</a>
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
adroll_adv_id = "3XIK6VYLRFBNTPN3LOFTDB";
adroll_pix_id = "4O6YAH24VZE2ZD6SRUFYBP";
/* OPTIONAL: provide email to improve user identification */
/* adroll_email = "username@example.com"; */
(function () {
var _onload = function(){
if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
var scr = document.createElement("script");
var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
scr.setAttribute('async', 'true');
scr.type = "text/javascript";
scr.src = host + "/j/roundtrip.js";
((document.getElementsByTagName('head') || [null])[0] ||
document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
};
if (window.addEventListener) {window.addEventListener('load', _onload, false);}
else {window.attachEvent('onload', _onload)}
}());
</script>

</body>
</html>
