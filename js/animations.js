/**
 * Animations Module
 * Handles scroll-triggered animations using IntersectionObserver
 * Supports multiple animation types: from-left, from-right, from-bottom, scale-up, fade-in
 */

(function() {
	'use strict';

	/**
	 * Check if user prefers reduced motion
	 */
	function prefersReducedMotion() {
		return window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	}

	/**
	 * Initialize section reveal animations
	 */
	function initSectionAnimations() {
		// Skip animations if user prefers reduced motion
		if (prefersReducedMotion()) {
			// Still add animate-in class for any sections that need it for layout, but skip animations
			document.querySelectorAll('section[data-animate]').forEach(function(section) {
				section.classList.add('animate-in');
			});
			return;
		}

		// Observer options - mobile-friendly thresholds
		// Using lower threshold and larger rootMargin to catch sections earlier
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};

		// Create a single observer for all sections
		const observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('animate-in');
					// Unobserve after animation triggers (performance optimization)
					observer.unobserve(entry.target);
				}
			});
		}, observerOptions);

		// Observe all sections with data-animate attribute
		const animatedSections = document.querySelectorAll('section[data-animate]');
		animatedSections.forEach(function(section) {
			// Check if section is already in viewport on load
			const rect = section.getBoundingClientRect();
			const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;
			
			if (isInViewport) {
				// Section is already visible, trigger animation immediately
				section.classList.add('animate-in');
			} else {
				// Section is not in viewport, observe it
				observer.observe(section);
			}
		});

		// Legacy support: Keep existing specific animations
		// Process section slide animation
		const processRow = document.querySelector('.process-row');
		if (processRow && !processRow.hasAttribute('data-animate')) {
			const processObserver = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('animate-in');
						processObserver.unobserve(entry.target);
					}
				});
			}, observerOptions);
			processObserver.observe(processRow);
		}

		// Steps grid scale animation
		const stepsGrid = document.querySelector('.steps-grid');
		if (stepsGrid && !stepsGrid.closest('section[data-animate]')) {
			// Check if steps-grid is already in viewport on load
			const rect = stepsGrid.getBoundingClientRect();
			const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;
			
			if (isInViewport) {
				// Already visible, trigger animation immediately
				stepsGrid.classList.add('animate-in');
			} else {
				// Not in viewport, observe it
				const stepsObserver = new IntersectionObserver(function(entries) {
					entries.forEach(function(entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('animate-in');
							stepsObserver.unobserve(entry.target);
						}
					});
				}, observerOptions);
				stepsObserver.observe(stepsGrid);
			}
		}
	}

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initSectionAnimations);
	} else {
		initSectionAnimations();
	}
})();

