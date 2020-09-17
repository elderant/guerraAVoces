( function( $ ) {
  function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
  } 
  
  // var checkOffsetMenu = function (className) {
  //   var topOfWindow = $(window).scrollTop();
    
  //   return function () {
  //     var $this = $(this), 
  //       imagePos = $this.offset().top,
  //       imageEnd = $this.height() + $this.offset().top,
  //       menuClass = $this.attr('data-menu');

      
  //     $('#masthead #menu-main-menu .menu-item.' + menuClass).toggleClass(className, (imagePos < topOfWindow + 50 && imageEnd > topOfWindow));
  //     $this.toggleClass(className, (imagePos < topOfWindow + 50 && imageEnd > topOfWindow));
  //   };
  // }

  //************** Window Scroll ************************//
	$(window).on( 'scroll', function(){});

  //************** Document Ready ************************//
  $(document).ready(function () {
    if($('header#masthead').length > 0) {
      // $('header .navbar-toggler').on('click', function(event) {
      //   let $toggler = $(event.currentTarget);
      //   $toggler.parents("header#masthead").toggleClass('show');
      // });

      if($('.page-home').length > 0) {
        "use strict";
        $('a[href*="https://guerraavoces.co/#"]').bind('click', function(e) {
          e.preventDefault();        
          var target = $(this).attr("href"); //Get the target
          var id = target.substring(24);
          // console.log(id);
          // perform animated scrolling by getting top-position of target-element and set it as scroll target
          $('html, body').stop().animate({ scrollTop: $(id).offset().top }, 2000, function() {
            location.hash = id;
          });
              
          return false;
        });
      }
    }
  });
} (jQuery) );