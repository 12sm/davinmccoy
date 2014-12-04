<footer class="content-info container-fluid" role="contentinfo">
  <div class="row">
    <div class="col-sm-3">
      <div class="footer-nav">
        <?php if (has_nav_menu( 'footer_navigation')) : wp_nav_menu(array( 'theme_location'=>'footer_navigation', 'menu_class' => '')); endif; ?>
      </div>
    </div>
    <div class="col-sm-6">
      <!-- <div class="sidebar-footer">
        <?php // dynamic_sidebar('sidebar-footer'); ?>
      </div> -->
      <!-- Begin MailChimp Signup Form -->

      <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
      <style type="text/css">
        #mc_embed_signup {
          background: #fff;
          clear: left;
          font: 14px Helvetica, Arial, sans-serif;
        }
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
      <div id="mc_embed_signup">
        <form action="//davinmccoy.us8.list-manage.com/subscribe/post?u=4d33b75ac40b7c4a1aa594342&amp;id=7fb168a173" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="hancock row">
              <div class="col-sm-4">
                <label for="mce-EMAIL">Subscribe to the mailing list</label>
              </div>
              <div class="col-sm-4">
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
              </div>
              <div class="col-sm-4 subscribe-column">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;">
                  <input type="text" name="b_4d33b75ac40b7c4a1aa594342_7fb168a173" tabindex="-1" value="">
                </div>
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
              </div>
            </div>
            <!-- end row -->
          </div>
        </form>
      </div>
      <!--End mc_embed_signup-->
    </div>
    <div class="col-sm-3">
      <!-- <div id="social" class="social-nav">
       <?php
      // if (has_nav_menu('social_navigation')) :
      //   wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
      // endif;
      ?>
      </div> -->
      <p class="credits">&copy;
        <?php echo date( 'Y'); ?>
        <?php bloginfo( 'name'); ?> <img src="/wp-content/themes/davinmccoy/assets/img/blank-tiny.png" /> | <a href="http://12southmusic.com/" target="_blank">built by 12SM</a>
      </p>
    </div>



  </div>
  <!--end row -->
</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5432d1344622756c" async></script>

<!-- Begin 12SM Network Analytics <!-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27814560-1']);
  _gaq.push(['_setDomainName', '12southmusic.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End 12SM Network Analytics <!-->
<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
    m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-27814560-41', 'auto');
  ga('send', 'pageview');
</script>
