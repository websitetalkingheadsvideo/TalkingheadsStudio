/**
 * Counter Animation Script
 * Animates number counters when they scroll into view
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initCounters);
	} else {
		initCounters();
	}

	function initCounters() {
		const counterNumbers = document.querySelectorAll('.th-counter-number');
		
		if (counterNumbers.length === 0) {
			return;
		}

		// Track which counters have been animated
		const animatedCounters = new Set();

		// Create IntersectionObserver to detect when counters come into view
		const observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting && !animatedCounters.has(entry.target)) {
					animateCounter(entry.target);
					animatedCounters.add(entry.target);
					observer.unobserve(entry.target);
				}
			});
		}, {
			threshold: 0.5, // Trigger when 50% of the element is visible
			rootMargin: '0px 0px -50px 0px' // Trigger slightly before fully in view
		});

		// Observe all counter numbers
		counterNumbers.forEach(function(counter) {
			observer.observe(counter);
		});
	}

	function animateCounter(counterElement) {
		const fromValue = parseFloat(counterElement.getAttribute('data-from-value')) || 0;
		const toValue = parseFloat(counterElement.getAttribute('data-to-value')) || 0;
		const duration = parseInt(counterElement.getAttribute('data-duration'), 10) || 2000;
		const delimiter = counterElement.getAttribute('data-delimiter') || '';

		if (fromValue === toValue) {
			// No animation needed, just set the value
			updateCounterValue(counterElement, toValue, delimiter);
			return;
		}

		const startTime = performance.now();
		const valueRange = toValue - fromValue;
		const isDecimal = toValue % 1 !== 0 || fromValue % 1 !== 0;

		function updateCounter(currentTime) {
			const elapsed = currentTime - startTime;
			const progress = Math.min(elapsed / duration, 1);

			// Use easing function for smooth animation (ease-out)
			const easedProgress = 1 - Math.pow(1 - progress, 3);

			const currentValue = fromValue + (valueRange * easedProgress);
			
			updateCounterValue(counterElement, currentValue, delimiter, isDecimal);

			if (progress < 1) {
				requestAnimationFrame(updateCounter);
			} else {
				// Ensure final value is exact
				updateCounterValue(counterElement, toValue, delimiter, isDecimal);
			}
		}

		requestAnimationFrame(updateCounter);
	}

	function updateCounterValue(element, value, delimiter, isDecimal) {
		let displayValue;

		if (isDecimal) {
			// For decimal values, show appropriate decimal places
			displayValue = value.toFixed(1);
		} else {
			// For whole numbers, round to nearest integer
			displayValue = Math.round(value).toString();
		}

		// Apply delimiter if specified
		if (delimiter && !isDecimal) {
			displayValue = displayValue.replace(/\B(?=(\d{3})+(?!\d))/g, delimiter);
		}

		element.textContent = displayValue;
	}
})();

