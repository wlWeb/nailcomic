$(function(){
  'use strict';
  var $page = $('#main'),
      options = {
        debug: true,
        prefetch: true,
        cacheLength: 4,
        onStart: {
          duration: 350, // Duration of our animation
          render: function ($container) {
            // Add your CSS animation reversing class
            $container.addClass('is-exiting');
            // Restart your animation
            smoothState.restartCSSAnimations();
          }
        },
        onReady: {
          duration: 0,
          render: function ($container, $newContent) {
            // Remove your CSS animation reversing class
            $container.removeClass('is-exiting');
            // Inject the new content
            $container.html($newContent);
          }
        }
      },
      smoothState = $page.smoothState(options).data('smoothState');
});

$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

$(document).ready(function() {
  $('#background').mouseParallax({ moveFactor: 0 });
$('#foreground').mouseParallax({ moveFactor: .1});
$('#fore-foreground').mouseParallax({ moveFactor: 1});
$('#fore-fore-foreground').mouseParallax({ moveFactor: 2});

});

$(document).ready(function() {
  $('.open-menu').on('click', function() {
     $('.overlay').addClass('open');
  });
 
  $('.close-menu').on('click', function() {
    $('.overlay').removeClass('open');
  });
});

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    $('.overlay').toggleClass('open');
    // Do something else, like open/close menu
  });


