<?php
declare(strict_types=1);

$page_title = 'Video Marketing Insights | Talking Heads Video Blog';
$meta_description = 'Read the latest video marketing insights from Talking Heads Video covering spokesperson strategy, explainers, conversion tips, and production workflows.';
$canonical_url = 'https://www.talkingheads.video/blog/';
$body_class = 'blog-page';
$structured_data = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Blog',
    'name' => $page_title,
    'url' => $canonical_url
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$posts = [
    [
        'title' => 'How Video Builds Trust and Converts Viewers',
        'excerpt' => 'Trust is the new currency. See how warm spokesperson videos and human-first storytelling help brands close more deals.',
        'author' => 'Maya Thompson',
        'date' => '2025-01-22',
        'url' => '/blog/how-video-builds-trust.php',
        'category' => 'Strategy'
    ],
    [
        'title' => 'Why Spokesperson Videos Still Work in 2025',
        'excerpt' => 'AI avatars are everywhere, but real people still win. Here’s why spokesperson videos outperform synthetic alternatives.',
        'author' => 'Andre Collins',
        'date' => '2024-12-15',
        'url' => '/blog/spokesperson-videos-2025.php',
        'category' => 'Production'
    ],
    [
        'title' => 'Design a Product Demo That Closes Deals',
        'excerpt' => 'Turn your product walkthrough into a guided journey that answers objections and accelerates decisions.',
        'author' => 'Priya Kapoor',
        'date' => '2024-11-08',
        'url' => '/blog/product-demo-that-converts.php',
        'category' => 'Enablement'
    ]
];

include __DIR__ . '/../includes/header.php';
?>
<main id="main-content" class="py-5">
    <div class="container">
        <header class="mb-5 text-center">
            <span class="badge-soft-teal text-uppercase small fw-semibold">Insights</span>
            <h1 class="mt-3 mb-3">Ideas for warm, conversion-winning video</h1>
            <p class="text-muted fs-5">Practical guidance for marketing, sales, and success teams shipping spokesperson, explainer, and testimonial videos.</p>
        </header>
        <div class="row g-4">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body d-flex flex-column">
                            <span class="badge-soft-coral text-uppercase small fw-semibold mb-3"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <h2 class="h5">
                                <a class="stretched-link text-decoration-none text-dark" href="<?php echo htmlspecialchars($post['url'], ENT_QUOTES, 'UTF-8'); ?>">
                                    <?php echo htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </h2>
                            <p class="text-muted flex-grow-1"><?php echo htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="d-flex align-items-center justify-content-between text-muted small mt-3">
                                <span><?php echo htmlspecialchars($post['author'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <time datetime="<?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?>">
                                    <?php echo date('M j, Y', strtotime($post['date'])); ?>
                                </time>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>

