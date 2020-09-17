( function( $ ) {
  /**
  * Disables all links and changes cursor for the website, used in ajax calls.
  */
  var webStateWaiting = function(waiting){
    if(waiting) {
      $('body').css('cursor', 'progress');
    }
    else {
      $('body').css('cursor', 'default');
    }
    
    $('a').each(function() {
      if(!$(this).hasClass('disabled') && waiting && !$(this).hasClass('language-option') && !$(this).hasClass('menu-end-post-denominacion-a')) {
        $(this).addClass('disabled');	
      }
      else if ($(this).hasClass('disabled') && !waiting && !$(this).hasClass('language-option') && !$(this).hasClass('menu-end-post-denominacion-a')) {
        $(this).removeClass('disabled');
      }
    });
  }

  $(document).ready(function () {
    if($('#audiobook').length > 0){
      //audio book carousel
      $('#audiobook .carousel-container').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        vertical: true,
        verticalSwiping: true,
        prevArrow: '#audiobook .slick-prev',
        nextArrow: '#audiobook .slick-next',
      });
    }

    if($('#research').length > 0){
      //audio book carousel
      $('#research .carousel-container').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '#research .slick-prev',
        nextArrow: '#research .slick-next',
      });
    }

    if($('#team').length > 0){
      //audio book carousel
      $('#team .carousel-container').slick({
        infinite: false,
        slidesToShow: 7,
        slidesToScroll: 7,
        prevArrow: '#team .slick-prev',
        nextArrow: '#team .slick-next',
      });
    }


  });

  $(window).scroll(function () {});

} (jQuery) );