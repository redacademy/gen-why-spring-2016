window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function(f) {
    return setTimeout(f, 1000 / 60)
}

jQuery(document).ready(function() {
 console.log('wtf')
  jQuery('.bxslider-review').bxSlider({
      controls: false
  });

  jQuery('.bxslider-hero').bxSlider({
      auto: true,
      controls: false
  });

  var $body =   jQuery('body'),
        $target =  jQuery('#scroll-target'),
        targetoffsetTop,
        resizetimer,
        stickyclass = 'sticky' //class to add to BODY when header should be sticky

    function updateCoords() {
        targetoffsetTop = $target.offset().top
    }

    function makesticky() {
        var scrollTop =  jQuery(document).scrollTop()
        if (scrollTop >= targetoffsetTop) {
            if (!$body.hasClass(stickyclass)) {
                $body.addClass(stickyclass);
            }
        } else {
            if ($body.hasClass(stickyclass)) {
                $body.removeClass(stickyclass);
            }
        }
    }

      updateCoords();

      jQuery(window).on('scroll', function() {
          requestAnimationFrame(makesticky);
      });

      jQuery(window).on('resize', function() {
          clearTimeout(resizetimer);
          resizetimer = setTimeout(function() {
              $body.removeClass(stickyclass);
              updateCoords();
              makesticky();
          }, 50);
      });

});
