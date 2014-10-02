<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="barnone container">
    <div class="headdiv">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs" href="<?php echo home_url(); ?>/"><img src="/wp-content/themes/davinmccoy/assets/img/dm-logo.png" height="30px" /></a>
      </div>
      <nav id="main-nav" class="collapse navbar-collapse" role="navigation">
        <script>
          function parallax(){
            var scrollPosition = $(window).scrollTop();
            // $("#stars").css('top', (0 - (scrollPosition * .5)) + 'px');
            $("#images").css('top', (0 - (scrollPosition * .5)) + 'px');
            // $("#content").css('top', (0 - scrollPosition) + 'px');
          }
          function doClick(x) {
            debugger;
            if (window.location.href == "http://davinmccoy.12southdev.com")
              window.location.href = "http://davinmccoy.12southdev.com";
              $('html, body').animate({scrollTop : $(x).offset().top}, 1000, function(){
                parallax();
              });
              return false;
          }
        </script>

<!-------- NAVBAR START -------->

        <ul id="menu-primary-navigation" class="nav navbar-nav">
          <li class="active menu-home">
            <a href="/">Home</a>
          </li>
          <li class="menu-news">
            <a class="space" href="#news" onclick="doClick('#news');">News</a>
          </li>
          <li class="menu-about">
            <a class="earth" href="#about" onclick="doClick('#about');">About</a>
          </li>
          <li class="menu-shows">
            <a class="moon" href="#shows" onclick="doClick('#shows');">Shows</a>
          </li>
          <li class="menu-videos">
            <a class="rocket" href="#videos" onclick="doClick('#videos');">Videos</a>
          </li>
          <li class="menu-photos">
            <a class="saturn" href="#photos" onclick="doClick('#photos');">Photos</a>
          </li>
          <li class="menu-store">
            <a href="/store/">Store</a>
          </li>
          <li class="menu-contact">
            <a href="/contact/">Contact</a>
          </li>
        </ul>

<!-------- NAVBAR END -------->

        <!-- <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?> -->
      </nav>
    </div>
  </div>
</header>
