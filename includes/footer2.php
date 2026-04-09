<?php
/**
 * Footer (Bootstrap-friendly markup + shared footer.css tokens). Scripts: footer-scripts.php.
 */

if (!defined("PATH_PREFIX")) {
	require_once __DIR__ . "/config.php";
}

$th_footer2_year = (int) date("Y");

$th_footer2_quick = [
	["href" => "/", "label" => "Home"],
	["href" => "/about/", "label" => "About"],
	["href" => "/actors/", "label" => "Actors"],
	["href" => "/our-work/", "label" => "Our Work"],
	["href" => "/marketing/", "label" => "Marketing"],
	["href" => "/specials/", "label" => "Specials"],
	["href" => "/contact/", "label" => "Contact"],
];

$th_footer2_services = [
	["href" => "/our-services/vsl-and-presentations/", "label" => "VSL and Presentations"],
	["href" => "/our-services/3d-and-2d-animation/", "label" => "3D and 2D Animation"],
	["href" => "/our-services/whiteboard-videos/", "label" => "Whiteboard Videos"],
	["href" => "/our-services/motion-graphics/", "label" => "Motion Graphics"],
	["href" => "/our-services/funny-ads/", "label" => "Funny Ads"],
	["href" => "/our-services/product-demos/", "label" => "Product Demos"],
];
?>

<footer class="site-footer site-footer-bs">
	<div class="footer-inner">
		<div class="footer-bs-grid">
			<div class="footer-column footer-brand-column">
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
				<div class="footer-logo footer-logo--under-social">
					<a href="/">
						<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" class="footer-logo-image" alt="Talking Heads Logo" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">
					</a>
				</div>
			</div>

			<div class="footer-column footer-nav-column">
				<h4 class="footer-heading">Quick menu</h4>
				<nav class="footer-nav" aria-label="Footer Navigation">
					<ul class="footer-nav-list">
						<?php foreach ($th_footer2_quick as $th_item) { ?>
							<?php
							$th_href = $th_item["href"];
							$th_footer_link_class = "footer-link";
							if ($th_href === "/contact/") {
								$th_footer_link_class = "footer-link footer-link--accent";
							}
							?>
							<li>
								<a class="<?php echo htmlspecialchars($th_footer_link_class, ENT_QUOTES, "UTF-8"); ?>" href="<?php echo htmlspecialchars($th_href, ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($th_item["label"], ENT_QUOTES, "UTF-8"); ?></a>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>

			<div class="footer-column footer-services-column">
				<h4 class="footer-heading">Services</h4>
				<nav class="footer-nav" aria-label="Footer Services">
					<ul class="footer-nav-list">
						<?php foreach ($th_footer2_services as $th_item) { ?>
							<li>
								<a class="footer-link" href="<?php echo htmlspecialchars($th_item["href"], ENT_QUOTES, "UTF-8"); ?>"><?php echo htmlspecialchars($th_item["label"], ENT_QUOTES, "UTF-8"); ?></a>
							</li>
						<?php } ?>
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

		<div class="footer-bottom d-flex flex-column flex-lg-row align-items-center align-items-lg-center justify-content-lg-between gap-3 gap-lg-4">
			<div class="footer-legal text-center text-lg-start">
				<p class="mb-0">© <?php echo $th_footer2_year; ?> Talking Heads. All Rights Reserved | <a href="/privacy-policy" class="footer-link">Privacy Policy</a> | Terms of Service</p>
			</div>
			<div class="footer-cta text-center text-lg-end">
				<a href="/contact/" class="footer-cta-link d-inline-flex align-items-center flex-row" aria-label="Let's collaborate">
					<h2 class="footer-cta-title mb-0">Let's <span class="mp-gradient-text">collaborate</span></h2>
					<svg class="footer-cta-icon flex-shrink-0" xmlns="https://www.w3.org/2000/svg" width="64" height="65" viewBox="0 0 64 65" fill="none" aria-hidden="true"><path d="M53.352 18.4602L7.52816 65L0 57.3542L45.8185 10.8144L5.43582 10.8144V0L64 0V59.4792H53.352V18.4602Z" fill="#D07E01"></path></svg>
				</a>
			</div>
		</div>
	</div>
</footer>
