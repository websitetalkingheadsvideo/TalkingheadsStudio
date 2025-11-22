<?php
/**
 * Footer Include
 * Site footer with social links, navigation, and footer scripts
 */

if (!defined("PATH_PREFIX")) {
    require_once __DIR__ . "/config.php";
}
?>

<footer class="site-footer">
	<div class="footer-inner">
		<div class="footer-top">
			<div class="footer-column footer-social-column">
				<h4 class="footer-heading">Follow Us</h4>
				<div class="footer-social" role="list">
					<a class="footer-social-link" href="https://www.facebook.com/websitetalkingheads/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
						<span class="screen-reader-text">Facebook</span>
						<svg aria-hidden="true" viewbox="0 0 320 512" xmlns="https://www.w3.org/2000/svg"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
					</a>
					<a class="footer-social-link" href="https://x.com/TalkingHeadsVid" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
						<span class="screen-reader-text">Twitter</span>
						<svg aria-hidden="true" viewbox="0 0 512 512" xmlns="https://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
					</a>
					<a class="footer-social-link" href="https://www.instagram.com/websitevideopro/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
						<span class="screen-reader-text">Instagram</span>
						<svg aria-hidden="true" viewbox="0 0 448 512" xmlns="https://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
					</a>
					<a class="footer-social-link" href="https://www.youtube.com/channel/UCKV3naM0IK4nbPDoUR1Yu7A" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
						<span class="screen-reader-text">YouTube</span>
						<svg aria-hidden="true" viewbox="0 0 576 512" xmlns="https://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
					</a>
					<a class="footer-social-link" href="https://www.linkedin.com/company/websitetalkingheads.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
						<span class="screen-reader-text">LinkedIn</span>
						<svg aria-hidden="true" viewbox="0 0 448 512" xmlns="https://www.w3.org/2000/svg"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
					</a>
				</div>
			</div>
			
			<div class="footer-column footer-logo-column">
				<div class="footer-logo">
					<a href="/">
						<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" class="footer-logo-image" alt="Talking Heads Logo" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">
					</a>
				</div>
			</div>
			
			<div class="footer-column footer-nav-column">
				<h4 class="footer-heading">Quick menu</h4>
				<nav class="footer-nav" aria-label="Footer Navigation">
					<ul class="footer-nav-list">
						<li class="menu-item"><a href="/" class="footer-link">Home</a></li>
						<li class="menu-item"><a href="/about/" class="footer-link">About</a></li>
						<li class="menu-item"><a href="/actors/" class="footer-link">Actors</a></li>
						<li class="menu-item"><a href="/our-work/" class="footer-link">Our Work</a></li>
						<li class="menu-item"><a href="/marketing/" class="footer-link">Marketing</a></li>
						<li class="menu-item"><a href="/specials/" class="footer-link">Specials</a></li>
						<li class="menu-item"><a href="/contact/" class="footer-link">Contact</a></li>
					</ul>
				</nav>
			</div>
			
			<div class="footer-column footer-services-column">
				<h4 class="footer-heading">Services</h4>
				<nav class="footer-nav" aria-label="Footer Services">
					<ul class="footer-nav-list">
						<li class="menu-item"><a href="/our-services/vsl-and-presentations/" class="footer-link">VSL and Presentations</a></li>
						<li class="menu-item"><a href="/our-services/3d-and-2d-animation/" class="footer-link">3D and 2D Animation</a></li>
						<li class="menu-item"><a href="/our-services/whiteboard-videos/" class="footer-link">Whiteboard Videos</a></li>
						<li class="menu-item"><a href="/our-services/motion-graphics/" class="footer-link">Motion Graphics</a></li>
						<li class="menu-item"><a href="/our-services/funny-ads/" class="footer-link">Funny Ads</a></li>
						<li class="menu-item"><a href="/our-services/product-demos/" class="footer-link">Product Demos</a></li>
					</ul>
				</nav>
			</div>
			
			<div class="footer-column footer-contact-column">
				<h4 class="footer-heading">Get in Touch</h4>
				<ul class="footer-contact-list">
					<li class="footer-contact-item">
						<a href="tel:801-748-2281" class="footer-link">801-748-2281</a>
					</li>
					<li class="footer-contact-item">
						<a href="mailto:sales@websitetalkingheads.com" class="footer-link">sales@websitetalkingheads.com</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="footer-legal">
				<p>© 2025 Talking Heads. All Rights Reserved | <a href="/privacy-policy" class="footer-link">Privacy Policy</a> | Terms of Service</p>
			</div>
			<div class="footer-cta">
				<a href="/contact/" class="footer-cta-link" aria-label="Let's collaborate">
					<svg class="footer-cta-icon" xmlns="https://www.w3.org/2000/svg" width="64" height="65" viewbox="0 0 64 65" fill="none"><path d="M53.352 18.4602L7.52816 65L0 57.3542L45.8185 10.8144L5.43582 10.8144V0L64 0V59.4792H53.352V18.4602Z" fill="#D07E01"></path></svg>
					<h2 class="footer-cta-title">Let's <span class="mp-gradient-text">collaborate</span></h2>
				</a>
			</div>
		</div>
	</div>
</footer>

<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/hello-elementor\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<script id="rtrar.appLocal-js-extra">
var rtafr = {"rules":""};
</script>
<script src="/wp-content/plugins/real-time-auto-find-and-replace/assets/js/rtafar.local.js?ver=1.7.8" id="rtrar.appLocal-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js?ver=3.0.0" id="custom-jquery-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js?ver=0.9.1" id="jquery-modal-js"></script>
<script src="/wp-content/themes/hello-elementor/assets/js/hello-frontend.js?ver=3.4.5" id="hello-theme-frontend-js"></script>
<script src="/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.33.0" id="elementor-webpack-runtime-js"></script>
<script src="/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.33.0" id="elementor-frontend-modules-js"></script>
<script src="/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1440,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},
"hasCustomBreakpoints":true},"version":"3.33.0","is_static":false,"experimentalFeatures":{"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"nested-elements":true,"home_screen":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"cloud-library":true,"e_opt_in_v4_page":true,"import-export-customization":true,"e_pro_variables":true},"urls":{"assets":"\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"\/wp-admin\/admin-ajax.php","uploadUrl":"\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"1b4224abbc"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_laptop"],"viewport_laptop":1440,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":787,"title":"About%20-%20Video%20Agency","excerpt":"","featuredImage":false}};
</script>
<script src="/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.33.0" id="elementor-frontend-js"></script>
<script src="/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1" id="smartmenus-js"></script>
<script src="/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1" id="jquery-numerator-js"></script>
<script src="/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5" id="swiper-js"></script>
<script src="/wp-content/plugins/real-time-auto-find-and-replace/assets/js/rtafar.app.min.js?ver=1.7.8" id="rtrar.app-js"></script>
<script src="/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/prime-slider-site.min.js?ver=4.0.5" id="prime-slider-site-js"></script>
<script src="/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.33.1" id="elementor-pro-webpack-runtime-js"></script>
<script src="/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
<script src="/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"\/wp-admin\/admin-ajax.php","nonce":"5860563553","urls":{"assets":"\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"\/wp-json\/"},"settings":{"lazy_load_background_images":false},"popup":{"hasPopUps":true},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},
"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src="/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.33.1" id="elementor-pro-frontend-js"></script>
<script src="/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.33.1" id="pro-elements-handlers-js"></script>
<script src="js/video-player.js"></script>
