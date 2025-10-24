<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Talking Heads Studio - Professional Video Production</title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Professional video production services including spokesperson videos, explainer videos, product demos, and social media clips. Friendly, trustworthy video marketing that converts.'; ?>">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Nunito:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Talking Heads Studio">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Professional video production services that build trust and boost engagement.'; ?>">
    <meta property="og:image" content="https://talkingheads.video/images/og-image.jpg">
    <meta property="og:url" content="https://talkingheads.video<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Talking Heads Studio">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Professional video production services that build trust and boost engagement.'; ?>">
    <meta name="twitter:image" content="https://talkingheads.video/images/twitter-card.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://talkingheads.video<?php echo $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Schema.org Organization Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Talking Heads Studio",
        "url": "https://talkingheads.video",
        "logo": "https://talkingheads.video/images/logo.png",
        "description": "Professional video production services including spokesperson videos, explainer videos, product demos, and social media clips.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-801-741-2281",
            "contactType": "sales",
            "email": "sales@websitetalkingheads.com"
        },
        "sameAs": [
            "https://www.facebook.com/talkingheadsstudio",
            "https://www.linkedin.com/company/talking-heads-studio",
            "https://www.youtube.com/talkingheadsstudio"
        ]
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Talking Heads Studio Logo" height="40" class="d-inline-block align-top">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Video Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="video-services.php">All Services</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="styles/spokesperson-videos.php">Spokesperson Videos</a></li>
                            <li><a class="dropdown-item" href="styles/explainer-videos.php">Explainer Videos</a></li>
                            <li><a class="dropdown-item" href="styles/product-demos.php">Product Demos</a></li>
                            <li><a class="dropdown-item" href="styles/social-media-clips.php">Social Media Clips</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                
                <div class="d-flex">
                    <a href="contact.php" class="btn btn-primary btn-lg px-4">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>
