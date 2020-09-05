import * as d3 from 'd3';
import MiroD3AnimatedHeader from 'miro-d3-animated-headers';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Title animation
    function titleMouseEnter() {
      d3.selectAll('.brand-letter')
        .transition()
        .duration(300)
        .style('fill', '#f8775e');
    }

    function titleMouseLeave() {
      d3.selectAll('.brand-letter')
        .transition()
        .duration(300)
        .style('fill', '#545454');
    }

    d3.select('#svg-miromannino').on('mouseenter', titleMouseEnter);
    d3.select('#svg-miromannino').on('mouseleave', titleMouseLeave);

    // Change the status of header to make it not transparent, 
    // in case the header is not visible anymore
    var $window = $(window);
    var headImgHeight = $('.header-img-container').height();
    var navbar = $('header > nav');
    $window.on('scroll', function () {
      if ($window.scrollTop() > headImgHeight) {
        navbar.addClass('scrolled-header');
      } else {
        navbar.removeClass('scrolled-header');
      }
    });

    // Animated header
    var md3ah = new MiroD3AnimatedHeader(document.getElementById('animated-header'), 1000, 150);
    md3ah.triangleAnimation();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
