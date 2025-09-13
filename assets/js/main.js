/*
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Touch mode.
		if (browser.mobile)
			$body.addClass('is-touch');

	// Scrolly links.
		$('.scrolly').scrolly({
			speed: 2000
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			alignment: 'right',
			hideDelay: 350
		});


	// Parallax.
	// Disabled on IE (choppy scrolling) and mobile platforms (poor performance).
		if (browser.name == 'ie'
		||	browser.mobile) {

			$.fn._parallax = function() {

				return $(this);

			};

		}
		else {

			$.fn._parallax = function() {

				$(this).each(function() {

					var $this = $(this),
						on, off;

					on = function() {

						$this
							.css('background-position', 'center 0px');

						$window
							.on('scroll._parallax', function() {

								var pos = parseInt($window.scrollTop()) - parseInt($this.position().top);

								$this.css('background-position', 'center ' + (pos * -0.15) + 'px');

							});

					};

					off = function() {

						$this
							.css('background-position', '');

						$window
							.off('scroll._parallax');

					};

					breakpoints.on('<=medium', off);
					breakpoints.on('>medium', on);

				});

				return $(this);

			};

			$window
				.on('load resize', function() {
					$window.trigger('scroll');
				});

		}

	
})(jQuery);

document.querySelector(".menu_icon").addEventListener("click", ()=>{
    document.querySelector(".menu").style.top = "0px"
    document.querySelector(".close").style.top = "40px"
})

document.querySelector(".menu").addEventListener("click", ()=>{
    document.querySelector(".menu").style.top = "-100%"
    document.querySelector(".close").style.top = "-100%"
})

document.querySelector(".close").addEventListener("click", ()=>{
    document.querySelector(".menu").style.top = "-100%"
    document.querySelector(".close").style.top = "-100%"
})


//-------------- javascript for animations --------------


  document.addEventListener("DOMContentLoaded", () => {
	const sections = document.querySelectorAll(".service_home, .service_mue, .service_mue_ph, .service_gym");
  
	const observer = new IntersectionObserver((entries) => {
	  entries.forEach((entry) => {
		if (entry.isIntersecting) {
		  entry.target.classList.add("show");
		}
	  });
	}, {
	  threshold: 0.3,  // Trigger when 30% of the section is visible
	});
  
	sections.forEach((section) => observer.observe(section));
  });
  