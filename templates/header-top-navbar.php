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

<!-------- NAVBAR START -------->

        <ul id="menu-primary-navigation" class="nav navbar-nav">
          <li class="active menu-home">
            <a href="/">Home</a>
          </li>
          <li class="menu-news">
            <a class="space" href="doClick('#news', '/news/')">News</a>
          </li>
          <li class="menu-about">
            <a class="earth" href="doClick('#about', '/about/')">About</a>
          </li>
          <li class="menu-shows">
            <a class="moon" href="doClick('#shows', '/shows/')">Shows</a>
          </li>
          <li class="menu-videos">
            <a class="rocket" href="doClick('#videos', '/videos/')">Videos</a>
          </li>
          <li class="menu-photos">
            <a class="saturn" href="doClick('#photos', '/photos/')">Photos</a>
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
