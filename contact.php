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
                <span class="badge-soft-teal text-uppercase small fw-semibold">Let’s collaborate</span>
                <h1 class="mt-3 mb-3">Tell us about your next video idea</h1>
                <p class="text-muted fs-5">Share a few details and we’ll schedule a friendly call to map your video goals, timeline, and success metrics.</p>
                <form id="contactForm" class="needs-validation" method="post" action="/forms/contact-handler.php" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="name">Full name</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Alex Morgan" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Company email</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="alex@company.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="phone">Phone number</label>
                            <input class="form-control" type="tel" id="phone" name="phone" placeholder="+1 (555) 123-4567">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="company">Company</label>
                            <input class="form-control" type="text" id="company" name="company" placeholder="Awesome Co.">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="videoType">Interested video type</label>
                            <select class="form-select" id="videoType" name="videoType" required>
                                <option value="" selected disabled>Select one</option>
                                <option value="spokesperson">Spokesperson Video</option>
                                <option value="explainer">Explainer Animation</option>
                                <option value="product-demo">Product Demo</option>
                                <option value="testimonial">Customer Testimonials</option>
                                <option value="social">Social Clips</option>
                                <option value="training">Training / Onboarding</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="budget">Estimated budget</label>
                            <select class="form-select" id="budget" name="budget" required>
                                <option value="" selected disabled>Select a range</option>
                                <option value="under-5000">$3K – $5K</option>
                                <option value="5000-10000">$5K – $10K</option>
                                <option value="10000-20000">$10K – $20K</option>
                                <option value="20000-plus">$20K+</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="timeline">Target timeline</label>
                            <input class="form-control" type="text" id="timeline" name="timeline" placeholder="e.g. Launching by June 1">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="message">Project goals</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Share what success looks like for this video" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="newsletter" name="newsletter">
                                <label class="form-check-label text-muted" for="newsletter">
                                    Keep me posted on monthly video tips and trends.
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-gradient w-100" type="submit">Schedule my call</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="contact-card mb-4">
                    <div class="icon mb-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h2 class="h4">Our studio hubs</h2>
                    <ul class="list-unstyled text-muted small">
                        <li class="mb-3">
                            <strong>Salt Lake City HQ</strong><br>
                            10808 S River Front Pkwy<br>
                            South Jordan, UT 84095
                        </li>
                        <li class="mb-3">
                            <strong>Los Angeles Studio</strong><br>
                            730 Arizona Ave, 2nd Floor<br>
                            Santa Monica, CA 90401
                        </li>
                        <li>
                            <strong>Remote Production</strong><br>
                            Global capture kits and live-directed filming.
                        </li>
                    </ul>
                </div>
                <div class="card-highlight p-4">
                    <h2 class="h5">Direct lines</h2>
                    <ul class="list-unstyled text-muted small mb-3">
                        <li class="mb-2"><i class="bi bi-telephone me-2 text-teal"></i><a class="text-decoration-none text-muted" href="tel:8017482281">(801) 748-2281</a></li>
                        <li class="mb-2"><i class="bi bi-envelope me-2 text-teal"></i><a class="text-decoration-none text-muted" href="mailto:hello@talkingheads.video">hello@talkingheads.video</a></li>
                        <li><i class="bi bi-calendar-event me-2 text-teal"></i><a class="text-decoration-none text-muted" href="https://calendly.com/talkingheads">Book on Calendly</a></li>
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

