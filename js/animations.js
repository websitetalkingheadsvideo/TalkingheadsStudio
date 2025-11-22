/**
 * Animations Module
 * Handles scroll-triggered animations using IntersectionObserver
 */

(function() {
	'use strict';

	/**
	 * Initialize scroll animations
	 */
	function initAnimations() {
		// Process section slide animation
		const processRow = document.querySelector('.process-row');
		if (processRow) {
			const observer = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('animate-in');
						observer.unobserve(entry.target);
					}
				});
			}, {
				threshold: 0.2,
				rootMargin: '0px 0px -100px 0px'
			});
			observer.observe(processRow);
		}

		// Steps grid scale animation
		const stepsGrid = document.querySelector('.steps-grid');
		if (stepsGrid) {
			const stepsObserver = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('animate-in');
						stepsObserver.unobserve(entry.target);
					}
				});
			}, {
				threshold: 0.2,
				rootMargin: '0px 0px -100px 0px'
			});
			stepsObserver.observe(stepsGrid);
		}
	}

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initAnimations);
	} else {
		initAnimations();
	}
})();

