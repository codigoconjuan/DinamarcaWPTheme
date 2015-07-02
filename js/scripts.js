jQuery(function($){

  jQuery('div.menu').slicknav();
  jQuery('ul.menu').slicknav();

  // GALERIA LIGHTBOX
  jQuery('.gallery a').each(function(){
          var captionText = $(this).closest('.gallery-item').find('.wp-caption-text').html();
          jQuery(this).attr({'data-lightbox':'slideshow', 'title': captionText});
  });
  lightbox.option({
    'resizeDuration':1000,
    'showImageNumberLabel': false
  })

  jQuery('#search-icon').on('click', function(){
        $(this).parent().parent().toggleClass('active');
  });
});
