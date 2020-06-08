import $ from 'jquery';

// Home page scripts
export default {
  init() {
    document.jq = $;
    $(document).ready(function() {
      var $carousel = $('.carousel.lazy');
      $carousel.on('slide.bs.carousel', function() {
        var $nextImg = $carousel.find('img[data-src]').eq(0);
        $nextImg.attr('src', $nextImg.attr('data-src'));
        $nextImg.removeAttr('data-src');
      });
    });

  },
  finalize() {

  },
};
