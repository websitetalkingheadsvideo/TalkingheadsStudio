<?php
declare(strict_types=1);

if (!function_exists('ths_fetch_spokesperson_specials')) {
    /**
     * @return array{male: string, female: string, expires: string}
     */
    function ths_fetch_spokesperson_specials(): array
    {
        $endpoint = 'https://www.websitetalkingheads.com/featuredactor/featuredactor.xml';
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
            ],
        ]);

        $xmlString = @file_get_contents($endpoint, false, $context);
        if ($xmlString === false) {
            throw new RuntimeException('Unable to retrieve spokesperson specials feed.');
        }

        libxml_use_internal_errors(true);
        $xml = simplexml_load_string($xmlString);
        if ($xml === false) {
            $errors = array_map(static fn (\LibXMLError $error): string => trim($error->message), libxml_get_errors());
            libxml_clear_errors();
            throw new RuntimeException('Invalid spokesperson specials feed: ' . implode('; ', $errors));
        }

        $male = trim((string) ($xml->male ?? ''));
        $female = trim((string) ($xml->female ?? ''));
        $expires = trim((string) ($xml->newdate ?? ''));

        if ($male === '' || $female === '' || $expires === '') {
            throw new RuntimeException('Incomplete spokesperson specials feed response.');
        }

        return [
            'male' => $male,
            'female' => $female,
            'expires' => $expires,
        ];
    }
}

try {
    $specials = ths_fetch_spokesperson_specials();
} catch (RuntimeException $exception) {
    echo '<div class="alert alert-warning my-5" role="alert">Unable to load spokesperson specials right now. Please refresh the page or contact our team.</div>';
    return;
}
?>
<section class="py-5 bg-soft-gold">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <span class="badge-soft-teal text-uppercase small fw-semibold">Featured Talent</span>
                <h2 class="mt-3 mb-3">Spokesperson specials</h2>
                <p class="text-muted mb-4">Book one of our most requested on-camera talent and receive an extra video free when we shoot both at the same session.</p>
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body text-center">
                        <div class="text-muted text-uppercase small fw-semibold mb-1">This offer expires</div>
                        <div class="h5 mb-3">Friday, <?php echo htmlspecialchars($specials['expires'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <p class="mb-1">30 second video: <strong>$399 (41–90 words)</strong></p>
                        <p class="mb-3">60 second video: <strong>$499 (91–180 words)</strong></p>
                        <a class="btn btn-gradient" href="/order.php">Claim the BOGO offer</a>
                    </div>
                    <div class="card-footer bg-white border-0 text-muted small text-center">
                        Featured actor videos must be shot in the same session, for the same domain, using a single featured actor.
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
                    <iframe
                        src="ivideo/talking-heads-player.php?video=<?php echo rawurlencode($specials['male']); ?>&autostart=no&controls=mouse&actor=true"
                        title="<?php echo htmlspecialchars($specials['male'], ENT_QUOTES, 'UTF-8'); ?> spokesperson video"
                        allow="autoplay; fullscreen"
                        loading="lazy">
                    </iframe>
                </div>
                <div class="text-center mt-3 fw-semibold"><?php echo htmlspecialchars($specials['male'], ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
            <div class="col-lg-3">
                <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
                    <iframe
                        src="ivideo/talking-heads-player.php?video=<?php echo rawurlencode($specials['female']); ?>&autostart=no&controls=mouse&actor=true"
                        title="<?php echo htmlspecialchars($specials['female'], ENT_QUOTES, 'UTF-8'); ?> spokesperson video"
                        allow="autoplay; fullscreen"
                        loading="lazy">
                    </iframe>
                </div>
                <div class="text-center mt-3 fw-semibold"><?php echo htmlspecialchars($specials['female'], ENT_QUOTES, 'UTF-8'); ?></div>
            </div>
        </div>
    </div>
</section>
