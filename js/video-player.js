/**
 * Video Player Module
 * Handles custom video playback with overlay controls
 * Supports both .video-wrapper-talking and .testimonial-video-wrapper elements
 */

(function() {
	'use strict';

	let currentlyPlayingWrapper = null;

	/**
	 * Play a custom video, pausing any currently playing video
	 * @param {HTMLElement} container - The video wrapper container element
	 */
	function playCustomVideo(container) {
		const video = container.querySelector('.testimonial-video') || container.querySelector('video');
		const overlay = container.querySelector('.video-overlay');

		if (!video || !overlay) {
			return;
		}

		if (!overlay.classList.contains('video-hidden')) {
			// Pause any currently playing video
			if (currentlyPlayingWrapper && currentlyPlayingWrapper !== container) {
				const prevVideo = currentlyPlayingWrapper.querySelector('.testimonial-video');
				const prevOverlay = currentlyPlayingWrapper.querySelector('.video-overlay');
				if (prevVideo && !prevVideo.paused) {
					prevVideo.pause();
					if (prevOverlay) {
						prevOverlay.classList.remove('video-hidden');
					}
				}
			}

			overlay.classList.add('video-hidden');
			video.play();
			currentlyPlayingWrapper = container;
		}
	}

	/**
	 * Pause a custom video and show overlay
	 * @param {HTMLElement} container - The video wrapper container element
	 */
	function pauseCustomVideo(container) {
		const video = container.querySelector('.testimonial-video') || container.querySelector('video');
		const overlay = container.querySelector('.video-overlay');

		if (!video || !overlay) {
			return;
		}

		if (overlay.classList.contains('video-hidden') && !video.paused) {
			video.pause();
			overlay.classList.remove('video-hidden');
			if (currentlyPlayingWrapper === container) {
				currentlyPlayingWrapper = null;
			}
		}
	}

	/**
	 * Initialize video player functionality
	 */
	function initVideoPlayer() {
		// Handle .video-wrapper-talking elements (used with onclick handlers)
		const videoWrappers = document.querySelectorAll('.video-wrapper-talking');
		videoWrappers.forEach(function(wrapper) {
			// Remove onclick handler and add event listener instead
			wrapper.removeAttribute('onclick');
			const overlay = wrapper.querySelector('.video-overlay');
			const video = wrapper.querySelector('.testimonial-video') || wrapper.querySelector('video');
			
			// Click on wrapper or overlay to play
			if (overlay) {
				overlay.addEventListener('click', function() {
					playCustomVideo(wrapper);
				});
			}
			
			// Also handle clicks on the wrapper itself (but not on the video)
			wrapper.addEventListener('click', function(e) {
				// Only trigger if clicking on wrapper or overlay, not the video element
				if (e.target === wrapper || e.target === overlay || (overlay && overlay.contains(e.target))) {
					playCustomVideo(wrapper);
				}
			});
		});

		// Handle .testimonial-video-wrapper elements (used in testimonials section)
		const testimonialVideoWrappers = document.querySelectorAll('.testimonial-video-wrapper');
		testimonialVideoWrappers.forEach(function(wrapper) {
			const overlay = wrapper.querySelector('.video-overlay');
			const video = wrapper.querySelector('.testimonial-video') || wrapper.querySelector('video');
			
			// Click on overlay to play
			if (overlay) {
				overlay.addEventListener('click', function() {
					playCustomVideo(wrapper);
				});
			}

			// Click on video to pause (when playing)
			if (video) {
				video.addEventListener('click', function(e) {
					// Only pause if video is playing and overlay is hidden
					// Don't pause if clicking on native controls
					if (!video.paused && overlay && overlay.classList.contains('video-hidden')) {
						// Check if click was on controls area (bottom 20% of video)
						const rect = video.getBoundingClientRect();
						const clickY = e.clientY - rect.top;
						const controlsArea = rect.height * 0.8; // Top 80% is video area
						
						if (clickY < controlsArea) {
							pauseCustomVideo(wrapper);
						}
					}
				});
			}

			// Reset on video end
			if (video) {
				video.addEventListener('ended', function() {
					const overlay = wrapper.querySelector('.video-overlay');
					if (overlay) {
						overlay.classList.remove('video-hidden');
					}
					video.currentTime = 0;
					video.pause();
					if (currentlyPlayingWrapper === wrapper) {
						currentlyPlayingWrapper = null;
					}
				});
			}
		});
	}

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initVideoPlayer);
	} else {
		initVideoPlayer();
	}

	// Expose functions globally for backward compatibility (if needed)
	window.playCustomVideo = playCustomVideo;
	window.pauseCustomVideo = pauseCustomVideo;
})();

