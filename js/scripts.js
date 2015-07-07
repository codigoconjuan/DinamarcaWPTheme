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
        var navbar = $(this).parent().parent();
        var icon = $(this);
        $(icon).addClass('active');
        $(navbar).toggleClass('active');

        if($('div.search').is(':visible')){
          setTimeout(function(){
              $('div.search').fadeOut('slow');
          },0);
        } else {
          setTimeout(function(){
              $('div.search').fadeIn('slow');
          },1000);
        }
  });

  jQuery('#search-icon.active').on('click',function() {

  });

    jQuery('.slider').bxSlider({
        auto: true,
        mode:'fade'
    });
});
