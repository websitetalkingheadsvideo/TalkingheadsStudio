/**
 * Header JavaScript
 * Mobile menu toggle functionality for site header
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initHeader);
	} else {
		initHeader();
	}

	function initHeader() {
		const mobileToggles = document.querySelectorAll('.th-mobile-toggle');
		const mobileMenus = document.querySelectorAll('.th-mobile-menu');

		if (mobileToggles.length === 0 || mobileMenus.length === 0) {
			return;
		}

		// Initialize each mobile toggle
		mobileToggles.forEach(function(toggle) {
			// Find the associated mobile menu (sibling nav element)
			const navContainer = toggle.closest('.th-nav');
			const menu = navContainer ? navContainer.querySelector('.th-mobile-menu') : null;

			if (!menu) {
				return;
			}

			// Set initial state
			updateMenuState(toggle, menu, false);

			// Click handler
			toggle.addEventListener('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
				const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
				updateMenuState(toggle, menu, !isExpanded);
			});

			// Keyboard handler (Enter and Space)
			toggle.addEventListener('keydown', function(e) {
				if (e.key === 'Enter' || e.key === ' ') {
					e.preventDefault();
					e.stopPropagation();
					const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
					updateMenuState(toggle, menu, !isExpanded);
				} else if (e.key === 'Escape') {
					e.preventDefault();
					e.stopPropagation();
					updateMenuState(toggle, menu, false);
				}
			});

			// Close menu when clicking outside
			document.addEventListener('click', function(e) {
				if (!toggle.contains(e.target) && !menu.contains(e.target)) {
					if (toggle.getAttribute('aria-expanded') === 'true') {
						updateMenuState(toggle, menu, false);
					}
				}
			});

			// Close menu on window resize if it's open and we're above mobile breakpoint
			let resizeTimer;
			window.addEventListener('resize', function() {
				clearTimeout(resizeTimer);
				resizeTimer = setTimeout(function() {
					if (window.innerWidth > 1024) {
						if (toggle.getAttribute('aria-expanded') === 'true') {
							updateMenuState(toggle, menu, false);
						}
					}
				}, 250);
			});
		});

		// Close menu when a nav link is clicked (for mobile)
		mobileMenus.forEach(function(menu) {
			const links = menu.querySelectorAll('.th-nav-link');
			links.forEach(function(link) {
				link.addEventListener('click', function() {
					const navContainer = menu.closest('.th-nav');
					const toggle = navContainer ? navContainer.querySelector('.th-mobile-toggle') : null;
					if (toggle && toggle.getAttribute('aria-expanded') === 'true') {
						updateMenuState(toggle, menu, false);
					}
				});
			});
		});
	}

	function updateMenuState(toggle, menu, isExpanded) {
		if (!toggle || !menu) {
			return;
		}

		toggle.setAttribute('aria-expanded', isExpanded);
		menu.setAttribute('aria-hidden', !isExpanded);

		// Update tabindex for accessibility
		const links = menu.querySelectorAll('.th-nav-link');
		links.forEach(function(link) {
			if (isExpanded) {
				link.removeAttribute('tabindex');
			} else {
				link.setAttribute('tabindex', '-1');
			}
		});

		// Prevent body scroll when menu is open
		if (isExpanded) {
			document.body.style.overflow = 'hidden';
		} else {
			document.body.style.overflow = '';
		}
	}
})();

