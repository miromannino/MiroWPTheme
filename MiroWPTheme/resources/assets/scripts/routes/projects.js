import $ from 'jquery';
import Bricklayer from 'bricklayer';

export default {
  init() {

  },
  finalize() {
    $(document).ready(function () {
      var bricklayer = new Bricklayer(document.querySelector('.bricklayer'));
      var selectedTag = null;

      $('.portfolio').addClass('visible');

      function updateTags() {
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
      }

      function updateCards(cb) {
        $('.portfolio .portfolio-card').each(function (idx, el) {
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
        }).promise().done(cb);
      }
  
      function updateTagsAndCards() {
        updateTags();
        $('.portfolio').removeClass('visible');
        setTimeout(function () {
          updateCards(function () {
            bricklayer.redraw();
            $('.portfolio').addClass('visible');
          });
        }, 250);
      }
  
      $('.portfolio-filter .tag-all').click(function () {
        if (selectedTag == null) return;
        selectedTag = null;
        updateTagsAndCards();
      });
  
      $('.portfolio-filter a:not(.tag-all)').click(function (ev) {
        var tag = $(ev.target).text().toLowerCase();
        selectedTag = selectedTag === tag ? null : tag;
        updateTagsAndCards();
      });

    });
  },
};
