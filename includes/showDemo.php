<?php
declare(strict_types=1);

if (!function_exists('ths_demo_catalog')) {
    /**
     * @return array<string, array{title: string, description: string, categories: array<int, string>, thumbnail: string, video?: string, url: string, highlight?: string}>
     */
    function ths_demo_catalog(): array
    {
        return [
            'spokesperson' => [
                'title' => 'Spokesperson Videos',
                'description' => 'Put a friendly face to your brand with polished spokesperson videos that boost trust and lift conversions.',
                'categories' => ['featured', 'homepage', 'services'],
                'thumbnail' => '/images/demos/spokesperson.svg',
                'video' => 'https://player.vimeo.com/video/926104810?h=3c1f4fc768',
                'url' => '/style/spokesperson.php',
                'highlight' => 'Most Popular'
            ],
            'explainer' => [
                'title' => 'Explainer Animation',
                'description' => 'Unpack complex ideas with playful, on-brand animation that keeps viewers captivated from hook to CTA.',
                'categories' => ['featured', 'homepage', 'services'],
                'thumbnail' => '/images/demos/explainer.svg',
                'video' => 'https://player.vimeo.com/video/926104824?h=dbe20bf5e6',
                'url' => '/style/explainer.php'
            ],
            'product-demo' => [
                'title' => 'Product Demo Videos',
                'description' => 'Guide prospects through your product experience and show the “aha!” moment that sparks adoption.',
                'categories' => ['featured', 'homepage', 'services'],
                'thumbnail' => '/images/demos/product-demo.svg',
                'video' => 'https://player.vimeo.com/video/926104861?h=a7b2a95310',
                'url' => '/style/product-demo.php'
            ],
            'social-clips' => [
                'title' => 'Social Media Clips',
                'description' => 'Stop the scroll with quick, platform-ready cuts built for paid ads, reels, and organic engagement.',
                'categories' => ['homepage', 'services'],
                'thumbnail' => '/images/demos/social-clips.svg',
                'url' => '/style/social-clips.php'
            ],
            'testimonials' => [
                'title' => 'Customer Testimonials',
                'description' => 'Let your happiest customers describe the results—genuine stories that persuade without the hard sell.',
                'categories' => ['services'],
                'thumbnail' => '/images/demos/testimonials.svg',
                'url' => '/style/testimonials.php'
            ],
            'training' => [
                'title' => 'Training & Onboarding',
                'description' => 'Keep teams aligned with polished internal videos that make learning actionable and repeatable.',
                'categories' => ['services'],
                'thumbnail' => '/images/demos/training.svg',
                'url' => '/style/training.php'
            ]
        ];
    }
}

if (!function_exists('ths_filter_demo_catalog')) {
    /**
     * @param array<string, array<string, mixed>> $catalog
     * @param array<int, string> $filters
     * @return array<string, array<string, mixed>>
     */
    function ths_filter_demo_catalog(array $catalog, array $filters): array
    {
        if ($filters === []) {
            return $catalog;
        }

        $filtered = [];
        foreach ($catalog as $slug => $demo) {
            $hasMatch = count(array_intersect($demo['categories'], $filters)) > 0;
            if ($hasMatch) {
                $filtered[$slug] = $demo;
            }
        }
        return $filtered;
    }
}

if (!function_exists('ths_render_demo_cards')) {
    /**
     * Render demo cards based on shared catalog.
     *
     * @param array{categories?: array<int, string>, limit?: int, columns?: string, variant?: string} $config
     */
    function ths_render_demo_cards(array $config): void
    {
        $catalog = ths_demo_catalog();
        $categories = $config['categories'] ?? [];
        $limit = $config['limit'] ?? 0;
        $columns = $config['columns'] ?? 'col-md-6 col-xl-4';
        $variant = $config['variant'] ?? 'card';

        $demos = ths_filter_demo_catalog($catalog, $categories);
        if ($limit > 0) {
            $demos = array_slice($demos, 0, $limit, true);
        }

        if ($demos === []) {
            echo '<div class="alert alert-warning">No demo videos found.</div>';
            return;
        }

        echo '<div class="row g-4">';
        foreach ($demos as $slug => $demo) {
            $cardClasses = $variant === 'compact' ? 'card h-100 border-0 shadow-sm' : 'card-highlight h-100';
            $badge = $demo['highlight'] ?? '';
            echo '<div class="col-12 ' . htmlspecialchars($columns, ENT_QUOTES, 'UTF-8') . '">';
            echo '<article class="' . $cardClasses . '">';
            if (isset($demo['thumbnail'])) {
                echo '<div class="ratio ratio-16x9">';
                echo '<img src="' . htmlspecialchars($demo['thumbnail'], ENT_QUOTES, 'UTF-8') . '" class="object-fit-cover" alt="' . htmlspecialchars($demo['title'], ENT_QUOTES, 'UTF-8') . ' thumbnail" loading="lazy">';
                echo '</div>';
            }
            echo '<div class="card-body d-flex flex-column">';
            if ($badge !== '') {
                echo '<span class="badge-soft-teal text-uppercase small mb-3">' . htmlspecialchars($badge, ENT_QUOTES, 'UTF-8') . '</span>';
            }
            echo '<h3 class="h5">' . htmlspecialchars($demo['title'], ENT_QUOTES, 'UTF-8') . '</h3>';
            echo '<p class="text-muted flex-grow-1">' . htmlspecialchars($demo['description'], ENT_QUOTES, 'UTF-8') . '</p>';

            $ctaLabel = 'View Style';
            if ($slug === 'spokesperson') {
                $ctaLabel = 'See Spokesperson Videos';
            } elseif ($slug === 'explainer') {
                $ctaLabel = 'Explore Explainers';
            } elseif ($slug === 'product-demo') {
                $ctaLabel = 'Watch Product Demos';
            }

            echo '<div class="d-flex justify-content-between align-items-center mt-3">';
            echo '<a class="link-chevron stretched-link" href="' . htmlspecialchars($demo['url'], ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($ctaLabel, ENT_QUOTES, 'UTF-8') . ' <i class="bi bi-arrow-right"></i></a>';
            if (isset($demo['video'])) {
                echo '<button class="btn btn-sm btn-outline-teal" type="button" data-bs-toggle="modal" data-bs-target="#demoModal" data-demo-video="' . htmlspecialchars($demo['video'], ENT_QUOTES, 'UTF-8') . '" data-demo-title="' . htmlspecialchars($demo['title'], ENT_QUOTES, 'UTF-8') . '">Watch Sample</button>';
            }
            echo '</div>';
            echo '</div>';
            echo '</article>';
            echo '</div>';
        }
        echo '</div>';
    }
}

