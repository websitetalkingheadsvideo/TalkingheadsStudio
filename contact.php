<?php
declare(strict_types=1);

$page_title = 'Contact Talking Heads Video | Start Your Video Project';
$meta_description = 'Connect with Talking Heads Video to plan spokesperson, explainer, product demo, or testimonial videos that elevate your brand.';
$canonical_url = 'https://www.talkingheads.video/contact.php';
$body_class = 'contact-page';
$structured_data = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => $page_title,
    'url' => $canonical_url,
    'contactOption' => 'TollFree',
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+1-801-748-2281',
        'contactType' => 'sales',
        'email' => 'hello@talkingheads.video'
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <span class="badge-soft-teal text-uppercase small fw-semibold">Let's collaborate</span>
                <h1 class="mt-3 mb-3">Tell us about your next video idea</h1>
                <p class="text-light fs-5">Share a few details and we'll schedule a friendly call to map your video goals, timeline, and success metrics.</p>
                <div class="pipedriveWebForms" data-pd-webforms="https://webforms.pipedrive.com/f/64N8Yh5LjLa3zsJpStC8kImEOZckKBW30BIUXgC2yNZ5gGRbmBb63rrcxGiSsmoA5d">
                    <script src="https://webforms.pipedrive.com/f/loader"></script>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-card mb-4">
                    <div class="icon mb-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h2 class="h4">Our location</h2>
                    <ul class="list-unstyled text-light small">
                        <li class="mb-3">
                            <strong>Headquarters</strong><br>
                            245 W. 9000 S.<br>
                            Sandy, UT 84070
                        </li>
                    </ul>
                </div>
                <div class="card-highlight p-4">
                    <h2 class="h5">Direct lines</h2>
                    <ul class="list-unstyled text-light small mb-3">
                        <li class="mb-2"><i class="bi bi-telephone me-2 text-teal"></i><a class="text-decoration-none text-light" href="tel:8017482281">(801) 748-2281</a></li>
                        <li class="mb-2"><i class="bi bi-envelope me-2 text-teal"></i><a class="text-decoration-none text-light" href="mailto:hello@talkingheads.video">Contacttalkingheads.video</a></li>
                        <li><i class="bi bi-calendar-event me-2 text-teal"></i><a class="text-decoration-none text-light" href="https://calendly.com/talkingheads">Book on Calendly</a></li>
                    </ul>
                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.6068470978116!2d-111.90827372360946!3d40.55773164602698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8752802b141e5931%3A0xe7f9a821a3d1d40!2s10808%20S%20River%20Front%20Pkwy%2C%20South%20Jordan%2C%20UT%2084095!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" title="Talking Heads Video map" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>

