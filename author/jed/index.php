<?php
/**
 * jed Page
 * Converted from index.html
 */

require_once __DIR__ . '/../../includes/config.php';

// Page-specific variables for head include
$page_title = 'Jed heads, Author at Video Agency';
$page_description = 'Discover how Talking Heads can elevate your online presence!';
$canonical_url = '/';
$og_type = 'profile';
$og_image = '/wp-content/uploads/2025/06/Group-20.svg';

// Include head (opens <html> and <head> tags)
require_once __DIR__ . '/../../includes/head.php';

// Page-specific inline CSS (inside <head>)
?>
<link rel="stylesheet" href="../../css/main.css">



<style>
.video-wrapper-talking {
    position: relative;
   
    width: 100%;
    cursor: pointer;
  }

  .video-wrapper-talking video {
    width: 100%;
    height: auto;
    display: block;
		border-radius: 30px;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
		border-radius: 30px;
  }

  .video-overlay::before {
    content: "";
    width: 80px;
    height: 80px;
    background: url('/wp-content/uploads/2025/08/newarrow.svg') no-repeat center center;
    background-size: contain;
    z-index: 3;
  }

  .video-hidden {
    display: none !important;
  }	
	
	
	
	
.testimonial-slider .elementor-testimonial__image img {width: 170px !important; height: 24px !important;}	
.service-popup {max-width: 850px !important;}	
.service-popup iframe { height: 500px !important;margin-top: 24px; }	
.service-slider-title {position:relative;z-index:100}
.service-slider-title h3 a {	width: 100%; display: flex;}
.testimonials-video video {border-radius: 20px;}	
.testimonials-video .elementor-custom-embed-image-overlay {border-radius: 20px;}	
.category-gender {width: 100%;display: flex;}	
.category-gender .elementor-widget-container {width: 100%;}
.services-posted .elementor-shortcode {display: flex;gap: 28px;flex-wrap: wrap;}
.services-posted .spokepeople-video-wrapper {width: 31.5%;}
.services-posted .spokepeople-video-wrapper video {object-fit: cover;}	
.category-gender .elementor-shortcode {display: flex;gap: 20px;flex-wrap: wrap;}
.spokepeople-video-wrapper {display: flex;flex-wrap: wrap;border-radius: 30px;width: 18.8%;}
.spokepeople-video-wrapper:hover .spokepeople-video-heading:hover {color: #EAA73F;}
.spokepeople-video-wrapper video {border-radius: 30px;}
.elementor-lightbox-prevent-close .elementor-video-square {background: #262626;padding: 40px 20px;border-radius: 20px;width: 600px !important;    border: solid 1px #5d5d5d;}	
.elementor-lightbox-prevent-close .elementor-video-square iframe {width: 95% !important;height: 100% !important;border-radius: 20px;}	
.elementor-lightbox .dialog-widget-content {width: 600px !important;left: 50% !important;transform: translate(-50%, -50%);top: 50% !important;height: 630px !important;}	
.dialog-lightbox-close-button {top:5px;right: 0px;font-size: 24px !important;padding: 0px !important;}	

.modal a.close-modal {top: 24px !important;right: 16px !important;}	
.spokepeople-video-heading {text-align: center;font-family: "Goli", Sans-serif;font-size: 30px;font-style: normal;text-transform: capitalize;font-weight: 500;line-height: normal;width: 100%;color: #fff;margin-top: 16px;}	
.spokepeople-video-heading a {color: #FFF;}	
.modal {max-width:700px;background: #141414 !important;border-radius: 20px !important;padding: 16px 16px !important;border: solid 1px #5d5d5d;}	
.actor-popup iframe {width:100%;height: 650px;}
.actor-popup h2 {color: #fff;font-size: 24px;font-family: "Goli", Sans-serif;font-weight: 600;}
.home-services {height:auto !important;}	
.home-frame .phone-frame {height: 660px;}
.phone-frame {width: 100%;height: 550px;border: 5px solid #000;border-radius: 40px;position: relative;z-index:1000}
.phone-frame:before {content: '';box-shadow: 0px 0px 3px 1px rgb(255 255 255);position: absolute;top: -3px;width: 100%;
height: 86.6%;z-index: -1;border-radius: 40px 40px 0 0;left: 0px;}
.phone-frame:after {content: '';box-shadow: 0px 0px 3px 1px rgb(255 255 255);position: absolute;bottom: -7px;width: 100%;height: 15%;
z-index: -1;border-radius: 0px 0px 40px 40px;left: 0px;}
.side-one {position: absolute;left: -9px;top: 80px;background: #514f4f;width: 3px;height: 28px;}
.side-two {position: absolute;left: -9px;top: 140px;background: #514f4f;width: 3px;height: 50px;}
.side-three {position: absolute;left: -9px;top: 210px;background: #514f4f;width: 3px;height: 50px;}
.side-four {position: absolute;right: -9px;top: 150px;background: #514f4f;width: 3px;height: 70px;}
.side-bottom {position: absolute;position: absolute;right: 0;bottom: -8px;background: #000000;width: 50px;height: 8px;left: 0;margin: 0 auto;}
.phone-frame video {width: 100%;height: 100%;object-fit: cover;border-radius: 38px;}	
.video-frame:before {content: '';width: 87px;height: 30px;background: url(/wp-content/uploads/2025/07/iphone-icon.png) no-repeat;position: absolute;
top: 30px;z-index: 1000000;left: 50%;right: 0;transform: translate(-50%, -50%);}	
.our-spokespeople video {height: 450px;border-radius: 30px;} 	
.main-button-schedule {position:relative;display: flex;align-items: center;width: 290px;}	
.main-button-schedule .elementor-button-link .elementor-button-icon  {position: absolute;right: -3px;width: 58px;height: 58px;border-radius: 100px;background: #eaa73f;top: 2px;
display: flex;align-items: center;justify-content: center;transition: all 0.2s ease;}
.main-button-schedule a.elementor-button-link {background-color: #EAA73F;font-family: "Goli", Sans-serif;font-size: 18px;font-weight: 600;text-transform: uppercase;
 border-radius: 50px 50px 50px 50px;padding: 20px 30px 20px 30px;transition: all 0.2s ease;}
.main-button-schedule a.elementor-button-link:hover {background-color:#589DFD !important;}
.main-button-schedule:hover .elementor-button-link .elementor-button-icon  {background:#589DFD !important;rotate: 45deg;}	
.border-line {;background: linear-gradient(#2a2a2a, #2a2a2a) padding-box, linear-gradient(to top, rgb(255 255 255 / 10%), rgb(255 255 255 / 25%)) border-box;border-radius: 20px !important;border-width: 2pt !important;border: 0px solid transparent;}
.accodian-wrapper summary[aria-expanded="true"] {border-bottom: none !important;}	
.this-title span {background: #EAA73F;padding: 16px 35px 14px 35px;border-radius: 50px;display: inline-block;margin-left: 25px;line-height: 33px;}
.special-video video {border-radius:20px;position:relative}
.post-category video {border-radius:30px;}
.custom-video h2.elementor-heading-title {display: inline-grid;padding: 14px 30px;border-radius: 18px 0 18px 0;background: #EAA73F}
.custom-video ul li {padding: 0 20px 10px 0;}
.video-single video {border-radius: 20px 20px 0px 0px;}
.video-single .elementor-widget-text-editor ul {padding-left:20px}	
.sopkespeople .e-hosted-video {width: 80%;height: 550px; margin: 0 auto;}
.sopkespeople .e-hosted-video .elementor-custom-embed-image-overlay  {width: 80%;height: 538px; margin: 0 auto;border-radius:30px;}
.view-more-work .elementor-button-icon svg {width:40px;position: relative;top: -20px;}
.work .e-hosted-video video  {border-radius: 20px 20px 0 0;}
.work video  {border-radius: 20px 20px 0 0;}	
.work .elementor-widget-text-editor p {overflow: hidden;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;}
.ugc-video .e-hosted-video {width: 80%;height: 670px; margin: 0 auto;}
.ugc-video .e-hosted-video video {border-radius:30px;}
.ugc-video .e-hosted-video .elementor-custom-embed-image-overlay  {width: 80%;height: 670px; margin: 0 auto;border-radius:30px;}
.ugc-video .gradient-line {margin-top: -265px;padding-top: 245px;}
.ugc-video .gradient-line h3 {position: relative;top: 36px;}
.video-section-big h2 {position: absolute;bottom: 0px;}
.sopkespeople .elementor-widget-image .elementor-widget-container {width: 80%;margin: 0 auto;position: relative;z-index: 1;}
.sopkespeople .elementor-widget-image .elementor-widget-container img {height: 538px; }
.sopkespeople .e-hosted-video video {border-radius: 30px;}
.gradient-line {margin-top: -100px;padding-top: 150px;}
.actor-video {position: relative;z-index:1}
.step-wrapper h2 {font-family: "Goli", Sans-serif;font-size: 20px;font-weight: 400;color: #EAA73F;border: solid 1px #fff;padding: 8px 25px;border-radius: 50px;display: inline-grid;}
.our-spokepeople-wrapper .e-n-tabs-heading {position: relative;top: -70px;}
.play-button {display:none;}
.main-button {position:relative;display: flex;align-items: center;}	
.main-button .elementor-button-link .elementor-button-icon  {position: absolute;right: -3px;width: 58px;height: 58px;border-radius: 100px;background: #eaa73f;top: 2px;
display: flex;align-items: center;justify-content: center;transition: all 0.2s ease;}
.main-button a.elementor-button-link {transition: all 0.2s ease;}
.main-button a.elementor-button-link:hover {background-color:#589DFD !important;}
.main-button:hover .elementor-button-link .elementor-button-icon  {background:#589DFD !important;rotate: 45deg;}
.about-form .elementor-button {position:relative;display: flex;align-items: center;}	
.about-form .elementor-button .elementor-button-icon  {position: absolute;right: -63px;width: 58px;height: 58px;border-radius: 100px;background: #eaa73f;top: 2px;
display: flex;align-items: center;justify-content: center;transition: all 0.2s ease;}
.about-form .elementor-button .elementor-button-link {transition: all 0.2s ease;}
.about-form .elementor-button:hover {background-color:#589DFD !important;}
.about-form .elementor-button:hover .elementor-button-icon  {background:#589DFD !important;rotate: 45deg;}
.about-form .elementor-field-type-submit {margin-top:25px;}
.service-slider {transition: height 0.5s ease-out;}
.service-slider:hover:before {content: '';display: block;position: absolute;height: 100%;width: 100%;bottom: 0;transition: height 0.5s ease-out;background: linear-gradient(to top, transparent 0%, black 100%);z-index: 10;	}
.service-slider:hover .main-button .elementor-button-link .elementor-button-icon {background:#589DFD !important;rotate: 45deg;}
.mp-gradient-text a {border-bottom: solid 2px #fff;}
.special-video-taiking video {height:820px !important;}
.video-process video {height:650px !important;}
.video-wrapper {position:relative;}
.video-wrapper .elementor-widget-button {position: absolute;transform: translate(-50%, -50%);top: 71%;left: 50%;width: 320px;border-radius: 50px;z-index:1000000}
.mp-gradient-text { background: linear-gradient(89deg, #EAA73F 0.12%, #CF7E00 83.85%);   -webkit-background-clip: text;    -webkit-text-fill-color: transparent; }
.video-counter .elementor-counter-number-wrapper { border-bottom: 1px solid #666; }
.testimonial-slider .swiper-pagination {position: absolute;background: #D9D9D9;width: auto;right: 0;left: inherit;height: 25px;border-radius: 50px;bottom: 45px !important;}
.testimonial-slider .swiper-pagination:before {content:'';width: 690px;display: flex;background: #666;height: 1px;position: absolute;right: 136px;top: 14px;}
.footer-service-list nav ul {display: flex; width: 100%;  flex-wrap: wrap;}
.footer-service-list nav ul li {width: 50%; }
.about-form .elementor-field-group .elementor-field {background: linear-gradient(#2a2a2a, #2a2a2a) padding-box, linear-gradient(to top, rgb(255 255 255 / 10%), rgb(255 255 255 / 20%)) border-box;
border-radius: 20px !important;border-width: 2pt !important;border: 0px solid transparent;}	
.contact-form-iframe {width: 530px !important;height: 720px;}	
.contact-page-form {margin-top: -60px;}	
	
@media screen and (max-width: 1440px) {
.spokepeople-video-wrapper video {border-radius: 30px;height:380px}
.services-posted .spokepeople-video-wrapper video {height: 290px;}
.home-frame .phone-frame {height: 550px;}
.testimonial-slider .swiper-pagination:before {width:520px;}
}
	
@media screen and (max-width: 1400px) {
.header .main-button a.elementor-button-link {padding: 20px 20px 20px 20px !important;font-size: 14px !important;}
.header ul li a  {padding: 13px 10px !important;}
.sopkespeople .e-hosted-video {height: 350px;}
.ugc-video .e-hosted-video {height: 500px;}
.ugc-video .e-hosted-video {height: 500px;}
.ugc-video .e-hosted-video .elementor-custom-embed-image-overlay  {height: 500px;}
.video-process video {height:500px !important;}
.sopkespeople .e-hosted-video .elementor-custom-embed-image-overlay {height: 350px;}
.video-wrapper .elementor-widget-button {top:40%}	
.spokepeople-video-wrapper video {height:250px}
.spokepeople-video-wrapper {width: 18%;}
}

	
@media only screen and (max-width: 1024px) and (min-width: 768px)  {
	.service-popup {max-width: 720px !important;}
	.service-popup iframe {height: 360px !important;}
	.header-mobile .main-button a.elementor-button-link {padding: 20px 20px 20px 20px !important;font-size: 14px !important;}
	.services-posted .spokepeople-video-wrapper video {height: 170px;}
	.services-posted .spokepeople-video-wrapper {width: 30%;}
	.spokepeople-video-heading {font-size: 20px;}
	.home-frame .phone-frame {height: 700px;}
	.spokepeople-video-wrapper video {height: 230px;}
}
	
@media screen and (max-width: 1024px) {
.video-frame video.elementor-video {border-radius: 40px;}
.footer-service-list nav ul {display: block;}
.this-title span {padding: 8px 24px 8px 24px;margin-left: 0px;}
.marketing-frame video.elementor-video {border-radius: 70px !important;}
.spokepeople-video-wrapper {width: 22%;} 
}
	
@media screen and (max-width: 767px) {
	.actor-popup h2 {font-size: 18px;}
.actor-popup iframe {height:350px;}
.modal {width: 100%;padding: 16px 16px !important;}
.services-posted .spokepeople-video-wrapper video {height: 200px;}
.services-posted .spokepeople-video-wrapper {width: 47%;}
.spokepeople-video-heading {font-size: 18px;}
.spokepeople-video-wrapper video {height: 400px;}
.sopkespeople .e-hosted-video {height: 470px;}
.spokepeople-video-wrapper {width: 100%;justify-content: center;}
.home-frame .phone-frame {height: 580px;}
.tab-wrapper #e-n-tab-title-2340567452 {position:absolute;top:50px;z-index:1000;width:100%}
			.contact-page-form {margin-top: 0px;}	
		.mp-gradient-text a {display: inline-block;margin-top: 12px;}
		.special-video-taiking video {height: 300px !important;}
		.marketing-subheading br {display:none;}
	.video-wrapper .elementor-widget-button {bottom: 2%;top:inherit;}
	.video-process video {height:400px !important;}
		.testimonial-slider .swiper-pagination:before  {display:none}	
		.testimonial-slider .swiper-pagination {bottom: 48px !important;}
		.footer-logo .elementor-icon-box-icon {position: relative;top: 10px;}
		.header-mobile {position: relative;top: 20px;}
		.header-mobile .header-book a {padding: 10px 11px 10px 11px !important;font-size: 14px !important;border-radius: 50px 50px 50px 50px!important;}
		.header-book .elementor-button-icon {display:none  !important}
		.video-wrapper .elementor-widget-button {width: 290px}
		.footer-service-list nav ul li {width: 100%; }
		.about-form .elementor-field-type-submit {width: 130px;}
		.video-frame video.elementor-video {border-radius: 70px;}
		.gradient-line {padding-top: 130px;min-height: auto;}
		.ugc-video .gradient-line h3 {position: relative;top: 0px;}
		.ugc-video .gradient-line {padding-top: 290px;}
		.our-spokepeople-wrapper .e-n-tabs-heading {position: inherit;}
		.video-section-big h2 {display:none;}
		.our-spokespeople:hover .play-button {display:none;}
		.our-spokespeople .e-hosted-video video {height: 300px;}
		.e-n-tab-title {z-index:1}
}
	@media screen and (max-width: 640px) {
		.testimonail-title br {display:none}
		.video-overlay::before {width: 64px;height: 64px;}
		.service-popup iframe {height:180px !important;}
		.services-posted .spokepeople-video-wrapper video {height: 200px;}
		.services-posted .spokepeople-video-wrapper {width: 100% !important;}
		.spokepeople-video-heading {font-size: 24px;}
	}

<?php
?>
<link rel="stylesheet" href="../../css/main.css">

<link rel="stylesheet" href="../../css/main.css">
</head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<?php require_once __DIR__ . '/../../includes/header.php'; ?>

<div data-elementor-type="archive" data-elementor-id="2673" class="elementor elementor-2673 elementor-location-archive" data-elementor-post-type="elementor_library">
			<div class="th th-574bc56 e-flex e-con-boxed e-con e-parent" data-id="574bc56" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;\/wp-content\/uploads\/2025\/07\/SSYouTube.online_Imagine-Your-Heelprint_-UNC-Commercial_1080p-1-1.mp4&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
					<div class="e-con-inner">
		<div class="elementor-background-video-container" aria-hidden="true">
							<video class="elementor-background-video-hosted" autoplay muted playsinline loop></video>
					</div>		<div class="th th-b8ccd93 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="b8ccd93" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h4 class="elementor-heading-title elementor-size-default">Video</h4>				</div>
				</div>
				<div class="th th-32988bb elementor-invisible elementor-widget elementor-widget-heading" data-id="32988bb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Custom<span class="mp-gradient-text">Presentations</span></h2>				</div>
				</div>
		<div class="th th-95ba303 e-con-full e-flex e-con e-child" data-id="95ba303" data-element_type="container">
				<div class="th th-4970a5d elementor-align-right main-button elementor-widget elementor-widget-button" data-id="4970a5d" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>			</span>
									<span class="elementor-button-text">start your project</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				<div class="th th-fd1e204 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="fd1e204" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Your sales pitch delivered by our charismatic and persuasive sales talent with  exciting graphics and text to support and enhance the presentation.</p>								</div>
				</div>
					</div>
				</div>
		<div class="th th-b25a1be animated-slow e-flex e-con-boxed elementor-invisible e-con e-parent" data-id="b25a1be" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
					<div class="e-con-inner">
				<div class="th th-e903b33 elementor-widget elementor-widget-heading" data-id="e903b33" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">
Presentation <br><span class="mp-gradient-text">Portfolio</span> </h3>				</div>
				</div>
				<div class="th th-6157773 elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-widget elementor-widget-loop-grid" data-id="6157773" data-element_type="widget" data-settings="{&quot;template_id&quot;:&quot;1684&quot;,&quot;_skin&quot;:&quot;post&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_tablet&quot;:&quot;2&quot;,&quot;columns_mobile&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;[data-elementor-type=\&quot;loop-item\&quot;]&quot;,&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="loop-grid.post">
				<div class="elementor-widget-container">
							<div class="elementor-loop-container elementor-grid" role="list">
				</div>
		
						</div>
				</div>
				<div class="th th-8b17a36 elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-archive-posts" data-id="8b17a36" data-element_type="widget" data-settings="{&quot;archive_classic_columns&quot;:&quot;3&quot;,&quot;archive_classic_columns_tablet&quot;:&quot;2&quot;,&quot;archive_classic_columns_mobile&quot;:&quot;1&quot;,&quot;archive_classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;archive_classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_type&quot;:&quot;numbers&quot;}" data-widget_type="archive-posts.archive_classic">
				<div class="elementor-widget-container">
							<div class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid" role="list">
						<div class="elementor-posts-nothing-found">
					It seems we can’t find what you’re looking for.				</div>
					</div>
		
						</div>
				</div>
		<div class="th th-f8c0137 e-con-full e-flex e-con e-child" data-id="f8c0137" data-element_type="container">
		<div class="th th-3f5a76f e-con-full post-category e-flex e-con e-child" data-id="3f5a76f" data-element_type="container">
				<div class="th th-edc5f85 actor-video elementor-widget elementor-widget-video" data-id="edc5f85" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/07/spokepeople.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
				<div class="th th-b74786c elementor-widget elementor-widget-heading" data-id="b74786c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Worth Unlimited</h2>				</div>
				</div>
				</div>
		<div class="th th-323cc0d e-con-full post-category e-flex e-con e-child" data-id="323cc0d" data-element_type="container">
				<div class="th th-bff3047 actor-video elementor-widget elementor-widget-video" data-id="bff3047" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/07/spokepeople.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
				<div class="th th-8881aa0 elementor-widget elementor-widget-heading" data-id="8881aa0" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Worth Unlimited</h2>				</div>
				</div>
				</div>
		<div class="th th-a777112 e-con-full post-category e-flex e-con e-child" data-id="a777112" data-element_type="container">
				<div class="th th-1374fc7 actor-video elementor-widget elementor-widget-video" data-id="1374fc7" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/07/spokepeople.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
				<div class="th th-7e4a8b9 elementor-widget elementor-widget-heading" data-id="7e4a8b9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Worth Unlimited</h2>				</div>
				</div>
				</div>
				</div>
				<div class="th th-e2bd271 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="e2bd271" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Ready to Create a Video Like This?  <span class="mp-gradient-text"> <a href="/contact">  Let’s Talk <img src="/wp-content/uploads/2025/06/Group-20.svg"></a></span></h3>				</div>
				</div>
					</div>
				</div>
		<div class="th th-1259807 e-flex e-con-boxed e-con e-parent" data-id="1259807" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="th th-9e24b28 e-con-full e-flex elementor-invisible e-con e-child" data-id="9e24b28" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="th th-380df76 elementor-widget elementor-widget-heading" data-id="380df76" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">
Custom Video <br><span class="mp-gradient-text">Presentation 
Uses</span> </h3>				</div>
				</div>
		<div class="th th-87b7e44 e-con-full e-flex e-con e-child" data-id="87b7e44" data-element_type="container">
				<div class="th th-ef26b4a elementor-align-right main-button elementor-widget elementor-widget-button" data-id="ef26b4a" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>			</span>
									<span class="elementor-button-text">Talk with us</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
		<div class="th th-276e1c9 e-con-full e-flex elementor-invisible e-con e-child" data-id="276e1c9" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
		<div class="th th-5b0c4b2 e-con-full custom-video border-line e-flex e-con e-child" data-id="5b0c4b2" data-element_type="container">
				<div class="th th-4cf7f86 elementor-widget elementor-widget-heading" data-id="4cf7f86" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Used For</h2>				</div>
				</div>
				<div class="th th-88147b3 elementor-widget elementor-widget-text-editor" data-id="88147b3" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<ul><li>Sales Video</li><li>Product Demonstration</li><li>Website Walk-through</li><li>Educational Video</li><li>Training Video</li></ul>								</div>
				</div>
				</div>
		<div class="th th-6522bf4 e-con-full custom-video border-line e-flex e-con e-child" data-id="6522bf4" data-element_type="container">
				<div class="th th-43ba475 elementor-widget elementor-widget-heading" data-id="43ba475" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">You Get</h2>				</div>
				</div>
				<div class="th th-44aed8c elementor-widget elementor-widget-text-editor" data-id="44aed8c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<ul><li>Professional Spokesperson</li><li>Skilled Editing and Compositing</li><li>Motion Graphics</li><li>Graphics</li><li>Effects</li></ul>								</div>
				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="th th-85ed9dd e-flex e-con-boxed e-con e-parent" data-id="85ed9dd" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="th th-c6ead0a e-con-full e-flex e-con e-child" data-id="c6ead0a" data-element_type="container">
		<div class="th th-32f0e4e video-single e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="32f0e4e" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="th th-c289786 elementor-widget elementor-widget-heading" data-id="c289786" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Custom Made</h2>				</div>
				</div>
				<div class="th th-67de152 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="67de152" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>We use images, video, sound, text, and professional video spokesperson. We can create a Custom Video Presentation that is a Product Demonstration, a Website Walk-through, Informational, Training or Sales Video. We put it all together and provide you a Full HD 1920X1080 video in MP4 format suitable to upload to YouTube, Vimeo, Facebook.Twitter, Instagram, Dailymotion, Vevo, Metacafe, Flickr, whatever video service you like.</p>								</div>
				</div>
				</div>
		<div class="th th-c87106d video-single e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="c87106d" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="th th-9e23e86 elementor-widget elementor-widget-heading" data-id="9e23e86" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Improve Your Bottom Line</h2>				</div>
				</div>
				<div class="th th-50a9000 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="50a9000" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>You want to compete with the “Big Boys” but don’t want to pay “Big Studio” rates. We focus on video presentations that improve your bottom line without breaking your bank. Rather than spending tens or even hundreds of thousands on a “viral video”, we recommend creating videos that work for you 24/7. By utilizing a professional spokesperson and supporting your message with text and graphics, you are capitalizing on rich media to influence your potential customers.</p>								</div>
				</div>
				</div>
		<div class="th th-4503c91 video-single e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="4503c91" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="th th-7a560ed elementor-widget elementor-widget-heading" data-id="7a560ed" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Spokesperson Video</h2>				</div>
				</div>
				<div class="th th-ea604da elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="ea604da" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Most of us are aware of the power of video on the Internet. Enterprising companies have used that power to affect people on an unprecedented scale. A spokesperson video is almost like face-to-face contact with potential clients. This marketing method is doubly effective than supplying staid, plain text and fixed visuals. Visitors find video more enjoyable and it helps them comprehend information more easily.</p>								</div>
				</div>
				</div>
				</div>
				<div class="th th-0a940f3 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="0a940f3" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Ready to Create a Video Like This?  <span class="mp-gradient-text"> <a href="/contact">  Let’s Talk <img src="/wp-content/uploads/2025/06/Group-20.svg"></a></span></h3>				</div>
				</div>
					</div>
				</div>
		<div class="th th-ae2ca3b e-flex e-con-boxed e-con e-parent" data-id="ae2ca3b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="th th-9fad714 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="9fad714" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="th th-b1ed1f0 elementor-widget__width-initial video-process elementor-widget elementor-widget-video" data-id="b1ed1f0" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;start&quot;:0.03,&quot;autoplay&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/07/9032408-uhd_2160_3840_25fps.mp4#t=0.03" autoplay="" loop="" muted="muted" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
				</div>
		<div class="th th-8365915 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="8365915" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="th th-fd9a979 animated-slow elementor-widget__width-inherit elementor-invisible elementor-widget elementor-widget-heading" data-id="fd9a979" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Custom <span class="mp-gradient-text">Video</span></h2>				</div>
				</div>
				<div class="th th-09b8a2e elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="09b8a2e" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Custom videos can turn a website into an interactive and engaging experience. Use Web Video to showcase your company, products, or services. It is the best way to promote your brand and convert visitors into customers.</p><p>A custom video presentation on a website has the potential to increase conversions by 80%. It is one of the best ways of turning site visitors into buyers.</p>								</div>
				</div>
		<div class="th th-f271180 e-con-full e-flex e-con e-child" data-id="f271180" data-element_type="container">
				<div class="th th-ae4fa6a elementor-align-right main-button elementor-widget elementor-widget-button" data-id="ae4fa6a" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>			</span>
									<span class="elementor-button-text">Talk with us</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="th th-299c8e5 e-flex e-con-boxed e-con e-parent" data-id="299c8e5" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
				<div class="th th-66f020c elementor-invisible elementor-widget elementor-widget-heading" data-id="66f020c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">
Video <span class="mp-gradient-text">Marketing</span> </h3>				</div>
				</div>
				<div class="th th-f1452d7 elementor-widget__width-initial animated-slow elementor-invisible elementor-widget elementor-widget-text-editor" data-id="f1452d7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>It is usually used for video marketing purposes, as it helps to build trust with potential customers by presenting a credible person instead of a faceless corporation. It can also be used to introduce new products or services and explain the benefits of using them.</p>								</div>
				</div>
		<div class="th th-39eae75 e-con-full e-flex elementor-invisible e-con e-child" data-id="39eae75" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="th th-0d72a98 elementor-align-right main-button elementor-widget elementor-widget-button" data-id="0d72a98" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg xmlns="https://www.w3.org/2000/svg" width="14" height="13" viewbox="0 0 14 13" fill="none"><path d="M11.3371 3.69204L2.02916 13L0.5 11.4708L9.80688 2.16288L1.60415 2.16288V0L13.5 0V11.8958H11.3371V3.69204Z" fill="white"></path></svg>			</span>
									<span class="elementor-button-text">Talk with us</span>
					</span>
					</a>
				</div>
								</div>
				</div>
				</div>
					</div>
				</div>
		<div class="th th-8382675 e-flex e-con-boxed e-con e-parent" data-id="8382675" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="th th-1f0451f e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="1f0451f" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="th th-a6266c7 elementor-widget__width-initial animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="a6266c7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Let’s Create Something
<span class="mp-gradient-text">Like This!</span></h2>				</div>
				</div>
				<div class="th th-f6e7449 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="f6e7449" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Call Us : 1-801-748-2281</p>								</div>
				</div>
		<div class="th th-266c34e e-con-full e-flex e-con e-child" data-id="266c34e" data-element_type="container">
		<div class="th th-a35100e e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="a35100e" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;}">
				<div class="th th-04c3150 gallery-spacing-custom elementor-widget__width-initial elementor-widget elementor-widget-image-gallery" data-id="04c3150" data-element_type="widget" data-widget_type="image-gallery.default">
				<div class="elementor-widget-container">
							<div class="elementor-image-gallery">
			<div id="gallery-1" class="gallery galleryid-26 gallery-columns-4 gallery-size-full"><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="04c3150" data-elementor-lightbox-title="001" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUxNSwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC8wMDEucG5nIiwic2xpZGVzaG93IjoiMDRjMzE1MCJ9" href="/wp-content/uploads/2025/07/001.png"><img fetchpriority="high" width="300" height="300" src="/wp-content/uploads/2025/07/001.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/001.png 300w, /wp-content/uploads/2025/07/001-150x150.png 150w" sizes="(max-width: 300px) 100vw, 300px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="04c3150" data-elementor-lightbox-title="002" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUxNiwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC8wMDIucG5nIiwic2xpZGVzaG93IjoiMDRjMzE1MCJ9" href="/wp-content/uploads/2025/07/002.png"><img width="300" height="300" src="/wp-content/uploads/2025/07/002.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/002.png 300w, /wp-content/uploads/2025/07/002-150x150.png 150w" sizes="(max-width: 300px) 100vw, 300px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="04c3150" data-elementor-lightbox-title="w2-banner" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMywidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC93Mi1iYW5uZXIucG5nIiwic2xpZGVzaG93IjoiMDRjMzE1MCJ9" href="/wp-content/uploads/2025/07/w2-banner.png"><img loading="lazy" width="300" height="300" src="/wp-content/uploads/2025/07/w2-banner.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/w2-banner.png 300w, /wp-content/uploads/2025/07/w2-banner-150x150.png 150w" sizes="(max-width: 300px) 100vw, 300px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="04c3150" data-elementor-lightbox-title="Telly_46th_ProudTelly_Badge" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk4NCwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX1Byb3VkVGVsbHlfQmFkZ2UucG5nIiwic2xpZGVzaG93IjoiMDRjMzE1MCJ9" href="/wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge.png"><img loading="lazy" width="600" height="600" src="/wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge.png 600w, /wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge-300x300.png 300w, /wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge-150x150.png 150w" sizes="(max-width: 600px) 100vw, 600px"></a>
			</div></figure>
		</div>
		</div>
						</div>
				</div>
				</div>
		<div class="th th-d9e3d4f e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="d9e3d4f" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;}">
				<div class="th th-af8372e gallery-spacing-custom elementor-widget__width-initial elementor-widget elementor-widget-image-gallery" data-id="af8372e" data-element_type="widget" data-widget_type="image-gallery.default">
				<div class="elementor-widget-container">
							<div class="elementor-image-gallery">
			<div id="gallery-2" class="gallery galleryid-26 gallery-columns-3 gallery-size-full"><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="af8372e" data-elementor-lightbox-title="Telly_46th_badge_evergreen_bronze" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk4MCwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX2JhZGdlX2V2ZXJncmVlbl9icm9uemUucG5nIiwic2xpZGVzaG93IjoiYWY4MzcyZSJ9" href="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze.png"><img loading="lazy" width="317" height="173" src="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze.png 317w, /wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze-300x164.png 300w" sizes="(max-width: 317px) 100vw, 317px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="af8372e" data-elementor-lightbox-title="Telly_46th_badge_evergreen_silver" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk3OCwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX2JhZGdlX2V2ZXJncmVlbl9zaWx2ZXIucG5nIiwic2xpZGVzaG93IjoiYWY4MzcyZSJ9" href="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver.png"><img loading="lazy" width="317" height="172" src="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver.png 317w, /wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver-300x163.png 300w" sizes="(max-width: 317px) 100vw, 317px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="af8372e" data-elementor-lightbox-title="Telly_46th_badge_evergreen_gold" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk3OSwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX2JhZGdlX2V2ZXJncmVlbl9nb2xkLnBuZyIsInNsaWRlc2hvdyI6ImFmODM3MmUifQ%3D%3D" href="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold.png"><img loading="lazy" width="317" height="173" src="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold.png" class="attachment-full size-full" alt="" decoding="async" srcset="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold.png 317w, /wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold-300x164.png 300w" sizes="(max-width: 317px) 100vw, 317px"></a>
			</div></figure>
		</div>
		</div>
						</div>
				</div>
				</div>
				</div>
				</div>
		<div class="th th-2e0e7cb e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="2e0e7cb" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="th th-165a9b2 about-form elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="165a9b2" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;20&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
				<div class="elementor-widget-container">
							<form class="elementor-form" method="post" name="talking heads" aria-label="talking heads">
			<input type="hidden" name="post_id" value="2673">
			<input type="hidden" name="form_id" value="165a9b2">
			<input type="hidden" name="referer_title" value="Jed heads, Author at Video Agency">

			
			<div class="elementor-form-fields-wrapper elementor-labels-above">
								<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required elementor-mark-required">
												<label for="form-field-name" class="elementor-field-label">
								Name							</label>
														<input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-lg  elementor-field-textual" required="required">
											</div>
								<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required elementor-mark-required">
												<label for="form-field-email" class="elementor-field-label">
								Email							</label>
														<input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-lg  elementor-field-textual" required="required">
											</div>
								<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_1286767 elementor-col-100">
												<label for="form-field-field_1286767" class="elementor-field-label">
								Phone (optional)							</label>
														<input size="1" type="text" name="form_fields[field_1286767]" id="form-field-field_1286767" class="elementor-field elementor-size-lg  elementor-field-textual">
											</div>
								<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
												<label for="form-field-message" class="elementor-field-label">
								What type of video are you looking for?							</label>
						<textarea class="elementor-field-textual elementor-field  elementor-size-lg" name="form_fields[message]" id="form-field-message" rows="4"></textarea>				</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons">
					<button class="elementor-button elementor-size-sm" type="submit">
						<span class="elementor-button-content-wrapper">
															<span class="elementor-button-icon">
									<svg xmlns="https://www.w3.org/2000/svg" width="29" height="29" viewbox="0 0 29 29" fill="none"><path d="M24.1751 8.23609L3.4112 29L0 25.5888L20.7615 4.82489H2.46311V0H29V26.5369H24.1751V8.23609Z" fill="#EAA73F"></path></svg>																	</span>
																						<span class="elementor-button-text">Submit</span>
													</span>
					</button>
				</div>
			</div>
		</form>
						</div>
				</div>
				</div>
					</div>
				</div>
				</div>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
</body>
</html>
