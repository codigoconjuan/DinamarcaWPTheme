jQuery(function($){

  jQuery('div.menu').slicknav();

  // GALERIA LIGHTBOX
  jQuery('.gallery a').each(function(){
          var captionText = $(this).closest('.gallery-item').find('.wp-caption-text').html();
          jQuery(this).attr({'data-lightbox':'slideshow', 'title': captionText});
  });
  lightbox.option({
    'resizeDuration':1000,
    'showImageNumberLabel': false
  })
});
