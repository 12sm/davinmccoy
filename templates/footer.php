<footer class="content-info container-fluid" role="contentinfo">
  <div class="row">
  	<div class="col-sm-4">
      <div class="sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
	</div>
	<div class="col-sm-4">
      <div class="footer-nav">
			<?php
		 if (has_nav_menu('footer_navigation')) :
		   wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
		 endif;
	  ?>
      </div>
	</div>
	<div class="col-sm-4">
      <!-- <div id="social" class="social-nav">
		   <?php
			// if (has_nav_menu('social_navigation')) :
			//   wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
			// endif;
		  ?>
      </div> -->
	 </div>
      <p class="credits">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
	
  </div><!--end row -->
</footer>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!-->
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-27814560-41', 'auto');
 ga('send', 'pageview');

</script>
