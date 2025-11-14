<?php
declare(strict_types=1);

$current_year = (new DateTimeImmutable())->format('Y');

$footer_nav = [
    'Company' => [
        ['label' => 'About', 'url' => '/about.php'],
        ['label' => 'Services', 'url' => '/services.php'],
        ['label' => 'Portfolio', 'url' => '/video/'],
        ['label' => 'Insights', 'url' => '/blog/'],
    ],
    'Services' => [
        ['label' => 'Video Strategy', 'url' => '/services.php'],
        ['label' => 'Production', 'url' => '/services.php#production'],
        ['label' => 'Post-Production', 'url' => '/services.php#post'],
        ['label' => 'Distribution', 'url' => '/services.php#distribution'],
    ],
    'Video Styles' => [
        ['label' => 'Spokesperson Videos', 'url' => '/style/spokesperson.php'],
        ['label' => 'Explainer Animation', 'url' => '/style/explainer.php'],
        ['label' => 'Product Demo Videos', 'url' => '/style/product-demo.php'],
        ['label' => 'Social Media Clips', 'url' => '/style/social-clips.php'],
    ],
    'Resources' => [
        ['label' => 'Pricing Guide', 'url' => '/services.php#pricing'],
        ['label' => 'FAQs', 'url' => '/about.php#faq'],
        ['label' => 'Careers', 'url' => '/about.php#careers'],
        ['label' => 'Press Kit', 'url' => '/about.php#press'],
    ],
];

$footer_locations = [
    [
        'city' => 'Sandy, UT',
        'label' => 'Headquarters',
        'lines' => ['245 W. 9000 S.', 'Sandy, UT 84070'],
    ],
];

/**
 * Fetch awards from the awards page and return as array
 * 
 * @return array<int, array{title: string, subtitle?: string, year?: string}>
 */
function fetch_awards_from_page(): array {
    $awards_url = 'https://www.websitetalkingheads.com/awards/';
    $awards = [];
    
    // Use file_get_contents with context for HTTPS
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => 'User-Agent: Mozilla/5.0 (compatible; TalkingHeads/1.0)',
            'timeout' => 10,
        ],
    ]);
    
    $html = @file_get_contents($awards_url, false, $context);
    
    if ($html === false) {
        // Fallback awards if fetch fails
        return [
            ['title' => 'Best in Search #1 Video Spokesperson', 'subtitle' => 'Video Production', 'year' => '2024'],
            ['title' => 'Best in Search #1 Video Production', 'subtitle' => 'Video Production', 'year' => '2024'],
            ['title' => 'Best in Search #1 Video SEO', 'subtitle' => 'Video SEO', 'year' => '2024'],
            ['title' => 'Best in Search Digital Marketing', 'subtitle' => 'Digital Marketing', 'year' => '2024'],
        ];
    }
    
    // Parse HTML to extract award titles from img alt attributes
    preg_match_all('/alt="([^"]*Best in Search[^"]*)"/i', $html, $matches);
    
    if (!empty($matches[1])) {
        foreach ($matches[1] as $alt_text) {
            // Extract year if present in the HTML context
            $year = '2024'; // Default year
            $title = trim($alt_text);
            
            // Try to extract subtitle from title
            $subtitle = '';
            if (preg_match('/#1\s+(.+)/', $title, $sub_matches)) {
                $subtitle = trim($sub_matches[1]);
            } elseif (preg_match('/Best in Search\s+(.+)/', $title, $sub_matches)) {
                $subtitle = trim($sub_matches[1]);
            }
            
            $awards[] = [
                'title' => $title,
                'subtitle' => $subtitle ?: 'Award',
                'year' => $year,
            ];
        }
    }
    
    // Remove duplicates based on title
    $seen_titles = [];
    $unique_awards = [];
    foreach ($awards as $award) {
        $title_key = strtolower(trim($award['title']));
        if (!isset($seen_titles[$title_key])) {
            $seen_titles[$title_key] = true;
            $unique_awards[] = $award;
        }
    }
    $awards = $unique_awards;
    
    // If no awards found, use fallback
    if (empty($awards)) {
        return [
            ['title' => 'Best in Search #1 Video Spokesperson', 'subtitle' => 'Video Production', 'year' => '2024'],
            ['title' => 'Best in Search #1 Video Production', 'subtitle' => 'Video Production', 'year' => '2024'],
            ['title' => 'Best in Search #1 Video SEO', 'subtitle' => 'Video SEO', 'year' => '2024'],
            ['title' => 'Best in Search Digital Marketing', 'subtitle' => 'Digital Marketing', 'year' => '2024'],
        ];
    }
    
    return $awards;
}

// Fetch all available awards
$all_awards = fetch_awards_from_page();

// Select 2 random awards for display
$random_award_keys = [];
if (count($all_awards) >= 2) {
    $keys = array_rand($all_awards, 2);
    // array_rand returns array for 2+ items, but ensure it's always an array
    $random_award_keys = is_array($keys) ? $keys : [$keys];
} elseif (count($all_awards) === 1) {
    $random_award_keys = [0];
} else {
    $random_award_keys = [0, 1]; // Fallback indices
}

