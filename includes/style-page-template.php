<?php
declare(strict_types=1);

if (!function_exists('ths_render_style_page')) {
    /**
     * @param array{
     *     title: string,
     *     subtitle: string,
     *     intro: string,
     *     video: string,
     *     video_thumbnail?: string,
     *     video_duration?: string,
     *     benefits: array<int, array{title: string, description: string}>,
     *     stats?: array<int, array{value: string, label: string, detail?: string}>,
     *     faqs: array<int, array{question: string, answer: string}>,
     *     cta: array{title: string, body: string, primary_label: string, primary_href: string, secondary_label: string, secondary_href: string},
     *     related_categories?: array<int, string>
     * } $config
     */
    function ths_render_style_page(array $config): void
    {
        $title = $config['title'];
        $subtitle = $config['subtitle'];
        $intro = $config['intro'];
        $video = $config['video'];
        $benefits = $config['benefits'];
        $faqs = $config['faqs'];
        $cta = $config['cta'];
        $related_categories = $config['related_categories'] ?? [];
        $stats = $config['stats'] ?? [];

        require_once __DIR__ . '/showDemo.php';

        echo '<main id="main-content" class="py-5">';
        echo '<div class="container">';
        echo '<div class="row g-5 align-items-center mb-5">';
        echo '<div class="col-lg-6">';
        echo '<span class="badge-soft-teal text-uppercase small fw-semibold">Video Style</span>';
        echo '<h1 class="mt-3 mb-3">' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</h1>';
        echo '<p class="fs-5 text-muted">' . htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<p class="text-muted">' . htmlspecialchars($intro, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<div class="d-flex flex-column flex-sm-row gap-3 mt-4">';
        echo '<a class="btn btn-gradient" href="' . htmlspecialchars($cta['primary_href'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($cta['primary_label'], ENT_QUOTES, 'UTF-8') . '</a>';
        echo '<a class="btn btn-outline-teal" href="' . htmlspecialchars($cta['secondary_href'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($cta['secondary_label'], ENT_QUOTES, 'UTF-8') . '</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-lg-6">';
        echo '<div class="video-embed shadow-lg">';
        echo '<iframe src="' . htmlspecialchars($video, ENT_QUOTES, 'UTF-8') . '" title="' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . ' sample video" allow="autoplay; fullscreen; picture-in-picture" loading="lazy"></iframe>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        if ($stats !== []) {
            echo '<div class="row g-4 mb-5">';
            foreach ($stats as $stat) {
                echo '<div class="col-md-4">';
                echo '<div class="card-highlight h-100 p-4">';
                echo '<div class="display-5 fw-semibold mb-2">' . htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8') . '</div>';
                echo '<div class="fw-semibold">' . htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8') . '</div>';
                if (isset($stat['detail'])) {
                    echo '<div class="text-muted small mt-2">' . htmlspecialchars($stat['detail'], ENT_QUOTES, 'UTF-8') . '</div>';
                }
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }

        echo '<section class="mb-5">';
        echo '<header class="mb-4">';
        echo '<h2 class="h3">Why it works</h2>';
        echo '<p class="text-muted mb-0">Every deliverable is optimized to keep viewers engaged and motivate the desired action.</p>';
        echo '</header>';
        echo '<div class="row g-4">';
        foreach ($benefits as $benefit) {
            echo '<div class="col-md-4">';
            echo '<div class="card-highlight h-100 p-4">';
            echo '<h3 class="h5">' . htmlspecialchars($benefit['title'], ENT_QUOTES, 'UTF-8') . '</h3>';
            echo '<p class="text-muted mb-0">' . htmlspecialchars($benefit['description'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</section>';

        if ($related_categories !== []) {
            echo '<section class="mb-5">';
            echo '<header class="mb-4">';
            echo '<h2 class="h3">Pair it with</h2>';
            echo '<p class="text-muted mb-0">Combine this video style with complementary formats for a full-funnel experience.</p>';
            echo '</header>';
            ths_render_demo_cards([
                'categories' => $related_categories,
                'columns' => 'col-lg-4',
                'variant' => 'compact',
                'limit' => 3
            ]);
            echo '</section>';
        }

        echo '<section class="faq-accordion mb-5">';
        echo '<h2 class="h3 mb-4">Frequently asked questions</h2>';
        echo '<div class="accordion" id="styleFaq">';
        foreach ($faqs as $index => $faq) {
            $itemId = 'faqItem' . $index;
            $headingId = 'heading' . $index;
            $expanded = $index === 0 ? 'true' : 'false';
            $showClass = $index === 0 ? ' show' : '';
            echo '<div class="accordion-item">';
            echo '<h3 class="accordion-header" id="' . htmlspecialchars($headingId, ENT_QUOTES, 'UTF-8') . '">';
            echo '<button class="accordion-button' . ($index !== 0 ? ' collapsed' : '') . '" type="button" data-bs-toggle="collapse" data-bs-target="#' . htmlspecialchars($itemId, ENT_QUOTES, 'UTF-8') . '" aria-expanded="' . $expanded . '" aria-controls="' . htmlspecialchars($itemId, ENT_QUOTES, 'UTF-8') . '">';
            echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8');
            echo '</button>';
            echo '</h3>';
            echo '<div id="' . htmlspecialchars($itemId, ENT_QUOTES, 'UTF-8') . '" class="accordion-collapse collapse' . $showClass . '" aria-labelledby="' . htmlspecialchars($headingId, ENT_QUOTES, 'UTF-8') . '" data-bs-parent="#styleFaq">';
            echo '<div class="accordion-body">' . htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') . '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</section>';

        echo '<section class="py-5">';
        echo '<div class="bg-white rounded-4 shadow-lg p-4 p-lg-5">';
        echo '<h2 class="h3 mb-3">' . htmlspecialchars($cta['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
        echo '<p class="text-muted mb-4">' . htmlspecialchars($cta['body'], ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<div class="d-flex flex-column flex-sm-row gap-3">';
        echo '<a class="btn btn-gradient" href="' . htmlspecialchars($cta['primary_href'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($cta['primary_label'], ENT_QUOTES, 'UTF-8') . '</a>';
        echo '<a class="btn btn-outline-teal" href="' . htmlspecialchars($cta['secondary_href'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($cta['secondary_label'], ENT_QUOTES, 'UTF-8') . '</a>';
        echo '</div>';
        echo '</div>';
        echo '</section>';

        echo '</div>';
        echo '</main>';
        include __DIR__ . '/demo-modal.php';
    }
}

