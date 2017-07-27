jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});

jQuery(function ($) {
  
  $(document).ready(function(){
     $('img').svgmagic();
  });

  // inViewport jQuery plugin
  $(function($, win) {
    $.fn.inViewport = function(cb) {
      return this.each(function(i,el){
        function visPx(){
          var H = $(this).height(),
              r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
          return cb.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));  
        } visPx();
        $(win).on("resize scroll", visPx);
      });
    };
  }(jQuery, window));

  //animate number count
  $(".count").inViewport(function(px) { // Make use of the `px` argument!!!
    // if element entered V.port ( px>0 ) and
    // if prop initNumAnim flag is not yet set
    //  = Animate numbers
    if(px>0 && !this.initNumAnim) { 
      this.initNumAnim = true; // Set flag to true to prevent re-running the same animation
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 3000,
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });         
    }
  });


  //smoothscroll
  $(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
     'scrollTop': $target.offset().top
  }, 900, 'swing');
  });
});



});
