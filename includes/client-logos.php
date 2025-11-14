<?php
declare(strict_types=1);

if (!function_exists('ths_client_logos')) {
    /**
     * @return array<int, array{name: string, src: string}>
     */
    function ths_client_logos(): array
    {
        return [
            ['name' => 'Uber', 'src' => '/images/logos/uber.svg'],
            ['name' => 'Amazon', 'src' => '/images/logos/amazon.svg'],
            ['name' => 'HubSpot', 'src' => '/images/logos/hubspot.svg'],
            ['name' => 'Google', 'src' => '/images/logos/google.svg'],
            ['name' => 'Clear', 'src' => '/images/logos/clear.svg'],
            ['name' => 'Toast', 'src' => '/images/logos/toast.svg']
        ];
    }
}

$logos = ths_client_logos();
?>
<div class="logo-strip">
    <?php foreach ($logos as $logo): ?>
        <div class="logo-strip-item">
            <?php
            $svgPath = __DIR__ . '/..' . $logo['src'];
            if (file_exists($svgPath)) {
                $svgContent = file_get_contents($svgPath);
                echo $svgContent;
            } else {
                echo '<img src="' . htmlspecialchars($logo['src'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($logo['name'], ENT_QUOTES, 'UTF-8') . ' logo" loading="lazy">';
            }
            ?>
        </div>
    <?php endforeach; ?>
</div>

