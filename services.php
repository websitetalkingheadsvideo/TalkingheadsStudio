<?php
declare(strict_types=1);

$page_title = 'Video Services | Talking Heads Video';
$meta_description = 'Explore spokesperson, explainer, product demo, testimonial, and social video services from Talking Heads Video—human-centered stories built to convert.';
$canonical_url = 'https://www.talkingheads.video/services.php';
$body_class = 'services-page';
$structured_data = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => 'Talking Heads Video Services',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'item' => [
                '@type' => 'Service',
                'name' => 'Spokesperson Video Production',
                'url' => 'https://www.talkingheads.video/style/spokesperson.php'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'item' => [
                '@type' => 'Service',
                'name' => 'Explainer Animation',
                'url' => 'https://www.talkingheads.video/style/explainer.php'
            ]
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'item' => [
                '@type' => 'Service',
                'name' => 'Product Demo Video',
                'url' => 'https://www.talkingheads.video/style/product-demo.php'
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/showDemo.php';
require_once __DIR__ . '/includes/testimonials.php';

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="py-5">
    <div class="container">
        <div class="row align-items-center g-4 mb-5">
            <div class="col-lg-7">
                <span class="badge-soft-coral text-uppercase small fw-semibold">Our Services</span>
                <h1 class="mt-3 mb-3">Video production for every moment in your funnel</h1>
                <p class="text-muted fs-5">Mix and match spokesperson talent, animation, and live-action to create a pathway from first impression to loyal customer. Every video includes conversion-driven copywriting, accessible captions, and platform-ready cuts.</p>
            </div>
            <div class="col-lg-5">
                <div class="contact-card h-100">
                    <div class="icon mb-3">
                        <i class="bi bi-telephone-outbound-fill"></i>
                    </div>
                    <h2 class="h4">Not sure where to start?</h2>
                    <p class="text-muted">Book a strategy call and we’ll recommend a video roadmap matched to your goals, timeline, and budget.</p>
                    <a class="btn btn-gradient w-100" href="/contact.php">Schedule Strategy Call</a>
                </div>
            </div>
        </div>

        <section class="mb-5">
            <header class="mb-4">
                <h2 class="h3 mb-2">Core production services</h2>
                <p class="text-muted mb-0">Select a primary video style, then layer add-ons like scripts, motion graphics, and social variations.</p>
            </header>
            <?php ths_render_demo_cards([
                'categories' => ['services'],
                'columns' => 'col-lg-4',
                'variant' => 'card'
            ]); ?>
        </section>

        <section class="mb-5">
            <header class="mb-4">
                <h2 class="h3 mb-2">Add-on services</h2>
                <p class="text-muted mb-0">Enhance campaigns with modular add-ons designed for speed and cross-channel impact.</p>
            </header>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-highlight h-100 p-4">
                        <span class="badge-soft-teal text-uppercase small fw-semibold mb-3">Pre-production</span>
                        <h3 class="h5">Messaging &amp; script workshops</h3>
                        <p class="text-muted">Facilitated alignment on tone, customer objections, and buying triggers. Receive a ready-to-film script and talking points doc.</p>
                        <ul class="text-muted small mb-0 ps-3">
                            <li>Audience research deep-dive</li>
                            <li>Two revision rounds</li>
                            <li>Optional localization support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-highlight h-100 p-4">
                        <span class="badge-soft-coral text-uppercase small fw-semibold mb-3">Post-production</span>
                        <h3 class="h5">Social cuts &amp; testing bundles</h3>
                        <p class="text-muted">Deliverable packs for paid ads, reels, shorts, and landing pages—plus testing guidance with hooks, CTAs, and thumbnails.</p>
                        <ul class="text-muted small mb-0 ps-3">
                            <li>Platform-specific aspect ratios</li>
                            <li>Headline and CTA variant suggestions</li>
                            <li>Performance dashboard template</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <header class="mb-4 text-center">
                <span class="badge-soft-teal text-uppercase small fw-semibold">Packages</span>
                <h2 class="mt-3">Flexible bundles for every growth stage</h2>
                <p class="text-muted">Pick a package below or we’ll mix a custom roadmap that matches your launch, nurture, or retention goals.</p>
            </header>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h3 class="h5">Launch Kit</h3>
                            <p class="text-muted">Ideal for startups introducing a new offer.</p>
                            <ul class="ps-3 text-muted small">
                                <li>1 spokesperson video (2 minutes)</li>
                                <li>Script workshop + teleprompter support</li>
                                <li>3 social cutdowns</li>
                            </ul>
                            <div class="fw-semibold">$4.8K</div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <a class="btn btn-outline-teal w-100" href="/contact.php">Request Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-lg rounded-4 position-relative">
                        <span class="position-absolute top-0 start-50 translate-middle badge-soft-coral px-3 py-2 mt-3 rounded-pill">Most Popular</span>
                        <div class="card-body">
                            <h3 class="h5">Growth Engine</h3>
                            <p class="text-muted">For marketing teams optimizing funnels and paid campaigns.</p>
                            <ul class="ps-3 text-muted small">
                                <li>2 spokesperson videos &amp; 1 product demo</li>
                                <li>Full script and storyboard support</li>
                                <li>6 social variations + ad testing toolkit</li>
                            </ul>
                            <div class="fw-semibold">$9.5K</div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <a class="btn btn-gradient w-100" href="/contact.php">Book Discovery Call</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4">
                        <div class="card-body">
                            <h3 class="h5">Customer Success Suite</h3>
                            <p class="text-muted">Support success teams with evergreen training content.</p>
                            <ul class="ps-3 text-muted small">
                                <li>1 onboarding walkthrough video</li>
                                <li>FAQ microvideos (up to 8 topics)</li>
                                <li>Custom knowledge base thumbnails</li>
                            </ul>
                            <div class="fw-semibold">$7.2K</div>
                        </div>
                        <div class="card-footer bg-white border-0 pt-0">
                            <a class="btn btn-outline-teal w-100" href="/contact.php">Talk with Production</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="bg-soft-teal rounded-4 p-4 p-lg-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <h2 class="h3 mb-3">Need ongoing video support?</h2>
                        <p class="text-muted mb-0">Retainers include a dedicated producer, quarterly strategy sessions, and a flexible credit system to swap between shoots, edits, and social cuts.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <a class="btn btn-gradient" href="/contact.php">Book Retainer Consult</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <header class="text-center mb-4">
                <span class="badge-soft-teal text-uppercase small fw-semibold">Proof</span>
                <h2 class="mt-3">Teams who leveled up with Talking Heads Video</h2>
            </header>
            <?php ths_render_testimonial_carousel(['id' => 'servicesTestimonials']); ?>
        </section>
    </div>
</main>
<?php include __DIR__ . '/includes/demo-modal.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>

