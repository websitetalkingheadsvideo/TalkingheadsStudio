<?php
/**
 * Header Include
 * Site header with logo, navigation, and Book A Demo button
 */

if (!defined("PATH_PREFIX")) {
    require_once __DIR__ . "/config.php";
}

// Get current page URL for active menu item highlighting
$current_path = (isset($_SERVER["REQUEST_URI"]) && $_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "/";
$current_path = rtrim($current_path, "/");
if (empty($current_path)) {
    $current_path = "/";
}
?>

<header class="th-header">
	<div class="th-header-desktop">
		<div class="th-header-inner">
			<div class="th-logo">
				<a href="/">
					<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" class="attachment-full size-full wp-image-31" alt="" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">
				</a>
			</div>
			<div class="th-nav">
				<nav aria-label="Menu" class="th-nav-main">
					<ul class="th-nav-list">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601">
							<a href="/" class="th-nav-link">Home</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941">
							<a href="/about/" aria-current="page" class="th-nav-link th-nav-link-active">About</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766">
							<a href="/actors/" class="th-nav-link">Actors</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767">
							<a href="/our-work/" class="th-nav-link">Our Work</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654">
							<a href="/marketing/" class="th-nav-link">Marketing</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939">
							<a href="/specials/" class="th-nav-link">Specials</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768">
							<a href="/contact/" class="th-nav-link">Contact</a>
						</li>
					</ul>
				</nav>
				<div class="th-mobile-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
					<svg aria-hidden="true" role="presentation" class="th-mobile-toggle__icon--open" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg">
						<path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path>
					</svg>
					<svg aria-hidden="true" role="presentation" class="th-mobile-toggle__icon--close" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg">
						<path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
					</svg>
				</div>
				<nav class="th-mobile-menu" aria-hidden="true">
					<ul class="th-nav-list">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601">
							<a href="/" class="th-nav-link" tabindex="-1">Home</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941">
							<a href="/about/" aria-current="page" class="th-nav-link th-nav-link-active" tabindex="-1">About</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766">
							<a href="/actors/" class="th-nav-link" tabindex="-1">Actors</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767">
							<a href="/our-work/" class="th-nav-link" tabindex="-1">Our Work</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654">
							<a href="/marketing/" class="th-nav-link" tabindex="-1">Marketing</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939">
							<a href="/specials/" class="th-nav-link" tabindex="-1">Specials</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768">
							<a href="/contact/" class="th-nav-link" tabindex="-1">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="th-cta-button">
				<a class="th-cta-button-link" href="/contact">
					<span class="th-cta-button-content">
						<span class="th-cta-button-icon">
							<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none">
								<path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path>
							</svg>
						</span>
						<span class="th-cta-button-text">Book A Demo</span>
					</span>
				</a>
			</div>
		</div>
	</div>
	<div class="th-header-mobile">
		<div class="th-header-inner">
			<div class="th-logo">
				<a href="/">
					<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" class="attachment-full size-full wp-image-31" alt="" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">
				</a>
			</div>
			<div class="th-nav">
				<div class="th-cta-button">
					<a class="th-cta-button-link" href="/contact">
						<span class="th-cta-button-content">
							<span class="th-cta-button-icon">
								<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none">
									<path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path>
								</svg>
							</span>
							<span class="th-cta-button-text">Book A Demo</span>
						</span>
					</a>
				</div>
				<nav aria-label="Menu" class="th-nav-main">
					<ul class="th-nav-list">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601">
							<a href="/" class="th-nav-link">Home</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941">
							<a href="/about/" aria-current="page" class="th-nav-link th-nav-link-active">About</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766">
							<a href="/actors/" class="th-nav-link">Actors</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767">
							<a href="/our-work/" class="th-nav-link">Our Work</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654">
							<a href="/marketing/" class="th-nav-link">Marketing</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939">
							<a href="/specials/" class="th-nav-link">Specials</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768">
							<a href="/contact/" class="th-nav-link">Contact</a>
						</li>
					</ul>
				</nav>
				<div class="th-mobile-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
					<svg aria-hidden="true" role="presentation" class="th-mobile-toggle__icon--open" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg">
						<path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path>
					</svg>
					<svg aria-hidden="true" role="presentation" class="th-mobile-toggle__icon--close" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg">
						<path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
					</svg>
				</div>
				<nav class="th-mobile-menu" aria-hidden="true">
					<ul class="th-nav-list">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601">
							<a href="/" class="th-nav-link" tabindex="-1">Home</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941">
							<a href="/about/" aria-current="page" class="th-nav-link th-nav-link-active" tabindex="-1">About</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766">
							<a href="/actors/" class="th-nav-link" tabindex="-1">Actors</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767">
							<a href="/our-work/" class="th-nav-link" tabindex="-1">Our Work</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654">
							<a href="/marketing/" class="th-nav-link" tabindex="-1">Marketing</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939">
							<a href="/specials/" class="th-nav-link" tabindex="-1">Specials</a>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768">
							<a href="/contact/" class="th-nav-link" tabindex="-1">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
