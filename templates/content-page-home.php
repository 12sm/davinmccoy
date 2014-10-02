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

<div id="homecontent">
  <article id="news">
    <div class="row">
      <div class='col-sm-12'>
        <h1>News</h1>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-12'>
        <img src='/wp-content/themes/davinmccoy/assets/img/logo.png' class="img-responsive logo">
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h1><a href="/news/">Read More News</a></h1>
      </div>
    </div>
  </article>
  <article id="about">
    <div class="row">
      <div class='col-sm-12'>
        <h1>About Davin</h1>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-12'>
        <img src='/wp-content/themes/davinmccoy/assets/img/logo.png' class="img-responsive logo">
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h1><a href="/about/">Read More About Davin</a></h1>
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
        <h1><a href="/shows/">See More Dates</a></h1>
      </div>
    </div>
  </article>
  <article id="videos">
    <div class="row">
      <div class='col-sm-12'>
        <h1>Videos</h1>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-12'>
        <img src='/wp-content/themes/davinmccoy/assets/img/logo.png' class="img-responsive logo">
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h1><a href="/videos/">Watch More Videos</a></h1>
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
        <?php echo do_shortcode('[alpine-phototile-for-instagram id=446 user="davin_mccoy_band" src="user_recent" imgl="fancybox" style="cascade" col="5" size="L" num="10" curve="1" align="center" max="100" nocredit="1"]'); ?>
      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h1><a href="/photos/">View More Photos</a></h1>
      </div>
    </div>
  </article>
</div>
