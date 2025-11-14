<?php
declare(strict_types=1);

$page_title = 'About Talking Heads Video | Human-First Video Production';
$meta_description = 'Meet the team behind Talking Heads Video—directors, writers, and producers who create warm, conversion-focused videos.';
$canonical_url = 'https://www.talkingheads.video/about.php';
$body_class = 'about-page';
$structured_data = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'AboutPage',
    'name' => $page_title,
    'url' => $canonical_url,
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => 'Talking Heads Video',
        'foundingDate' => '2007',
        'founders' => [
            [
                '@type' => 'Person',
                'name' => 'Maya Thompson'
            ]
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'contactType' => 'sales',
            'email' => 'sales@websitetalkingheads.com',
            'telephone' => '+1-801-748-2281'
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

require_once __DIR__ . '/includes/testimonials.php';

include __DIR__ . '/includes/header.php';
?>
<main id="main-content" class="py-5">
    <div class="container">
        <section class="mb-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <span class="badge-soft-teal text-uppercase small fw-semibold">Our Story</span>
                    <h1 class="mt-3 mb-3">Friendly people making videos with measurable impact</h1>
                    <p class="text-muted fs-5">Talking Heads Video began with a simple hunch: warm, approachable videos outperform slick, overproduced content. Today we partner with marketing, revenue, and success teams to ship stories that sound like real conversations and drive results.</p>
                    <ul class="list-unstyled text-muted">
                        <li class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-people text-teal"></i> 25+ in-house producers, directors, editors, and strategists</li>
                        <li class="d-flex align-items-center gap-2 mb-2"><i class="bi bi-houses-fill text-teal"></i> Hybrid studio facilities in Salt Lake City &amp; remote production worldwide</li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-bar-chart-fill text-teal"></i> Campaigns that average 32% lift in qualified pipeline for clients</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="hero-media position-relative">
                        <img class="img-fluid rounded-4" src="/images/about-team-collab.svg" alt="Talking Heads Video production team collaborating on set" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="row g-4">
                <div class="col-lg-5">
                    <h2 class="h3">A timeline built on trust</h2>
                    <p class="text-muted">We’ve grown alongside the brands we serve—expanding capabilities to meet their goals at every stage.</p>
                </div>
                <div class="col-lg-7">
                    <ul class="list-unstyled timeline">
                        <li class="timeline-item">
                            <div class="timeline-year">2007</div>
                            <div>
                                <h3 class="h5 mb-1">Talking Heads founded</h3>
                                <p class="text-muted mb-0">Launched the first spokesperson studio dedicated to web landing pages.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-year">2015</div>
                            <div>
                                <h3 class="h5 mb-1">Motion &amp; animation added</h3>
                                <p class="text-muted mb-0">Expanded with in-house motion design and explainer animation teams.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-year">2020</div>
                            <div>
                                <h3 class="h5 mb-1">Remote-first production</h3>
                                <p class="text-muted mb-0">Built remote capture kits and hybrid workflows to keep clients shipping during the pandemic.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-year">2024</div>
                            <div>
                                <h3 class="h5 mb-1">Full-funnel video partner</h3>
                                <p class="text-muted mb-0">Now producing spokesperson, demo, testimonial, and social content for global teams.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="text-center mb-4">
                <span class="badge-soft-coral text-uppercase small fw-semibold">Leadership</span>
                <h2 class="mt-3">Meet the faces behind the camera</h2>
            </div>
            <div class="row g-4">
                <?php
                $team = [
                    ['name' => 'Maya Thompson', 'role' => 'Executive Producer', 'bio' => 'Champions human-first storytelling and oversees every production from strategy to delivery.', 'img' => '/images/team/maya-thompson.svg'],
                    ['name' => 'Andre Collins', 'role' => 'Director of Photography', 'bio' => 'Designs lighting and camera flows that keep spokespersons comfortable and confident on set.', 'img' => '/images/team/andre-collins.svg'],
                    ['name' => 'Priya Kapoor', 'role' => 'Lead Script Strategist', 'bio' => 'Transforms raw ideas into conversion-ready scripts grounded in audience research.', 'img' => '/images/team/priya-kapoor.svg']
                ];
                foreach ($team as $member): ?>
                    <div class="col-md-4">
                        <div class="card-highlight p-4 h-100 text-center">
                            <div class="team-avatar mx-auto mb-3">
                                <img src="<?php echo htmlspecialchars($member['img'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                            </div>
                            <h3 class="h5 mb-1"><?php echo htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <div class="text-teal small mb-2"><?php echo htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <p class="text-muted small mb-0"><?php echo htmlspecialchars($member['bio'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="mb-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <h2 class="h3">Values we bring to every project</h2>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card-highlight h-100 p-4">
                                <h3 class="h5">Empathy first</h3>
                                <p class="text-muted mb-0">We listen to your customers, your team, and your goals before we touch creative.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-highlight h-100 p-4">
                                <h3 class="h5">Clarity always</h3>
                                <p class="text-muted mb-0">Scripts, storyboards, and schedules stay transparent so you’re never guessing what’s next.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-highlight h-100 p-4">
                                <h3 class="h5">Tested outcomes</h3>
                                <p class="text-muted mb-0">We measure success by how much the video lifts your KPIs, not by how flashy the animation looks.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-highlight h-100 p-4">
                                <h3 class="h5">Warm collaboration</h3>
                                <p class="text-muted mb-0">Expect proactive communication, cheerful shoots, and a team that feels like part of yours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="bg-soft-teal rounded-4 p-4 p-lg-5 position-relative overflow-hidden">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <span class="badge-soft-teal text-uppercase small fw-semibold">Careers</span>
                        <h2 class="mt-3">We’re growing the crew</h2>
                        <p class="text-muted">From production coordinators to motion designers, we love working with curious, friendly creatives.</p>
                        <a class="btn btn-gradient" href="mailto:careers@talkingheads.video">Send Portfolio</a>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled text-muted small mb-0">
                            <li class="mb-2">• Hybrid studio days with collaborative shoots</li>
                            <li class="mb-2">• Annual professional development stipend</li>
                            <li class="mb-2">• Paid volunteer days supporting local arts programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <header class="text-center mb-4">
                <span class="badge-soft-teal text-uppercase small fw-semibold">Client Love</span>
                <h2 class="mt-3">What our partners say</h2>
            </header>
            <?php ths_render_testimonial_carousel(['id' => 'aboutTestimonials']); ?>
        </section>

        <section>
            <div class="bg-white rounded-4 shadow-lg p-4 p-lg-5 text-center">
                <h2 class="h3 mb-3">Let’s make your next video unforgettable</h2>
                <p class="text-muted mb-4">Tell us what you’re working on and we’ll map the people, process, and deliverables to bring it to life.</p>
                <a class="btn btn-gradient btn-lg" href="/contact.php">Start the conversation</a>
            </div>
        </section>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>

