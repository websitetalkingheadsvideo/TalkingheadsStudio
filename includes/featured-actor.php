<?php
declare(strict_types=1);

if (!function_exists('ths_default_featured_actor')) {
    /**
     * @return array{name: string, role: string, quote: string, image: string, video: string}
     */
    function ths_default_featured_actor(): array
    {
        return [
            'name' => 'Jamie Rivera',
            'role' => 'Lead Spokesperson',
            'quote' => '“We deliver approachable videos that help your brand feel like a warm conversation, not a sales script.”',
            'image' => '/images/featured-actor-jamie.svg',
            'video' => 'https://player.vimeo.com/video/926104810?h=3c1f4fc768'
        ];
    }
}

$featured_actor = $featured_actor ?? ths_default_featured_actor();
?>
<section class="featured-actor py-5 py-lg-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <span class="badge-soft-teal text-uppercase small fw-semibold">Featured Talent</span>
                <h2 class="mt-3 mb-3">Meet <?php echo htmlspecialchars($featured_actor['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p class="text-muted mb-4"><?php echo htmlspecialchars($featured_actor['quote'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="d-flex align-items-center gap-3">
                    <div class="actor-avatar rounded-circle overflow-hidden">
                        <img class="img-fluid" src="<?php echo htmlspecialchars($featured_actor['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($featured_actor['name'], ENT_QUOTES, 'UTF-8'); ?>">
                    </div>
                    <div>
                        <div class="fw-semibold"><?php echo htmlspecialchars($featured_actor['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="text-muted small"><?php echo htmlspecialchars($featured_actor['role'], ENT_QUOTES, 'UTF-8'); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="video-embed shadow-lg">
                    <iframe src="<?php echo htmlspecialchars($featured_actor['video'], ENT_QUOTES, 'UTF-8'); ?>" title="Featured spokesperson video" loading="lazy" allow="autoplay; fullscreen; picture-in-picture"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

