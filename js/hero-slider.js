/**
 * Hero Slider Module
 * Handles the hero slider carousel with autoplay, pause on hover, and infinite loop
 */

(function() {
	'use strict';

	/**
	 * Initialize hero slider
	 */
	function initHeroSlider() {
		const root = document.getElementById('thHeroSlider');
		if (!root) {
			return;
		}

		const viewport = root.querySelector('.thh-viewport');
		const track = root.querySelector('.thh-track');
		if (!viewport || !track) {
			return;
		}

		const slides = Array.from(track.children);
		if (slides.length === 0) {
			return;
		}

		// Clone first slide for infinite loop
		track.appendChild(slides[0].cloneNode(true));

		let index = 0;
		let timer = null;
		let paused = false;
		const css = getComputedStyle(document.documentElement);
		const speed = parseInt(css.getPropertyValue('--th-speed-ms'), 10) || 600;
		const delay = parseInt(css.getPropertyValue('--th-autoplay-ms'), 10) || 2500;

		const getWidth = function() {
			return viewport.clientWidth;
		};
		
		const go = function(i) {
			index = i;
			track.style.transition = 'transform ' + speed + 'ms var(--th-ease)';
			track.style.transform = 'translateX(' + (-index * getWidth()) + 'px)';
		};

		const next = function() {
			if (paused) {
				return;
			}
			go(index + 1);
			if (index > slides.length - 1) {
				setTimeout(function() {
					track.style.transition = 'none';
					index = 0;
					track.style.transform = 'translateX(0)';
				}, speed + 20);
			}
		};

		const start = function() {
			stop();
			timer = setInterval(next, delay);
		};

		const stop = function() {
			if (timer) {
				clearInterval(timer);
			}
		};

		// Pause on hover (check data attribute, default to true if attribute exists)
		const pauseOnHover = viewport.getAttribute('data-pause-on-hover');
		if (pauseOnHover === 'true' || pauseOnHover === '' || pauseOnHover === null) {
			viewport.addEventListener('mouseenter', function() {
				paused = true;
			});
			viewport.addEventListener('mouseleave', function() {
				paused = false;
			});
		}

		// Handle resize
		let resizeTimeout;
		window.addEventListener('resize', function() {
			clearTimeout(resizeTimeout);
			resizeTimeout = setTimeout(function() {
				track.style.transition = 'none';
				track.style.transform = 'translateX(' + (-index * getWidth()) + 'px)';
			}, 120);
		});

		// Start the slider
		start();
	}

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initHeroSlider);
	} else {
		initHeroSlider();
	}
})();

