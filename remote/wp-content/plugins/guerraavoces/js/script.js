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

  var checkOffset = function (className) {
    var topOfWindow = $(window).scrollTop();
    
    return function () {
      var $this = $(this),
        imagePos = $this.offset().top;

      if($(window).width() > 768) {
        $this.toggleClass(className, (imagePos < topOfWindow + 900));
      }
      else {
        $this.toggleClass(className, (imagePos < topOfWindow + 1250));
      }
    };
  }

  $(document).ready(function () {
    $('.page-home section .title').each(checkOffset('animated fadeIn'));
    
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
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 401,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
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
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 5
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          }
        ]
      });
    }


  });

  $(window).scroll(function () {
    $('.page-home section .title').each(checkOffset('animated fadeIn'));
    $('.page-home section .subtitle').each(checkOffset('animated fadeIn'));
    $('#contact .description').each(checkOffset('animated fadeIn'));
    
    $('#book .first-description-row, #book .third-description-row').each(checkOffset('animated slideInRight'));
    $('#book .second-description-row').each(checkOffset('animated slideInLeft'));

    $('#research .research-image-row img').each(checkOffset('animated flipInY'));

    $('#closing img').each(checkOffset('animated slideInDown'));
    
    $('#contact .content-row').each(checkOffset('animated bounceIn'));
  });

} (jQuery) );