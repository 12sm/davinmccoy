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
      <div>
        <?php echo do_shortcode('[alpine-phototile-for-instagram id=489 user="davin_mccoy_band" src="user_recent" imgl="fancybox" style="cascade" col="6" size="Th" num="6" curve="1" align="center" max="100" nocredit="1"]'); ?>
      </div>
<div class="hidden-md hidden-lg">
<!--<script src="http://instansive.com/widget/js/instansive.js"></script><iframe src="http://instansive.com/widgets/idf50718fca07701d71e2cf29ec5fb0d.html" scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
<!-->
</div>

      </div>
    </div>
    <div class="row">
      <div class='col-sm-12'>
        <h3 class="border-box"><a href="/photos/">View More Photos</a></h3>
      </div>
    </div>
  </article>



</div>
