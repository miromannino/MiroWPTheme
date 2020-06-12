import * as d3 from 'd3';
import $ from 'jquery';
import BeerSlider from 'beerslider';

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

    // BeerSlider before/after photos
    $.fn.BeerSlider = function ( options ) {
      options = options || {};
      return this.each(function() {
        new BeerSlider(this, options);
      });
    };
    $('.beer-slider').each(function( index, el ) {
      $(el).BeerSlider({start: $(el).data('beer-start')});
      console.log('initialized beerslider' , el);
    });

    // Contact me button
    $('.contact-me-button').click(function () {
      console.log('contact me');
      $('#contact-me-modal').modal();
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
