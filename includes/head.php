<?php
/**
 * Head Section Include
 * Contains meta tags, title logic, and CSS/JS includes
 * 
 * Set these variables before including:
 * - $page_title (default: SITE_NAME)
 * - $page_description (default: SITE_DESCRIPTION)
 * - $canonical_url (default: current page URL)
 * - $og_image (optional: Open Graph image URL)
 * - $og_type (default: 'website')
 * - $page_inline_styles (optional: page-specific inline CSS)
 */

if (!defined('PATH_PREFIX')) {
    require_once __DIR__ . '/config.php';
}

// Set defaults if not provided
if (!isset($page_title)) {
    $page_title = SITE_NAME;
} else {
    $page_title = htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8');
}

if (!isset($page_description)) {
    $page_description = SITE_DESCRIPTION;
} else {
    $page_description = htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8');
}

if (!isset($canonical_url)) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'vbn.talkingheads.video';
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $canonical_url = $protocol . '://' . $host . $uri;
} else {
    $canonical_url = htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8');
}

if (!isset($og_type)) {
    $og_type = 'website';
}

if (!isset($og_image)) {
    $og_image = SITE_URL . 'wp-content/uploads/2025/06/talking-2.png';
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head><meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	
	<!-- This site is optimized with the Yoast SEO plugin v26.3 - https://yoast.com/wordpress/plugins/seo/ -->
	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $page_description; ?>">
	<link rel="canonical" href="<?php echo $canonical_url; ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="<?php echo $og_type; ?>">
	<meta property="og:title" content="<?php echo $page_title; ?>">
	<meta property="og:description" content="<?php echo $page_description; ?>">
	<meta property="og:url" content="<?php echo $canonical_url; ?>">
	<meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
	<?php if (isset($og_image)): ?>
	<meta property="og:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">
	<?php endif; ?>
	<meta name="twitter:card" content="summary_large_image">
	
	<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
	<link rel="alternate" type="application/rss+xml" title="Video Agency » Feed" href="<?php echo PATH_PREFIX; ?>feed/">
	<link rel="alternate" type="application/rss+xml" title="Video Agency » Comments Feed" href="<?php echo PATH_PREFIX; ?>comments/feed/">
	
	<!-- WordPress Emoji Support -->
	<script>
	window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"<?php echo PATH_PREFIX; ?>wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3"}};
	/*! This file is auto-generated */
	!function(s,n){var o,i,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),a=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===a[t]})}function u(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);for(var n=e.getImageData(16,16,1,1),a=0;a<n.data.length;a++)if(0!==n.data[a])return!1;return!0}function f(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\udedf")}return!1}function g(e,t,n,a){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):s.createElement("canvas"),o=r.getContext("2d",{willReadFrequently:!0}),i=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(function(e){i[e]=t(o,e,n,a)}),i}function t(e){var t=s.createElement("script");t.src=e,t.defer=!0,s.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",i=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){s.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+g.toString()+"("+[JSON.stringify(i),f.toString(),p.toString(),u.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"}),r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=function(e){c(n=e.data),r.terminate(),t(n)})}catch(e){}c(n=g(i,f,p,u))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
	</script>
	<style id="wp-emoji-styles-inline-css">
	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	</style>
	
	<!-- External CSS files will be included here after extraction -->
	<!-- For now, page-specific inline CSS should be added after this include -->
	
	<!-- Close head tag and open body tag should be in the page file after inline CSS -->
