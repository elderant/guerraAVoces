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
  
  var guerra_handle_navbar_events = function($toggler) {
    $toggler.toggleClass('collapsed'); 
    let $mainNav = $toggler.parents("header#masthead").find('#main-nav');
    if($mainNav.hasClass('collapse')) {
      $mainNav.removeClass('collapse');
      $mainNav.toggleClass('collapsing');
      setTimeout(function(){
        $mainNav.toggleClass('show');
        setTimeout(function() {
          $mainNav.toggleClass('collapsing');
        },1000)
      }, 50);

      let $content = $toggler.parents("header#masthead").siblings('#content');
      $content.toggleClass('menu-dispayed');
    }
    else if($mainNav.hasClass('show')){
      $mainNav.toggleClass('collapsing');
      $mainNav.toggleClass('show');
      setTimeout(function(){
        $mainNav.toggleClass('collapse');
        $mainNav.toggleClass('collapsing');
      }, 1000);

      let $content = $toggler.parents("header#masthead").siblings('#content');
      $content.toggleClass('menu-dispayed');
    }
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
      $('header .wp-child-navbar-toggler').on('click', function(event) {
        let $toggler = $(event.currentTarget);
        guerra_handle_navbar_events($toggler);
      });
    
      $('header #main-nav a.nav-link').on('click', function(event) {
        if(window.innerWidth < 1200) {
          let $toggler = $(event.currentTarget).parents('#main-nav').siblings('.wp-child-navbar-toggler');
          guerra_handle_navbar_events($toggler);
        }
      }); 
    
      // smooth scrolling
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

    if($('#audiobook').length > 0) {
      $('#audiobook .slick-next').on('click', function(){
        var id = "#audiobook";
        $('html, body').stop().animate({ scrollTop: $(id).offset().top }, 1000, function() {
          location.hash = id;
        });
      });
    }

  });
} (jQuery) );