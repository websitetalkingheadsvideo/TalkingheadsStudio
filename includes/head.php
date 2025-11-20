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
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'talkingheadstudio.com';
    $uri = (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
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
	
	<!-- Emoji Support (removed WordPress dependency) -->
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
	
	<!-- External CSS files -->
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/variables.css">
	<link rel="stylesheet" href="/css/typography.css">
	<link rel="stylesheet" href="/css/layout.css">
	<link rel="stylesheet" href="/css/components.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/footer.css">
	<link rel="stylesheet" href="/css/responsive.css">
	
	<!-- Close head tag and open body tag should be in the page file after inline CSS -->
