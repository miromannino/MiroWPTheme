import $ from 'jquery';

export default {
  init() {
    // JavaScript to be fired on the projects
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    $('.portfolio').addClass('visible');

    var selectedTag = null;
    function updateTagsAndCards() {
      $('.portfolio-filter .tag').each(function (idx, el) {
        var $el = $(el);
        if ($el.text().toLowerCase() === selectedTag) {
          $el.removeClass('tag-disabled');
        } else {
          $el.addClass('tag-disabled');
        }
      });
      if (selectedTag === null) {
        $('.portfolio-filter .tag-all').removeClass('tag-disabled');
      }
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
      console.log('selected: ', selectedTag);
    }

    $('.portfolio-filter .tag-all').click(function () {
      selectedTag = null;
      updateTagsAndCards();
    });

    $('.portfolio-filter a:not(.tag-all)').click(function (ev) {
      var tag = $(ev.target).text().toLowerCase();
      selectedTag = selectedTag === tag ? null : tag;
      updateTagsAndCards();
    });

  },
};