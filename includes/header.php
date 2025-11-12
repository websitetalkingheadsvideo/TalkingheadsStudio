<?php
declare(strict_types=1);

$page_title = $page_title ?? 'Talking Heads Video';
$meta_description = $meta_description ?? 'Talking Heads Video creates warm, human-focused spokesperson, explainer, and product demo videos that convert browsers into buyers.';
$canonical_url = $canonical_url ?? '';
$og_image = $og_image ?? '/images/og-default.jpg';
$structured_data = $structured_data ?? '';
$body_class = $body_class ?? '';
$preload_assets = $preload_assets ?? [];

if (!function_exists('ths_render_preload_links')) {
    /**
     * Helper to print link tags for assets that should be preloaded.
     *
     * @param array<int, array{href: string, as: string, type?: string}> $assets
     */
    function ths_render_preload_links(array $assets): void
    {
        foreach ($assets as $asset) {
            $href = htmlspecialchars($asset['href'], ENT_QUOTES, 'UTF-8');
            $as = htmlspecialchars($asset['as'], ENT_QUOTES, 'UTF-8');
            $type = $asset['type'] ?? '';
            $typeAttr = $type !== '' ? ' type="' . htmlspecialchars($type, ENT_QUOTES, 'UTF-8') . '"' : '';
            echo '<link rel="preload" href="' . $href . '" as="' . $as . '"' . $typeAttr . '>';
        }
    }
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
<?php if ($canonical_url !== ''): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
<?php endif; ?>
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url !== '' ? $canonical_url : ($_SERVER['REQUEST_SCHEME'] ?? 'https') . '://' . ($_SERVER['HTTP_HOST'] ?? 'talkingheads.video') . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
    <link rel="stylesheet" href="/css/style.css">
<?php ths_render_preload_links($preload_assets); ?>
<?php if ($structured_data !== ''): ?>
    <script type="application/ld+json">
        <?php echo $structured_data; ?>
    </script>
<?php endif; ?>
</head>
<body class="<?php echo htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8'); ?>">
<div id="splash-screen" class="splash-screen">
    <div class="splash-inner">
        <div class="splash-logo">
            <img src="/images/Talking%20Heads%20Video.png" alt="Talking Heads Video logo" loading="lazy">
        </div>
        <div class="splash-progress">
            <div class="splash-bar"></div>
        </div>
        <p class="splash-tagline mb-0">Human-first video storytellers</p>
    </div>
</div>
<div id="preloader" class="preloader-backdrop"></div>
<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.svg" class="navbar-logo" alt="Talking Heads Video">
                <span class="visually-hidden">Talking Heads Video</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/video/">Our Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services.php">Video Production</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services.php#industries">Industries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#use-cases">Use Cases</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-2 ms-lg-4">
                    <a class="btn btn-outline-light" href="/video/">Watch Showreel</a>
                    <a class="btn btn-primary btn-gradient" href="/contact.php">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>
</header>

