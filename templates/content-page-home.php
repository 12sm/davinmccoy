<div id="stars"></div>

<div id="images">
  <div id="img-about">
  </div>
  <div id="img-shows">
  </div>
  <div id="img-videos">
  </div>
  <div id="img-photos">
  </div>
</div>

<div id="homecontent" class="container">

  <article id="home">
    <div class='row'>
      <div class='col-sm-12'>
        <?php echo do_shortcode("[wpv-view name='Home-Slider']"); ?>
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'> 
        <h3 class="border-box"><a href="/news/">Read The Latest News</a></h3>
      </div>
    </div>
  </article>

  <article id="about">
    <div class="row">
      <div class='col-sm-6'>
        <h1>About Davin</h1>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-6'>
        <?php echo do_shortcode('[about]'); ?>
      </div>
    </div>
    <div class="row">
      <div class='col-sm-6'>
        <h3 class="border-box"><a href="/about/">Read More About Davin</a></h3>
      </div>
    </div>
  </article>

  <article id="shows">
    <div class="row">
      <div class='col-sm-12'>
        <h1>Shows</h1>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-12'>
        <div id="homedates">
          <?php echo do_shortcode("[wpv-view name='Home-Tour']"); ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h3 class="border-box"><a href="/shows/">See More Dates</a></h3>
      </div>
    </div>
  </article>

  <article id="videos">
    <div class="row">
      <div class='col-sm-12'>
        <h1>Videos</h1>
      </div>
    </div>
        <?php echo do_shortcode('[wpv-view name="HOME | VIDEO"]'); ?>
    <div class="row">
      <div class='col-sm-12'>
        <h3 class="border-box"><a href="/videos/">Watch More Videos</a></h3>
      </div>
    </div>
  </article>

  <article id="photos">
    <div class="row">
      <div class='col-sm-12'>
        <h1>Photos</h1>
      </div>
    </div>
    <div class='hometile row container '>
      <div class='col-sm-12'>
        <?php echo do_shortcode('[alpine-phototile-for-instagram id=446 user="davin_mccoy_band" src="user_recent" imgl="fancybox" style="cascade" col="5" size="Th" num="5" curve="1" align="center" max="100" nocredit="1"]'); ?>
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h3 class="border-box"><a href="/photos/">View More Photos</a></h3>
      </div>
    </div>
  </article>
  
  <article id="mobile-footer visible-xs hidden-sm hidden-md-hidden-lg">
    <div class="row">
      <div class='col-sm-12'>
        <h1>Footer</h1>
      </div>
    </div>
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
            <div class="row">
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
        <?php bloginfo( 'name'); ?> | <a href="http://12southmusic.com/" target="_blank">built by 12SM</a>
      </p>
    </div>



  </div>
  <!--end row -->
  </article>

</div>
