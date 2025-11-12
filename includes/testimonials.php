<?php
declare(strict_types=1);

if (!function_exists('ths_testimonials')) {
    /**
     * @return array<int, array{name: string, title: string, company: string, quote: string}>
     */
    function ths_testimonials(): array
    {
        return [
            [
                'name' => 'Kayla Little',
                'title' => 'Marketing Manager',
                'company' => 'Brightway Labs',
                'quote' => 'Talking Heads Video made our product launch effortless. The spokesperson videos felt like our own team welcoming new customers.'
            ],
            [
                'name' => 'Robert Panasiuk',
                'title' => 'CTO',
                'company' => 'NimbusIQ',
                'quote' => 'The collaboration was seamless from start to finish. They turned complex messaging into a warm, human story that resonated immediately.'
            ],
            [
                'name' => 'Veronica Felix Wong',
                'title' => 'Global Marketing Director',
                'company' => 'Atlas Systems',
                'quote' => 'We saw a 42% lift in demo requests within two weeks. Their videos are the secret sauce behind our new conversion funnel.'
            ]
        ];
    }
}

if (!function_exists('ths_render_testimonial_carousel')) {
    /**
     * @param array<string, mixed> $config
     */
    function ths_render_testimonial_carousel(array $config): void
    {
        $testimonials = ths_testimonials();
        $carousel_id = $config['id'] ?? 'testimonialCarousel';

        echo '<div id="' . htmlspecialchars($carousel_id, ENT_QUOTES, 'UTF-8') . '" class="carousel slide testimonial-carousel" data-bs-ride="carousel">';
        echo '<div class="carousel-inner">';

        foreach ($testimonials as $index => $testimonial) {
            $activeClass = $index === 0 ? ' active' : '';
            echo '<div class="carousel-item' . $activeClass . '">';
            echo '<div class="testimonial-card p-4 p-lg-5">';
            echo '<div class="quote-mark mb-3">&ldquo;</div>';
            echo '<p class="fs-5 mb-4">' . htmlspecialchars($testimonial['quote'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '<div class="fw-semibold">' . htmlspecialchars($testimonial['name'], ENT_QUOTES, 'UTF-8') . '</div>';
            echo '<div class="text-muted small">' . htmlspecialchars($testimonial['title'], ENT_QUOTES, 'UTF-8') . ' &mdash; ' . htmlspecialchars($testimonial['company'], ENT_QUOTES, 'UTF-8') . '</div>';
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
        echo '<div class="carousel-indicators position-static mt-4">';
        foreach ($testimonials as $index => $testimonial) {
            $activeAttr = $index === 0 ? ' class="active" aria-current="true"' : '';
            echo '<button type="button" data-bs-target="#' . htmlspecialchars($carousel_id, ENT_QUOTES, 'UTF-8') . '" data-bs-slide-to="' . $index . '"' . $activeAttr . ' aria-label="Slide ' . ($index + 1) . '"></button>';
        }
        echo '</div>';
        echo '</div>';
    }
}

