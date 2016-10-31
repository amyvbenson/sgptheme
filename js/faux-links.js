(function ($) {
  $('[data-faux-link]').on('mouseenter mouseleave', function () {
    $(this).parent('div').toggleClass('hover');
  });
})(jQuery);