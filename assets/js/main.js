/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {
  function inquirer(){
    console.log("Small Enquire Called");
    $(window).off('mousewheel');
    $(window).off('wheel');
    $(window).unbind('scroll');
    $(window).bind('scroll', function(e){return true});
    $('.nav li a').unbind('click');
  }
  function parallax(){
    var scrollPosition = $(window).scrollTop();
    // $("#stars").css('top', (0 - (scrollPosition * .5)) + 'px');
    $("#images").css('top', (0 - (scrollPosition * .5)) + 'px');
    // $("#content").css('top', (0 - scrollPosition) + 'px');
  }
  function enquirer(){
    console.log("Large Enquire Called");
    $(window).on('mousewheel', function(e){
      e.preventDefault();
    });
    $(window).on('wheel', function(e){
      e.preventDefault();
    });
    $(window).bind('scroll', function(e){
      parallax();
    });
    document.body.addEventListener('touchmove', function(e){ e.preventDefault(); });
    $('li.space a').click(function(){
      $('html, body').animate({scrollTop : 0}, 2000, function(){
        parallax();
      });
      return false;
    });
    $('li.earth a').click(function(){
      $('html, body').animate({scrollTop : $('#about').offset().top}, 1000, function(){
        parallax();
      });
      return false;
    });
    $('li.moon a').click(function(){
      $('html, body').animate({scrollTop : $('#shows').offset().top}, 1000, function(){
        parallax();
      });
      return false;
    });
    $('li.rocket a').click(function(){
      $('html, body').animate({scrollTop : $('#videos').offset().top}, 1000, function(){
        parallax();
      });
      return false;
    });
    $('li.saturn a').click(function(){
      $('html, body').animate({scrollTop : $('#photos').offset().top}, 1000, function(){
        parallax();
      });
      return false;
    });
  }
  
  function theSetup(){
    var wid = window.innerWidth;
    if (wid < 768 ){
    	inquirer();
    };
  }
  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Roots = {
    // All pages
    common: {
      init: function() {
        // JavaScript to be fired on all pages
        $(window).load(function() {
          $(".imgLiquidFill").imgLiquid({
	        fill: true,
	        horizontalAlign: "center",
	        verticalAlign: "25%"
          });
        });
        $('.vid-container').fitVids();
      }
    },
    // Home page
    home: {
      init: function() {
        // JavaScript to be fired on the home page
        $(window).load(function() {
          $('.flexslider').flexslider();
        });
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/home-bg-1.jpg');
        
        enquire.register("screen and (min-width:768px)", {
            match: function() {
	            enquirer();
            },
            unmatch: function() {
	            inquirer();
            },
            setup : function() {
              theSetup();
            },
        });

      }
    },
    // News page
    blog: {
      init: function() {
        // JavaScript to be fired on the about page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/home-bg-1.jpg');
      }
    },
    single_post: {
      init: function() {
        // JavaScript to be fired on the about page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/home-bg-2.jpg');
      }
    },
    // About page
    about: {
      init: function() {
        // JavaScript to be fired on the about page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/about-bg.jpg');
      }
    },
    // Shows page
    shows: {
      init: function() {
        // JavaScript to be fired on the about page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/home-bg-2.jpg');
      }
    },
    // Video page
    post_type_archive_videos: {
      init: function() {
        // JavaScript to be fired on the photos page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/home-bg-3.jpg');
      }
    },
    single_videos: {
      init: function() {
        // JavaScript to be fired on the photos page
        $.backstretch('../../wp-content/themes/davinmccoy/assets/img/home-bg-3.jpg');
      }
    },
    // Photo page
    photos: {
      init: function() {
        // JavaScript to be fired on the photos page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/photos-bg.jpg');
      }
    },
    // Contact page
    contact: {
      init: function() {
        // JavaScript to be fired on the contact page
        $.backstretch('../wp-content/themes/davinmccoy/assets/img/contact-bg.jpg');
      }
    }
  };
  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var namespace = Roots;
      funcname = (funcname === undefined) ? 'init' : funcname;
      if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      UTIL.fire('common');

      $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
        UTIL.fire(classnm);
      });
    }
  };

  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
