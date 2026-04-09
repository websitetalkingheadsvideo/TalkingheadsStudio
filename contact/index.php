<?php
/**
 * contact Page
 * Main content: Bootstrap grid (header/footer are separate includes).
 */

require_once __DIR__ . '/../includes/config.php';

// Page-specific variables for head include
$page_title = 'Contact - Video Agency';
$page_description = 'Connect with Talking Heads! Visit our Sandy, UT office for inquiries and support. We\'re ready to assist you with your needs!';
$canonical_url = '/contact/';
$og_type = 'article';
$og_image = '/wp-content/uploads/2025/06/Group-20.svg';

// Include head (opens <html> and <head> tags)
require_once __DIR__ . '/../includes/head.php';

// Page-specific styles: main.css (brand type, schedule button); contact.css = this page only.
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="/css/main.css?v=0.2.13">
<link rel="stylesheet" href="/css/header2.css?v=0.2.13">
<link rel="stylesheet" href="/css/contact.css?v=0.2.13">
<link rel="stylesheet" href="/css/footer2.css?v=0.2.13">
</head>

<body <?php body_class('page-contact'); ?>>

<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<?php require_once __DIR__ . '/../includes/header2.php'; ?>

<main id="content" class="site-main contact-page-main">
	<section class="contact-page-section">
		<div class="contact-page-container px-3 px-md-4">
			<h1 class="contact-page-hero-title">Contact <span class="mp-gradient-text">Us</span></h1>

			<div class="row gy-5 gx-lg-5 align-items-start">
				<div class="col-lg-6 contact-page-col--from-right">
					<h2 class="contact-page-lead-title">Let’s Go <span class="mp-gradient-text">Viral Together.</span></h2>

					<div class="main-button-schedule mb-4 mb-lg-5">
						<a class="elementor-button elementor-button-link" id="app-scheduling" href="https://websitetalkingheads.bookafy.com/schedule/?type=iframe&amp;custom_embed=true&amp;selected_staff=jed-knudsen&amp;locale=en" target="_blank" rel="noopener noreferrer" data-domain-name="https://websitetalkingheads.bookafy.com/schedule/?type=iframe&amp;custom_embed=true&amp;selected_staff=jed-knudsen&amp;locale=en">Schedule A Call
							<span class="elementor-button-icon">
								<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none" aria-hidden="true"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>
							</span>
						</a>
						<script id="scheduling_script" type="text/javascript" src="https://app.bookafy.com/popup-code.js"></script>
					</div>

					<div class="row row-cols-1 row-cols-md-3 g-4 contact-page-details">
						<div class="col">
							<h3 class="contact-page-detail-heading"><a href="https://maps.app.goo.gl/hyQMX4UKiKJGvC1B8" target="_blank" rel="noopener noreferrer">Address</a></h3>
							<p class="contact-page-detail-text">245&nbsp;W. 9000&nbsp;S. Sandy, UT 84070</p>
						</div>
						<div class="col">
							<h3 class="contact-page-detail-heading"><a href="tel:1-801-748-2281">Phone</a></h3>
							<p class="contact-page-detail-text">1-801-748-2281</p>
						</div>
						<div class="col">
							<h3 class="contact-page-detail-heading"><a href="mailto:sales@websitetalkingheads.com">Inquiries and Questions</a></h3>
							<p class="contact-page-detail-text">sales@websitetalkingheads.com</p>
						</div>
					</div>
				</div>

				<div class="col-lg-6 d-flex justify-content-center contact-page-col--from-left">
					<div class="contact-form-panel w-100">
						<div class="contact-form-panel__inner">
							<iframe src="https://webforms.pipedrive.com/f/6WfFZtxIYlaDFR4wTsVVlsIHtzxSXXyZyYRL3Dszh0VTEFZRPJOThyDuWpXMrwOaYP" title="contact form" scrolling="no" class="contact-form-iframe"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php require_once __DIR__ . '/../includes/footer2.php'; ?>
<?php require_once __DIR__ . '/../includes/footer-scripts.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
</body>
</html>
