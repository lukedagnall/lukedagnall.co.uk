(function($) {
  "use strict";

  $(document).ready(function() {
    loadFunctions()
  });


  function loadFunctions() {

    $(function() {

    	// Get the form.
    	var form = $('form');

    	// Get the messages div.
    	var formMessages = $('#form-messages');

    	// Set up an event listener for the contact form.
    	$(form).submit(function(e) {
    		// Stop the browser from submitting the form.
    		e.preventDefault();

    		// Serialize the form data.
    		var formData = $(form).serialize();

    		// Submit the form using AJAX.
    		$.ajax({
    			type: 'POST',
    			url: $(form).attr('action'),
    			data: formData
    		})
    		.done(function(response) {
    			// Make sure that the formMessages div has the 'success' class.
    			$(formMessages).removeClass('error');
    			$(formMessages).addClass('success');

    			// Set the message text.
    			$(formMessages).text(response);

    			// Clear the form.
    			$('#name').val('');
    			$('#email').val('');
    			$('#message').val('');
    		})
    		.fail(function(data) {
    			// Make sure that the formMessages div has the 'error' class.
    			$(formMessages).removeClass('success');
    			$(formMessages).addClass('error');

    			// Set the message text.
    			if (data.responseText !== '') {
    				$(formMessages).text(data.responseText);
    			} else {
    				$(formMessages).text('Oops! An error occured and your message could not be sent.');
    			}
    		});

    	});

    });

    $('.work-tile').hover(
      function(){
        $(this).toggleClass('tile-swipe');

        $(this).find('.work-tile__img').fadeToggle(80);
      }
    );

    $('.footer-cta').waypoint(function(direction){
      $(this.element).addClass('reveal');
    }, {
      offset: '100%;'
    });

    $('.work-tile').waypoint(function(direction){
      if ($(this.element).hasClass('work-tile--yellow')) {
        $(this.element).parent().addClass('reveal reveal--yellow');
      }else{
        $(this.element).parent().addClass('reveal');
      }
    }, {
      offset: '100%;'
    });

    var deviceHeight = $(window).height();

    if ($('.banner').css('height') == '100vh') {
      $(this).css('height', deviceHeight);
    }

    setTimeout("$('.swipeloader__element').css('z-index','-1');", 900);


    $('a[href*=\\#]').on('click', function smoothScroll(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top + -90}, 600);
    });


    $(function() {
      $(window).resize(function(){

        if ($(window).width() >= 1024) {
          $('.mobile-nav').css('display', 'none');
          $('.site-nav__items').css('display', 'block');

          if ($('.mobile-nav').hasClass('open-nav')) {
            $('.mobile-nav').removeClass('open-nav');
          }
        } else if ($(window).width() < 1024) {
          $('.mobile-nav').css('display', 'block');
          $('.site-nav__items').css('display', 'none');
        }

      });

      $('.mobile-nav').on('click', function() {

        if (!$(this).hasClass('open-nav')) {
          $(this).addClass('open-nav');
          toggleNav(true);
        } else {
          $(this).removeClass('open-nav');
          toggleNav(false);
        }

      });

      function toggleNav(bool) {

        if (bool === true) {
          $('.site-nav__items').addClass('slide');
          $('.site-nav__items > a').addClass('slide')
        } else {
          $('.site-nav__items').removeClass('slide');
          $('.site-nav__items > a').removeClass('slide');
        }

      }
    });
  }

    $(function(){
      'use strict';
      var $page = $('#main'),
          options = {
            debug: true,
            prefetch: true,
            cacheLength: 2,
            forms: 'form',
            onStart: {
              duration:  250, // Duration of our animation
              render: function ($container) {
                // Add your CSS animation reversing class
                $container.addClass('is-exiting');
                $('.swipeloader__element--slideInRight').css('z-index','8');
                $('.swipeloader__element--fadeOut').css('display','none');
                // Restart your animation
                //smoothState.restartCSSAnimations();
              }
            },
            onReady: {
                  duration: 0,
                  render: function($container, $newContent) {
                      // Remove your CSS animation reversing class
                      //$container.removeClass("is-exiting");
                      //$('.swipeloader__element--slideInRight').css('z-index','7');
                      //$('.swipeloader__element--fadeOut').css('z-index','8');
                      // Inject the new content
                      $container.html($newContent);
                  }
              },
              onAfter: function($container) {
                $container.removeClass('is-exiting');
                loadFunctions();
              }
          },
          smoothState = $("#main").smoothState(options).data("smoothState");
        });


  })(jQuery);
