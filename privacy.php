<?php
declare(strict_types=1);

$page_title = 'Privacy Policy | Talking Heads Video';
$meta_description = 'Understand how Talking Heads Video collects, uses, and protects your information when you engage with our video production services.';
$canonical_url = 'https://www.talkingheads.video/privacy.php';
$body_class = 'legal-page';
$structured_data = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $page_title,
    'url' => $canonical_url
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="py-5">
    <div class="container">
        <article class="mx-auto blog-article">
            <h1 class="mb-4"><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="text-muted">Effective date: January 1, 2025</p>
            <p>Talking Heads Video (“we,” “us,” or “our”) respects your privacy. This policy explains what information we collect, why we collect it, and how we protect it.</p>
            <h2>Information we collect</h2>
            <p>We collect information that you voluntarily share with us, such as contact details and project requirements submitted through our forms, along with analytics data that helps us improve the site experience.</p>
            <h2>How we use information</h2>
            <p>We use your information to respond to inquiries, deliver video services, and share updates you’ve opted into. We never sell your personal information.</p>
            <h2>Cookies and tracking</h2>
            <p>We use cookies to understand site performance and personalize content. You can control cookies through your browser settings.</p>
            <h2>Data security</h2>
            <p>We implement administrative, technical, and physical safeguards to protect your data against unauthorized access.</p>
            <h2>Your rights</h2>
            <p>You may request access to, correction of, or deletion of your personal information by contacting <a href="mailto:privacy@talkingheads.video">privacy@talkingheads.video</a>.</p>
            <h2>Contact</h2>
            <p>For questions about this policy, email <a href="mailto:privacy@talkingheads.video">privacy@talkingheads.video</a>.</p>
        </article>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>

