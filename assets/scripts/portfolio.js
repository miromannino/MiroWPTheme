function mirowptheme_init_portfolio($) {
  var bricklayer = new Bricklayer(document.querySelector('.bricklayer'));
  // bricklayer.on('redraw', function (e) {
  $('.portfolio').addClass('visible');
  // });
  // bricklayer.redraw();

  var selectedTag = null;
  $('.portfolio-filter a').click(function (ev) {
    var tag = $(ev.target).text().toLowerCase();
    selectedTag = selectedTag === tag ? null : tag; //toggle select anything
    $('.portfolio-filter a').each(function (idx, el) {
      var $el = $(el);
      if ($el.text().toLowerCase() === selectedTag || selectedTag === null) {
        $el.removeClass('tag-disabled');
      } else {
        $el.addClass('tag-disabled');
      }
    });
    $('.portfolio .card').each(function (idx, el) {
      var $entry = $(el);
      if (selectedTag === null) {
        $entry.removeClass('card-hide');
      } else {
        var tagFound = false;
        $entry.find('.project-tags>li').each(function (idx, el) {
          if ($(el).text().toLowerCase() === selectedTag) tagFound = true;
        });
        if (tagFound || $entry.hasClass('card-always-visible')) {
          $entry.removeClass('card-hide');
        } else {
          $entry.addClass('card-hide');          
        }
      }
    });
    bricklayer.redraw();
    console.log('selected: ', selectedTag);
  });
}