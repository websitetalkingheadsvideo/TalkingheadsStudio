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

<header data-elementor-type="header" data-elementor-id="7" class="elementor elementor-7 elementor-location-header" data-elementor-post-type="elementor_library">
			<div class="elementor-element elementor-element-c56560b elementor-hidden-tablet elementor-hidden-mobile header e-flex e-con-boxed e-con e-parent" data-id="c56560b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-b3fd4e6 e-con-full e-flex e-con e-child" data-id="b3fd4e6" data-element_type="container">
				<div class="elementor-element elementor-element-2948284 elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="2948284" data-element_type="widget" data-widget_type="theme-site-logo.default">
				<div class="elementor-widget-container">
											<a href="/">
			<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" class="attachment-full size-full wp-image-31" alt="" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">				</a>
											</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-8a7a87f e-con-full e-flex e-con e-child" data-id="8a7a87f" data-element_type="container">
				<div class="elementor-element elementor-element-108ad57 elementor-nav-menu__align-center elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="108ad57" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg aria-hidden=\&quot;true\&quot; class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
								<nav aria-label="Menu" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
				<ul id="menu-1-108ad57" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601"><a href="/" class="elementor-item">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941"><a href="/about/" aria-current="page" class="elementor-item elementor-item-active">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766"><a href="/actors/" class="elementor-item">Actors</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767"><a href="/our-work/" class="elementor-item">Our Work</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654"><a href="/marketing/" class="elementor-item">Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939"><a href="/specials/" class="elementor-item">Specials</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768"><a href="/contact/" class="elementor-item">Contact</a></li>
</ul>			</nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
			<svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg"><path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path></svg><svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg"><path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path></svg>		</div>
					<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
				<ul id="menu-2-108ad57" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601"><a href="/" class="elementor-item" tabindex="-1">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941"><a href="/about/" aria-current="page" class="elementor-item elementor-item-active" tabindex="-1">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766"><a href="/actors/" class="elementor-item" tabindex="-1">Actors</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767"><a href="/our-work/" class="elementor-item" tabindex="-1">Our Work</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654"><a href="/marketing/" class="elementor-item" tabindex="-1">Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939"><a href="/specials/" class="elementor-item" tabindex="-1">Specials</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768"><a href="/contact/" class="elementor-item" tabindex="-1">Contact</a></li>
</ul>			</nav>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-094c366 e-con-full e-flex e-con e-child" data-id="094c366" data-element_type="container">
				<div class="elementor-element elementor-element-da4cb3c elementor-align-right main-button elementor-widget elementor-widget-button" data-id="da4cb3c" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>			</span>
									<span class="elementor-button-text">Book A Demo</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-f950a46 header-mobile elementor-hidden-desktop elementor-hidden-laptop e-flex e-con-boxed e-con e-parent" data-id="f950a46" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-4b56f5b e-con-full e-flex e-con e-child" data-id="4b56f5b" data-element_type="container">
				<div class="elementor-element elementor-element-052b3ea elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="052b3ea" data-element_type="widget" data-widget_type="theme-site-logo.default">
				<div class="elementor-widget-container">
											<a href="/">
			<img width="340" height="133" src="/wp-content/uploads/2025/06/talking-2.png" class="attachment-full size-full wp-image-31" alt="" srcset="/wp-content/uploads/2025/06/talking-2.png 340w, /wp-content/uploads/2025/06/talking-2-300x117.png 300w" sizes="(max-width: 340px) 100vw, 340px">				</a>
											</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-0d11267 e-con-full e-flex e-con e-child" data-id="0d11267" data-element_type="container">
		<div class="elementor-element elementor-element-7a12545 e-con-full e-flex e-con e-child" data-id="7a12545" data-element_type="container">
				<div class="elementor-element elementor-element-c6ff626 elementor-align-right main-button header-book elementor-widget elementor-widget-button" data-id="c6ff626" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>			</span>
									<span class="elementor-button-text">Book A Demo</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-8f1870a elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="8f1870a" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg aria-hidden=\&quot;true\&quot; class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
								<nav aria-label="Menu" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
				<ul id="menu-1-8f1870a" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601"><a href="/" class="elementor-item">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941"><a href="/about/" aria-current="page" class="elementor-item elementor-item-active">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766"><a href="/actors/" class="elementor-item">Actors</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767"><a href="/our-work/" class="elementor-item">Our Work</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654"><a href="/marketing/" class="elementor-item">Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939"><a href="/specials/" class="elementor-item">Specials</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768"><a href="/contact/" class="elementor-item">Contact</a></li>
</ul>			</nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
			<svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg"><path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path></svg><svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close" viewbox="0 0 1000 1000" xmlns="https://www.w3.org/2000/svg"><path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path></svg>		</div>
					<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
				<ul id="menu-2-8f1870a" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6601"><a href="/" class="elementor-item" tabindex="-1">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-787 current_page_item menu-item-941"><a href="/about/" aria-current="page" class="elementor-item elementor-item-active" tabindex="-1">About</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1766"><a href="/actors/" class="elementor-item" tabindex="-1">Actors</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1767"><a href="/our-work/" class="elementor-item" tabindex="-1">Our Work</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654"><a href="/marketing/" class="elementor-item" tabindex="-1">Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939"><a href="/specials/" class="elementor-item" tabindex="-1">Specials</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1768"><a href="/contact/" class="elementor-item" tabindex="-1">Contact</a></li>
</ul>			</nav>
						</div>
				</div>
				</div>
					</div>
				</div>
				</header>