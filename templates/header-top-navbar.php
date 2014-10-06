<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="barnone">
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
          function doClick(x, y) {
            if (window.location.href != "http://davinmccoy.12southdev.com/")
              window.location.href = y;
          }
        </script>

<!-------- NAVBAR START -------->

        <ul id="menu-primary-navigation" class="nav navbar-nav">
          <li class="active menu-home">
            <a class="space" onclick="doClick('#home', '/'); return false;">Home</a>
          </li>
          <li class="menu-about">
            <a class="earth" href="/about">About</a>
          </li>
          <li class="menu-shows">
            <a class="moon" onclick="doClick('#shows', '/shows/'); return false;">Shows</a>
          </li>
          <li class="menu-videos">
            <a class="rocket" onclick="doClick('#videos', '/videos/'); return false;">Videos</a>
          </li>
          <li class="menu-photos">
            <a class="saturn" onclick="doClick('#photos', '/photos/'); return false;">Photos</a>
          </li>
          <li class="menu-news">
            <a href="/news/">News</a>
          </li>
          <li class="menu-store">
            <a href="http://davinmccoy.myshopify.com/">Store</a>
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
