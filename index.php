<?php
declare(strict_types=1);

$page_title = 'Talking Heads Video | Warm Video Production That Converts';
$meta_description = 'Talking Heads Video produces spokesperson, explainer, and product demo videos with a friendly tone, making it effortless for your audience to trust and take action.';
$canonical_url = 'https://www.talkingheads.video/';
$body_class = 'home-page';
$structured_data = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'Talking Heads Video',
    'url' => $canonical_url,
    'logo' => 'https://www.talkingheads.video/images/logo.svg',
    'sameAs' => [
        'https://www.linkedin.com/company/talking-heads/',
        'https://www.youtube.com/@talkingheads',
        'https://www.instagram.com/talkingheads/',
        'https://www.facebook.com/TalkingHeadsVideo'
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+1-801-748-2281',
        'contactType' => 'sales',
        'areaServed' => 'US'
    ],
    'foundingDate' => '2007'
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/showDemo.php';
require_once __DIR__ . '/includes/testimonials.php';

include __DIR__ . '/includes/header.php';
?>
<main id="main-content">
    <section class="hero-landing position-relative">
        <div class="hero-pattern" aria-hidden="true"></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-xl-6">
                    <span class="hero-eyebrow text-uppercase">Global Video Production Agency</span>
                    <h1 class="hero-title display-4 fw-bold">Bringing Ideas to Life, One Frame at a Time</h1>
                    <p class="hero-lede">We produce spokesperson, explainer, and product demo videos that combine strategy with warmth—turning curious browsers into ready buyers.</p>
                    <div class="d-flex flex-wrap gap-3 hero-ctas">
                        <a class="btn btn-gradient btn-lg" href="/contact.php">Get a Quote</a>
                        <button class="btn btn-outline-light btn-lg d-inline-flex align-items-center gap-2" type="button" data-bs-toggle="modal" data-bs-target="#demoModal" data-demo-video="https://player.vimeo.com/video/980932378?h=1596f1d46b" data-demo-title="Video Solutions">
                            <i class="bi bi-play-fill"></i>
                            Watch Showreel
                        </button>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-3 g-3 mt-4 hero-stats">
                        <div class="col">
                            <div class="hero-stat-card">
                                <span class="hero-stat-value">300+</span>
                                <span class="hero-stat-label">Brands scaled with video</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hero-stat-card">
                                <span class="hero-stat-value">21 day</span>
                                <span class="hero-stat-label">Average launch timeline</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hero-stat-card">
                                <span class="hero-stat-value">42%</span>
                                <span class="hero-stat-label">Lift in conversion on average</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="hero-video-card position-relative">
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/980932378?h=1596f1d46b&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Video Solutions"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                        <div class="hero-video-badge shadow-lg">
                            <div class="d-flex align-items-center gap-3">
                                <div class="stat-badge">
                                    <i class="bi bi-award-fill fs-4"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-semibold">Award-winning storytellers</span>
                                    <span class="d-block text-muted small">Trusted by enterprise leaders and fast-growing startups.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experience-section py-5">
        <div class="container">
            <div class="experience-card">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <span class="section-eyebrow">Our experience</span>
                        <h2 class="mb-3">Talking Heads Video works with teams of every size.</h2>
                        <p class="text-secondary">From SaaS innovators to enterprise marketing teams, our process scales to meet your launch goals and keeps your messaging unmistakably human.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <a class="btn btn-accent" href="/contact.php">Get a Quote</a>
                    </div>
                </div>
                <div class="experience-logos">
                    <?php include __DIR__ . '/includes/client-logos.php'; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section py-5" id="services">
        <div class="container">
            <div class="section-heading text-center mx-auto mb-5">
                <span class="section-eyebrow">Our services</span>
                <h2 class="mb-3">Choose the video style that matches your moment.</h2>
                <p class="text-secondary">Every engagement blends strategic scripting, high-impact production, and iterative optimization tailored to your funnel.</p>
            </div>
            <div class="row g-4">
                <?php
                if (function_exists('ths_demo_catalog')) {
                    $catalog = ths_demo_catalog();
                    $primaryServices = ['spokesperson', 'explainer', 'product-demo'];
                    foreach ($primaryServices as $slug) {
                        if (!isset($catalog[$slug])) {
                            continue;
                        }
                        $service = $catalog[$slug];
                        ?>
                        <div class="col-12 col-lg-4">
                            <article class="service-card h-100">
                                <div class="service-media ratio ratio-16x9 rounded-4 overflow-hidden mb-4">
                                    <?php if (isset($service['thumbnail'])): ?>
                                        <img src="<?php echo htmlspecialchars($service['thumbnail'], ENT_QUOTES, 'UTF-8'); ?>" class="object-fit-cover" alt="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?> thumbnail" loading="lazy">
                                    <?php endif; ?>
                                    <?php if (isset($service['video'])): ?>
                                        <button class="service-play" type="button" data-bs-toggle="modal" data-bs-target="#demoModal" data-demo-video="<?php echo htmlspecialchars($service['video'], ENT_QUOTES, 'UTF-8'); ?>" data-demo-title="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <i class="bi bi-play-fill"></i>
                                        </button>
                                    <?php endif; ?>
                                </div>
                                <span class="service-label text-uppercase small fw-semibold text-accent">Featured</span>
                                <h3 class="h4 mt-2"><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="text-secondary flex-grow-1"><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="link-chevron" href="<?php echo htmlspecialchars($service['url'], ENT_QUOTES, 'UTF-8'); ?>">
                                        Dive deeper <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <?php if (isset($service['video'])): ?>
                                        <button class="btn btn-sm btn-outline-light" type="button" data-bs-toggle="modal" data-bs-target="#demoModal" data-demo-video="<?php echo htmlspecialchars($service['video'], ENT_QUOTES, 'UTF-8'); ?>" data-demo-title="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>">
                                            Watch sample
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="mission-section py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mission-visual">
                        <div class="mission-orbit mission-orbit--one"></div>
                        <div class="mission-orbit mission-orbit--two"></div>
                        <div class="mission-badge mission-badge--primary">
                            <i class="bi bi-person-video3"></i>
                        </div>
                        <div class="mission-badge mission-badge--secondary">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <div class="mission-badge mission-badge--tertiary">
                            <span>ROI</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="section-eyebrow">What is Talking Heads Video?</span>
                    <h2 class="mb-3">Our mission is to uncover the essence of your brand story and make it impossible to ignore.</h2>
                    <p class="text-secondary mb-4">We combine conversion strategy, persuasive scripting, and production excellence to deliver videos that sound like you, feel on brand, and move audiences to act.</p>
                    <div class="d-flex flex-column gap-3">
                        <div class="mission-point">
                            <i class="bi bi-bullseye"></i>
                            <div>
                                <h3 class="h5 mb-1">Audience aligned</h3>
                                <p class="text-secondary mb-0">Workshops extract the objections, differentiators, and tone that make your message resonate with clarity.</p>
                            </div>
                        </div>
                        <div class="mission-point">
                            <i class="bi bi-stars"></i>
                            <div>
                                <h3 class="h5 mb-1">Performance ready</h3>
                                <p class="text-secondary mb-0">Platform-specific cuts, captions, and launch playbooks ensure every asset is ready to deploy on day one.</p>
                            </div>
                        </div>
                    </div>
                    <a class="link-chevron mt-4" href="/about.php">Learn more about our process <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="workflow-section py-5" id="use-cases">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-8">
                    <div class="section-heading mb-4">
                        <span class="section-eyebrow">How we work</span>
                        <h2 class="mb-3">Hear from our clients why Talking Heads Video is their go-to partner.</h2>
                        <p class="text-secondary mb-0">Our repeat engagements come from a simple promise: we deliver a strategic story that feels personal, on time, every time.</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <?php
                        $workflowCards = [
                            ['icon' => 'bi-brightness-high', 'title' => 'Ideation', 'content' => 'Collaborative workshops capture your tone, audience objections, and product differentiators.'],
                            ['icon' => 'bi-diagram-3', 'title' => 'Strategic storytelling', 'content' => 'Scripts map the perfect conversation arc—from hook and proof to CTA.'],
                            ['icon' => 'bi-vector-pen', 'title' => 'Custom visuals', 'content' => 'From polished spokespersons to animation, every frame reflects your brand world.'],
                            ['icon' => 'bi-people', 'title' => 'Our service', 'content' => 'Transparent timelines, proactive communication, and editors obsessed with the details.'],
                        ];
                        foreach ($workflowCards as $card): ?>
                            <div class="col">
                                <div class="workflow-card h-100">
                                    <i class="bi <?php echo $card['icon']; ?>"></i>
                                    <h3 class="h5 mt-3 mb-2"><?php echo htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="text-secondary mb-0"><?php echo htmlspecialchars($card['content'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php $testimonials = function_exists('ths_testimonials') ? ths_testimonials() : []; ?>
                    <div class="workflow-highlight h-100 d-flex flex-column">
                        <div class="workflow-video ratio ratio-16x9 rounded-4 overflow-hidden mb-4 position-relative">
                            <img src="/images/demos/social-clips.svg" class="object-fit-contain p-4" alt="Talking Heads Video highlight" loading="lazy">
                            <button class="workflow-play" type="button" data-bs-toggle="modal" data-bs-target="#demoModal" data-demo-video="https://player.vimeo.com/video/926104861?h=a7b2a95310" data-demo-title="Talking Heads Video Highlight">
                                <i class="bi bi-play-fill"></i>
                            </button>
                        </div>
                        <?php if ($testimonials !== []): $feature = $testimonials[0]; ?>
                            <div class="workflow-quote mt-auto">
                                <p class="mb-3">“<?php echo htmlspecialchars($feature['quote'], ENT_QUOTES, 'UTF-8'); ?>”</p>
                                <div class="fw-semibold"><?php echo htmlspecialchars($feature['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                                <div class="text-secondary small"><?php echo htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8'); ?> — <?php echo htmlspecialchars($feature['company'], ENT_QUOTES, 'UTF-8'); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="awards-section py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <span class="section-eyebrow">Achievements</span>
                    <h2 class="mb-3">Awards, measurable results, and clients who keep coming back.</h2>
                    <p class="text-secondary mb-4">Our videos have helped teams shorten sales cycles, lift demos, and unlock bigger deals. A decade-plus producing at scale taught us how to turn video into profit.</p>
                    <a class="btn btn-accent" href="/video/">Read our case studies</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <?php
                        $awardCards = [
                            ['value' => '14×', 'label' => 'Average ROI across launch funnels'],
                            ['value' => '17%', 'label' => 'Increase in pipeline velocity'],
                            ['value' => '98%', 'label' => 'Client satisfaction rating'],
                        ];
                        foreach ($awardCards as $award): ?>
                            <div class="col-12 col-sm-6">
                                <div class="award-card h-100">
                                    <span class="award-value"><?php echo htmlspecialchars($award['value'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <span class="award-label"><?php echo htmlspecialchars($award['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section py-5">
        <div class="container">
            <div class="section-heading text-center mx-auto mb-5">
                <span class="section-eyebrow">Testimonials</span>
                <h2 class="mb-3">Our tried and true process produces successful videos.</h2>
                <p class="text-secondary mb-0">Here’s what marketing leaders say after partnering with Talking Heads Video.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="col-12 col-lg-4">
                        <article class="testimonial-card-modern h-100">
                            <div class="quote-icon mb-3"><i class="bi bi-quote"></i></div>
                            <p class="mb-4"><?php echo htmlspecialchars($testimonial['quote'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <div class="fw-semibold"><?php echo htmlspecialchars($testimonial['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <div class="text-secondary small"><?php echo htmlspecialchars($testimonial['title'], ENT_QUOTES, 'UTF-8'); ?> — <?php echo htmlspecialchars($testimonial['company'], ENT_QUOTES, 'UTF-8'); ?></div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="culture-section py-5">
        <div class="container">
            <div class="culture-card">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="culture-visual ratio ratio-4x3">
                            <img src="/images/about-team-collab.svg" alt="Talking Heads Video team" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <span class="section-eyebrow">Great people make great videos</span>
                        <h2 class="mb-3">Our team becomes an extension of yours.</h2>
                        <p class="text-secondary mb-4">Producers, directors, copywriters, and editors collaborate in lockstep with your stakeholders to ensure every deliverable reflects your brand voice and sales goals.</p>
                        <a class="btn btn-outline-light" href="/about.php">Meet the team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5">
        <div class="container">
            <div class="cta-panel">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <span class="section-eyebrow">Book a meeting</span>
                        <h2 class="mb-3">Talk with our strategists and get a tailored quote.</h2>
                        <p class="text-secondary mb-4">Share your goals and timeline. We’ll map the ideal spokesperson talent, production approach, and deliverables for your launch.</p>
                        <div class="d-flex flex-column gap-3 text-secondary">
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-check-circle"></i>Strategic kickoff within 48 hours</div>
                            <div class="d-flex align-items-center gap-2"><i class="bi bi-check-circle"></i>Production timeline built for your launch date</div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cta-form-wrapper">
                            <form id="contactForm" class="row g-3 needs-validation" novalidate>
                                <div class="col-md-6">
                                    <label class="form-label" for="cfName">Full Name</label>
                                    <input type="text" class="form-control" id="cfName" name="name" placeholder="Alex Morgan" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="cfEmail">Company Email</label>
                                    <input type="email" class="form-control" id="cfEmail" name="email" placeholder="you@company.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="cfPhone">Mobile Number</label>
                                    <input type="tel" class="form-control" id="cfPhone" name="phone" placeholder="+1 555 012 3456">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="cfTimeline">Launch Timeline</label>
                                    <select class="form-select" id="cfTimeline" name="timeline">
                                        <option value="30-days">Next 30 days</option>
                                        <option value="60-days">30 - 60 days</option>
                                        <option value="90-days">60 - 90 days</option>
                                        <option value="planning">Just planning</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="cfMessage">Project Goals</label>
                                    <textarea class="form-control" id="cfMessage" name="message" rows="4" placeholder="Tell us what success looks like for you." required></textarea>
                                </div>
                                <div class="col-12 d-flex flex-column flex-sm-row gap-3 align-items-sm-center">
                                    <button class="btn btn-gradient btn-lg" type="submit">Submit</button>
                                    <a class="btn btn-outline-light btn-lg" href="https://calendly.com/talkingheads">Book a call</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/demo-modal.php'; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>

