jQuery(document).ready(function(jQuery){
	"use strict";
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 200,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offsetOpacity = 1000,
		//duration of the top scrolling animation (in ms)
		scrollTopDuration = 800,
		//grab the "back to top" link
		backToTop = jQuery('.cd-top');

	//hide or show the "back to top" link
	jQuery(window).scroll(function(){
		( jQuery(this).scrollTop() > offset ) ? backToTop.addClass('cd-is-visible') : backToTop.removeClass('cd-is-visible cd-fade-out');
		if( jQuery(this).scrollTop() > offsetOpacity ) {
			backToTop.addClass('cd-fade-out');
		}
	});

	// smooth scroll to top
	backToTop.on('click', function(event){
		event.preventDefault();
		jQuery('body,html').animate(
			{
				scrollTop: 0,
			},
			scrollTopDuration
		);
	});


	var body = document.body;
	var overlay = document.querySelector('.overlay');

	[].forEach.call(function(btt) {

		btt.addEventListener('click', function() {

			/* Detect the button class name */
			var overlayOpen = this.idName === 'trigger-overlay';

			/* Toggle the aria-hidden state on the overlay and the
					no-scroll class on the body */
			overlay.setAttribute("aria-hidden", !overlayOpen);
			body.classList.toggle("noscroll", overlayOpen);

			/* On some mobile browser when the overlay was previously
					opened and scrolled, if you open it again it doesn't
					reset its scrollTop property */
			overlay.scrollTop = 0;

		}, false);

	});

});