$footer_awards = [
    $all_awards[$random_award_keys[0]] ?? ['title' => 'Award', 'subtitle' => 'Award', 'year' => '2024'],
];
if (isset($random_award_keys[1])) {
    $footer_awards[] = $all_awards[$random_award_keys[1]] ?? ['title' => 'Award', 'subtitle' => 'Award', 'year' => '2024'];
}

$footer_social = [
    ['icon' => 'bi-linkedin', 'label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/company/talking-heads/'],
    ['icon' => 'bi-youtube', 'label' => 'YouTube', 'url' => 'https://www.youtube.com/@talkingheads'],
    ['icon' => 'bi-instagram', 'label' => 'Instagram', 'url' => 'https://www.instagram.com/talkingheads/'],
    ['icon' => 'bi-facebook', 'label' => 'Facebook', 'url' => 'https://www.facebook.com/TalkingHeadsVideo'],
];
?>
<footer class="site-footer pt-5">
    <div class="container">
        <div class="footer-top">
            <div class="row g-5">
                <div class="col-lg-4">
                    <a class="footer-brand d-inline-flex align-items-center gap-2 mb-3" href="/">
                        <span class="brand-mark rounded-circle d-inline-flex align-items-center justify-content-center">
                            <img src="/images/favicon.svg" alt="" width="22" height="22">
                        </span>
                        <span class="footer-brand-text">
                            <span class="d-block fw-semibold text-uppercase">Talking Heads</span>
                            <span class="d-block text-uppercase small text-muted">Video Studio</span>
                        </span>
                    </a>
                    <p class="footer-description">Human-first video storytellers delivering spokesperson, explainer, and product demos that convert browsers into buyers.</p>
                    <div class="d-flex flex-column gap-2 footer-contact text-secondary small">
                        <a class="footer-contact-link" href="tel:18017482281"><i class="bi bi-telephone"></i>1-801-748-2281</a>
                        <a class="footer-contact-link" href="mailto:sales@websitetalkingheads.com"><i class="bi bi-envelope"></i>sales@websitetalkingheads.com</a>
                        <span><i class="bi bi-clock"></i>Mon – Fri · 8am – 6pm MT</span>
                    </div>
                    <div class="d-flex gap-3 mt-3">
                        <?php foreach ($footer_social as $social): ?>
                            <a class="social-link" href="<?php echo htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="<?php echo htmlspecialchars($social['label'], ENT_QUOTES, 'UTF-8'); ?>">
                                <i class="bi <?php echo htmlspecialchars($social['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4 row-cols-2 row-cols-md-4 footer-nav">
                        <?php foreach ($footer_nav as $groupTitle => $links): ?>
                            <div class="col">
                                <h6 class="text-uppercase small fw-semibold mb-3"><?php echo htmlspecialchars($groupTitle, ENT_QUOTES, 'UTF-8'); ?></h6>
                                <ul class="list-unstyled d-flex flex-column gap-2">
                                    <?php foreach ($links as $link): ?>
                                        <li>
                                            <a class="footer-link" href="<?php echo htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8'); ?>">
                                                <?php echo htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8'); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-middle py-5">
            <div class="row g-4 align-items-start">
                <!-- Column 1: Locations -->
                <div class="col-lg-4">
                    <div class="row g-3 footer-locations">
                        <?php foreach ($footer_locations as $location): ?>
                            <div class="col-12">
                                <div class="footer-location-card h-100">
                                    <span class="footer-location-city"><?php echo htmlspecialchars($location['city'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <span class="footer-location-label text-secondary"><?php echo htmlspecialchars($location['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <ul class="list-unstyled text-secondary small mt-2 mb-0">
                                        <?php foreach ($location['lines'] as $line): ?>
                                            <li><?php echo htmlspecialchars($line, ENT_QUOTES, 'UTF-8'); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Column 2: Random Award 1 -->
                <div class="col-lg-4">
                    <div class="footer-awards d-grid gap-3">
                        <?php if (isset($footer_awards[0])): ?>
                            <div class="footer-award-card">
                                <span class="footer-award-year"><?php echo htmlspecialchars($footer_awards[0]['year'] ?? '2024', ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="footer-award-title"><?php echo htmlspecialchars($footer_awards[0]['title'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="footer-award-subtitle text-secondary"><?php echo htmlspecialchars($footer_awards[0]['subtitle'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Column 3: Random Award 2 -->
                <div class="col-lg-4">
                    <div class="footer-awards d-grid gap-3">
                        <?php if (isset($footer_awards[1])): ?>
                            <div class="footer-award-card">
                                <span class="footer-award-year"><?php echo htmlspecialchars($footer_awards[1]['year'] ?? '2024', ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="footer-award-title"><?php echo htmlspecialchars($footer_awards[1]['title'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="footer-award-subtitle text-secondary"><?php echo htmlspecialchars($footer_awards[1]['subtitle'] ?? '', ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom pb-4">
            <div class="d-flex flex-column flex-md-row justify-content-between gap-3 align-items-md-center text-secondary small">
                <div>&copy; <?php echo $current_year; ?> Talking Heads Video. All rights reserved.</div>
                <div class="d-flex gap-3">
                    <a class="footer-link" href="/privacy.php">Privacy Policy</a>
                    <a class="footer-link" href="/terms.php">Terms of Use</a>
                    <a class="footer-link" href="/sitemap.xml">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu"
    crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
</body>
</html>

