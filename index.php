<?php
$page_title = "Professional Video Production Services";
$page_description = "Talking Heads Studio creates professional spokesperson videos, explainer videos, product demos, and social media clips that engage your audience and grow your business with a personal touch.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="fade-in">Let's Tell Your Story with Video</h1>
                    <p class="fade-in">We create professional videos that engage your audience and grow your business — all with a personal touch.</p>
                    <div class="hero-buttons fade-in">
                        <a href="contact.php" class="btn btn-primary btn-lg me-3">Get a Quote</a>
                        <a href="#video-gallery" class="btn btn-outline-light btn-lg">Watch Samples</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image fade-in">
                    <img src="images/hero-spokesperson.webp" alt="Friendly professional spokesperson in studio with warm lighting" class="img-fluid rounded-3 shadow-lg" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services Section -->
<section class="section section-alt" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fade-in">Our Video Services</h2>
                <p class="lead fade-in">From spokesperson videos to animated explainers, we help you connect with your audience through compelling visual storytelling.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-card fade-in">
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Spokesperson Videos</h3>
                    <p>Professional, friendly faces that bring your message to life and build trust with your audience.</p>
                    <a href="styles/spokesperson-videos.php" class="btn btn-outline-primary">View Examples</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-card fade-in">
                    <div class="icon">
                        <i class="fas fa-play-circle"></i>
                    </div>
                    <h3>Explainer Videos</h3>
                    <p>Clear, engaging animations that make complex topics simple and memorable for your customers.</p>
                    <a href="styles/explainer-videos.php" class="btn btn-outline-primary">View Examples</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-card fade-in">
                    <div class="icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3>Product Demos</h3>
                    <p>Showcase your products in action with professional demonstrations that drive sales and conversions.</p>
                    <a href="styles/product-demos.php" class="btn btn-outline-primary">View Examples</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-card fade-in">
                    <div class="icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Social Media Clips</h3>
                    <p>Short, shareable videos optimized for social platforms that boost engagement and brand awareness.</p>
                    <a href="styles/social-media-clips.php" class="btn btn-outline-primary">View Examples</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Gallery Section -->
<section class="section" id="video-gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fade-in">See Our Work in Action</h2>
                <p class="lead fade-in">Browse our portfolio of professional videos that have helped businesses connect with their audiences and drive results.</p>
            </div>
        </div>
        
        <div class="video-gallery">
            <div class="video-item fade-in" data-vimeo="123456789">
                <img src="images/video-thumbnails/spokesperson-small-business.webp" alt="Small business spokesperson video example" loading="lazy">
                <div class="video-overlay">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="p-3">
                    <h5>Small Business Spokesperson</h5>
                    <p class="text-muted">Professional, friendly presentation for local business</p>
                </div>
            </div>
            
            <div class="video-item fade-in" data-vimeo="987654321">
                <img src="images/video-thumbnails/explainer-animation.webp" alt="Animated explainer video example" loading="lazy">
                <div class="video-overlay">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="p-3">
                    <h5>Animated Explainer</h5>
                    <p class="text-muted">Clear, engaging explanation of complex service</p>
                </div>
            </div>
            
            <div class="video-item fade-in" data-vimeo="456789123">
                <img src="images/video-thumbnails/product-demo.webp" alt="Product demonstration video example" loading="lazy">
                <div class="video-overlay">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="p-3">
                    <h5>Product Demonstration</h5>
                    <p class="text-muted">Professional product showcase with clear benefits</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="video-services.php" class="btn btn-primary btn-lg">View All Videos</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-alt">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fade-in">What Our Clients Say</h2>
                <p class="lead fade-in">Real results from real businesses who trust us with their video marketing.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="testimonial-card fade-in">
                    <div class="quote">
                        The spokesperson video Talking Heads created for us increased our conversion rate by 40%. The personal touch really makes a difference.
                    </div>
                    <div class="author">
                        <img src="images/testimonials/sarah-miller.webp" alt="Sarah Miller testimonial photo">
                        <div class="author-info">
                            <h6>Sarah Miller</h6>
                            <small>CEO, TechStart Solutions</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="testimonial-card fade-in">
                    <div class="quote">
                        Professional, friendly, and exactly what we needed. Our explainer video has been shared over 10,000 times on social media.
                    </div>
                    <div class="author">
                        <img src="images/testimonials/mike-johnson.webp" alt="Mike Johnson testimonial photo">
                        <div class="author-info">
                            <h6>Mike Johnson</h6>
                            <small>Marketing Director, HealthPlus</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="testimonial-card fade-in">
                    <div class="quote">
                        The team at Talking Heads made the entire process easy and enjoyable. The final product exceeded our expectations.
                    </div>
                    <div class="author">
                        <img src="images/testimonials/lisa-chen.webp" alt="Lisa Chen testimonial photo">
                        <div class="author-info">
                            <h6>Lisa Chen</h6>
                            <small>Owner, Green Earth Products</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fade-in">Ready to Tell Your Story?</h2>
                <p class="fade-in">Let's create a video that connects with your audience and drives real results for your business.</p>
                <div class="cta-buttons fade-in">
                    <a href="contact.php" class="btn btn-light btn-lg me-3">Get Started Today</a>
                    <a href="tel:+18017412281" class="btn btn-outline-light btn-lg">Call (801) 741-2281</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Lightbox -->
<div class="lightbox" id="videoLightbox">
    <div class="lightbox-content">
        <button class="lightbox-close" aria-label="Close video">
            <i class="fas fa-times"></i>
        </button>
        <iframe id="vimeoFrame" allow="autoplay; fullscreen; picture-in-picture" loading="lazy"></iframe>
    </div>
</div>

<!-- FAQ Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What types of videos do you create?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We create spokesperson videos, explainer videos, product demonstrations, and social media clips. Each video is tailored to your specific needs and audience."
            }
        },
        {
            "@type": "Question",
            "name": "How long does it take to create a video?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most video projects are completed within 2-3 weeks, depending on complexity and revisions needed. We'll provide a detailed timeline during your consultation."
            }
        },
        {
            "@type": "Question",
            "name": "Do you provide video hosting?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We deliver your final video files in multiple formats optimized for web, social media, and presentations. You can host them on your own platform or we can recommend hosting solutions."
            }
        }
    ]
}
</script>

<?php include 'includes/footer.php'; ?>
