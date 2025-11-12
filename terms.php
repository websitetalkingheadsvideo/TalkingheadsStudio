<?php
declare(strict_types=1);

$page_title = 'Terms of Use | Talking Heads Video';
$meta_description = 'Review the terms of use governing Talking Heads Video’s website, services, and content.';
$canonical_url = 'https://www.talkingheads.video/terms.php';
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
            <h2>Acceptance of terms</h2>
            <p>By accessing or using this website, you agree to these terms. If you do not agree, please discontinue use immediately.</p>
            <h2>Use of content</h2>
            <p>All text, graphics, logos, and media are owned or licensed by Talking Heads Video. You may not reproduce or distribute content without written permission.</p>
            <h2>Service engagements</h2>
            <p>Statements on this site are informational and do not constitute a binding proposal. Statements of work signed with clients supersede website content.</p>
            <h2>Limitation of liability</h2>
            <p>We provide the site “as-is” and do not guarantee uninterrupted access. We are not liable for damages arising from use of the site.</p>
            <h2>Updates</h2>
            <p>We may update these terms periodically. Continued use after updates constitutes acceptance of the revised terms.</p>
            <h2>Contact</h2>
            <p>Questions about these terms? Contact <a href="mailto:legal@talkingheads.video">legal@talkingheads.video</a>.</p>
        </article>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>

