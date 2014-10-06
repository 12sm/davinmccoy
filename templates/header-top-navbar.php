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

        <<?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
          ?>
      </nav>
    </div>
  </div>
</header>
