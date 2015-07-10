jQuery(function($){

  jQuery('div.menu').slicknav({
    allowParentLinks: true
  });
  jQuery('ul.menu').slicknav({
    allowParentLinks: true
  });
  jQuery('.slider').bxSlider({
      auto: true,
      mode:'fade'
  });

  jQuery('.testimonials-section .slider-testimonial').bxSlider({
      auto: true,
      mode:'fade',
      pager:false,
      autoHover:true
  });

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




   var portfolio = document.getElementById( 'portfolio' );
   if (portfolio != null && portfolio.value == '') {
       var navegacion = portfolio.getElementsByTagName( 'li' );
       var altura = navegacion[0].clientHeight;
   }


   jQuery('div.title-portfolio').each(function(i){
     this.style.bottom = altura +'px';
   });

  jQuery('ul.portfolio li').on({
        mouseenter: function () {
          jQuery(this).find('div.title-portfolio').css({'bottom': 0+'px'});
      },
      mouseleave: function () {
          jQuery(this).find('div.title-portfolio').css({'bottom': altura+'px'});
      }

  });


});
