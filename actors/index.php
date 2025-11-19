<?php
/**
 * actors Page
 * Converted from index.html
 */

require_once __DIR__ . '/../includes/config.php';

// Page-specific variables for head include
$page_title = 'Actor - Video Agency';
$page_description = 'Explore the world of actors at Talking Heads! Meet stars like Emi, Chantel, and more. Click to discover their stories and talents!';
$canonical_url = '/actors/';
$og_type = 'article';
$og_image = '/wp-content/uploads/2025/06/Group-20.svg';

// Include head (opens <html> and <head> tags)
require_once __DIR__ . '/../includes/head.php';

// Page-specific inline CSS (inside <head>)
?><style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:root { --wp--style--global--content-size: 800px;--wp--style--global--wide-size: 1200px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 24px; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 24px;}:root :where(.is-layout-grid){gap: 24px;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: underline;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;line-height: inherit;padding: calc(0.667em + 2px) calc(1.333em + 2px);text-decoration: none;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<style id="elementor-frontend-inline-css">
.elementor-kit-5{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-color-1ba7292:#EAA73F;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-kit-5 e-page-transition{background-color:#FFBC7D;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1600px;}.e-con{--container-max-width:1600px;}.elementor-widget:not(:last-child){margin-block-end:20px;}.elementor-element{--widgets-spacing:20px 20px;--widgets-spacing-row:20px;--widgets-spacing-column:20px;}{}h1.entry-title{display:var(--page-title-display);}.elementor-lightbox{background-color:#00000040;}.site-header .site-branding{flex-direction:column;align-items:stretch;}.site-header{padding-inline-end:0px;padding-inline-start:0px;}.site-footer .site-branding{flex-direction:column;align-items:stretch;}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-con{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-con{--container-max-width:767px;}}
.elementor-1147 .elementor-element.elementor-element-a814b9d{--display:flex;--min-height:608px;--flex-direction:column;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--align-items:center;--gap:50px 0px;--row-gap:50px;--column-gap:0px;--flex-wrap:wrap;--margin-top:-125px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-a814b9d:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-a814b9d > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-widget-heading .elementor-heading-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-primary );}.elementor-1147 .elementor-element.elementor-element-86c83cd > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-86c83cd{text-align:center;}.elementor-1147 .elementor-element.elementor-element-86c83cd .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:34px;font-weight:500;text-transform:capitalize;line-height:45px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-ecaf3db > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-ecaf3db{text-align:center;}.elementor-1147 .elementor-element.elementor-element-ecaf3db .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:125px;font-weight:600;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-3ffabf8{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-button .elementor-button{background-color:var( --e-global-color-accent );font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-1147 .elementor-element.elementor-element-90733be .elementor-button{background-color:var( --e-global-color-1ba7292 );font-family:"Goli", Sans-serif;font-size:18px;font-weight:600;text-transform:uppercase;border-radius:50px 50px 50px 50px;padding:20px 30px 20px 30px;}.elementor-1147 .elementor-element.elementor-element-90733be .elementor-button-content-wrapper{flex-direction:row-reverse;}.elementor-1147 .elementor-element.elementor-element-d1a17c7{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--gap:60px 0px;--row-gap:60px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:80px;--padding-bottom:80px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-d1a17c7:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-d1a17c7 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#141414;}.elementor-1147 .elementor-element.elementor-element-5dedb32{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:space-between;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-4367530 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-4367530{text-align:left;}.elementor-1147 .elementor-element.elementor-element-4367530 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:88px;font-weight:700;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-d639831{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-298f7e6 .elementor-button{background-color:var( --e-global-color-1ba7292 );font-family:"Goli", Sans-serif;font-size:18px;font-weight:600;text-transform:uppercase;border-radius:50px 50px 50px 50px;padding:20px 30px 20px 30px;}.elementor-1147 .elementor-element.elementor-element-298f7e6 .elementor-button-content-wrapper{flex-direction:row-reverse;}.elementor-1147 .elementor-element.elementor-element-3e2b52b{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:space-between;--gap:0px 36px;--row-gap:0px;--column-gap:36px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-7fcf30c{--display:flex;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-1ef7e06 .elementor-wrapper{--video-aspect-ratio:1.5;}.elementor-1147 .elementor-element.elementor-element-a04e52b{--display:flex;--border-radius:20px 20px 20px 20px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:50px;--padding-bottom:50px;--padding-left:50px;--padding-right:50px;}.elementor-1147 .elementor-element.elementor-element-a04e52b:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-a04e52b > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#2A2A2A;}.elementor-1147 .elementor-element.elementor-element-4927a4e > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-4927a4e{text-align:center;}.elementor-1147 .elementor-element.elementor-element-4927a4e .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:38px;font-weight:700;text-transform:capitalize;line-height:55px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-1e742c7{--display:flex;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-fadebc7 .elementor-wrapper{--video-aspect-ratio:1.5;}.elementor-1147 .elementor-element.elementor-element-f6b7f97{--display:flex;--border-radius:20px 20px 20px 20px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:50px;--padding-bottom:50px;--padding-left:50px;--padding-right:50px;}.elementor-1147 .elementor-element.elementor-element-f6b7f97:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-f6b7f97 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#2A2A2A;}.elementor-1147 .elementor-element.elementor-element-d36e42e > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-d36e42e{text-align:center;}.elementor-1147 .elementor-element.elementor-element-d36e42e .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:38px;font-weight:700;text-transform:capitalize;line-height:55px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-0dbe9e1{--display:flex;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-5262921 .elementor-wrapper{--video-aspect-ratio:1.5;}.elementor-1147 .elementor-element.elementor-element-ccc6412{--display:flex;--border-radius:20px 20px 20px 20px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:50px;--padding-bottom:50px;--padding-left:50px;--padding-right:50px;}.elementor-1147 .elementor-element.elementor-element-ccc6412:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-ccc6412 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#2A2A2A;}.elementor-1147 .elementor-element.elementor-element-0cac1f2 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-0cac1f2{text-align:center;}.elementor-1147 .elementor-element.elementor-element-0cac1f2 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:38px;font-weight:700;text-transform:capitalize;line-height:55px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-1ab0b0a{width:var( --container-widget-width, 94% );max-width:94%;--container-widget-width:94%;--container-widget-flex-grow:0;text-align:center;}.elementor-1147 .elementor-element.elementor-element-1ab0b0a > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-1ab0b0a .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:40px;font-weight:700;text-transform:capitalize;line-height:50px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-80c0242{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--gap:60px 0px;--row-gap:60px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:80px;--padding-bottom:80px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-80c0242:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-80c0242 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1147 .elementor-element.elementor-element-5331659{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:space-between;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-6d11a51 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-6d11a51{text-align:left;}.elementor-1147 .elementor-element.elementor-element-6d11a51 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:88px;font-weight:600;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-widget-nested-tabs.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs[data-touch-mode='false'] > .e-n-tabs-heading > .e-n-tab-title[aria-selected="false"]:hover{background:var( --e-global-color-accent );}.elementor-widget-nested-tabs.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs > .e-n-tabs-heading > .e-n-tab-title[aria-selected="true"], .elementor-widget-nested-tabs.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs[data-touch-mode='true'] > .e-n-tabs-heading > .e-n-tab-title[aria-selected="false"]:hover{background:var( --e-global-color-accent );}.elementor-widget-nested-tabs.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs > .e-n-tabs-heading > :is( .e-n-tab-title > .e-n-tab-title-text, .e-n-tab-title ){font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-1147 .elementor-element.elementor-element-2099653{--display:flex;}.elementor-1147 .elementor-element.elementor-element-63c1a5f{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-f7a6b01{--display:flex;}.elementor-1147 .elementor-element.elementor-element-38b5d2d{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-df36c29{--n-tabs-heading-justify-content:flex-end;--n-tabs-title-width:initial;--n-tabs-title-height:initial;--n-tabs-title-align-items:center;--n-tabs-title-flex-grow:0;--n-tabs-heading-wrap:wrap;--n-tabs-heading-overflow-x:initial;--n-tabs-title-white-space:initial;--n-tabs-title-gap:16px;--n-tabs-gap:0px;--n-tabs-title-border-radius:50px 50px 50px 50px;--n-tabs-title-padding-top:10px;--n-tabs-title-padding-right:28px;--n-tabs-title-padding-bottom:10px;--n-tabs-title-padding-left:28px;--n-tabs-title-font-size:20px;--n-tabs-title-color:#FFFFFF;--n-tabs-title-color-active:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-df36c29 > .elementor-widget-container > .e-n-tabs > .e-n-tabs-heading > .e-n-tab-title[aria-selected='false']:not( :hover ){background:#00000000;}.elementor-1147 .elementor-element.elementor-element-df36c29.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs[data-touch-mode='false'] > .e-n-tabs-heading > .e-n-tab-title[aria-selected="false"]:hover{background:#EAA73F;border-style:solid;border-width:1px 1px 1px 1px;border-color:#EAA73F;}.elementor-1147 .elementor-element.elementor-element-df36c29.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs > .e-n-tabs-heading > .e-n-tab-title[aria-selected="true"], .elementor-1147 .elementor-element.elementor-element-df36c29.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs[data-touch-mode='true'] > .e-n-tabs-heading > .e-n-tab-title[aria-selected="false"]:hover{background:#EAA73F;border-style:solid;border-width:1px 1px 1px 1px;border-color:#EAA73F;box-shadow:0px 0px 10px 0px rgba(0,0,0,0.5);}.elementor-1147 .elementor-element.elementor-element-df36c29 > .elementor-widget-container{margin:-60px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-df36c29.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs > .e-n-tabs-heading > .e-n-tab-title[aria-selected="false"]:not( :hover ){border-style:solid;border-width:1px 1px 1px 1px;border-color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-df36c29.elementor-widget-n-tabs > .elementor-widget-container > .e-n-tabs > .e-n-tabs-heading > :is( .e-n-tab-title > .e-n-tab-title-text, .e-n-tab-title ){font-family:"Goli", Sans-serif;font-weight:400;}.elementor-1147 .elementor-element.elementor-element-df36c29 [data-touch-mode="false"] .e-n-tab-title[aria-selected="false"]:hover{--n-tabs-title-color-hover:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-8f31137{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--gap:60px 0px;--row-gap:60px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:80px;--padding-bottom:80px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-8f31137:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-8f31137 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#141414;}.elementor-1147 .elementor-element.elementor-element-9d1dccb{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:space-between;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-1b3c1a1 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-1b3c1a1{text-align:left;}.elementor-1147 .elementor-element.elementor-element-1b3c1a1 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:88px;font-weight:600;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-67aa10d{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-9fccdda .elementor-button{background-color:var( --e-global-color-1ba7292 );font-family:"Goli", Sans-serif;font-size:18px;font-weight:600;text-transform:uppercase;border-radius:50px 50px 50px 50px;padding:20px 30px 20px 30px;}.elementor-1147 .elementor-element.elementor-element-9fccdda .elementor-button-content-wrapper{flex-direction:row-reverse;}.elementor-1147 .elementor-element.elementor-element-776f01a{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--gap:0px 30px;--row-gap:0px;--column-gap:30px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-b38ec5c{--display:flex;--border-radius:20px 20px 20px 20px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:55px;--padding-bottom:55px;--padding-left:30px;--padding-right:30px;}.elementor-1147 .elementor-element.elementor-element-b38ec5c:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-b38ec5c > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#2A2A2A;}.elementor-1147 .elementor-element.elementor-element-5d5e0ba > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-5d5e0ba .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:20px;font-weight:400;color:#EAA73F;}.elementor-1147 .elementor-element.elementor-element-e72a503 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:34px;font-weight:700;line-height:45px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-945d20b{--display:flex;--border-radius:20px 20px 20px 20px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:55px;--padding-bottom:55px;--padding-left:30px;--padding-right:30px;}.elementor-1147 .elementor-element.elementor-element-945d20b:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-945d20b > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#2A2A2A;}.elementor-1147 .elementor-element.elementor-element-ac68e88 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-ac68e88 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:20px;font-weight:400;color:#EAA73F;}.elementor-1147 .elementor-element.elementor-element-1965384 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:34px;font-weight:700;line-height:45px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-50d0e26{--display:flex;--border-radius:20px 20px 20px 20px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:55px;--padding-bottom:55px;--padding-left:30px;--padding-right:30px;}.elementor-1147 .elementor-element.elementor-element-50d0e26:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-50d0e26 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#2A2A2A;}.elementor-1147 .elementor-element.elementor-element-70423d0 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-70423d0 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:20px;font-weight:400;color:#EAA73F;}.elementor-1147 .elementor-element.elementor-element-54a602e .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:34px;font-weight:700;line-height:45px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-1789033{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--gap:0px 40px;--row-gap:0px;--column-gap:40px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:80px;--padding-left:30px;--padding-right:30px;}.elementor-1147 .elementor-element.elementor-element-1789033:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-1789033 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#141414;}.elementor-1147 .elementor-element.elementor-element-42492ef{--display:flex;--justify-content:flex-start;--align-items:flex-start;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--margin-top:10px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-f5a2b34 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-f5a2b34{text-align:left;}.elementor-1147 .elementor-element.elementor-element-f5a2b34 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:88px;font-weight:700;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-widget-text-editor{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );color:var( --e-global-color-text );}.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:var( --e-global-color-primary );}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap, .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-1147 .elementor-element.elementor-element-b877321{width:var( --container-widget-width, 94% );max-width:94%;--container-widget-width:94%;--container-widget-flex-grow:0;font-family:"Goli", Sans-serif;font-size:20px;font-weight:400;line-height:30px;}.elementor-1147 .elementor-element.elementor-element-b877321 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-f136ab0{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-2b2b3db .elementor-button{background-color:var( --e-global-color-1ba7292 );font-family:"Goli", Sans-serif;font-size:18px;font-weight:600;text-transform:uppercase;border-radius:50px 50px 50px 50px;padding:20px 30px 20px 30px;}.elementor-1147 .elementor-element.elementor-element-2b2b3db .elementor-button-content-wrapper{flex-direction:row-reverse;}.elementor-1147 .elementor-element.elementor-element-026d0bb{--display:flex;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-dd92006{width:var( --container-widget-width, 100% );max-width:100%;--container-widget-width:100%;--container-widget-flex-grow:0;}.elementor-1147 .elementor-element.elementor-element-8ae68d4{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--gap:20px 0px;--row-gap:20px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:80px;--padding-bottom:30px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-8ae68d4:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-8ae68d4 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1147 .elementor-element.elementor-element-b5904c6 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-b5904c6{text-align:center;}.elementor-1147 .elementor-element.elementor-element-b5904c6 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:88px;font-weight:700;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-8ed751e{width:var( --container-widget-width, 94% );max-width:94%;--container-widget-width:94%;--container-widget-flex-grow:0;text-align:center;font-family:"Goli", Sans-serif;font-size:20px;font-weight:400;line-height:30px;}.elementor-1147 .elementor-element.elementor-element-8ed751e > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-cfa81a2{--display:flex;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-a4e90a9 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-radius:20px 20px 20px 20px;}.elementor-1147 .elementor-element.elementor-element-a4e90a9 .elementor-wrapper{--video-aspect-ratio:1.77777;}.elementor-1147 .elementor-element.elementor-element-6643414{text-align:left;}.elementor-1147 .elementor-element.elementor-element-6643414 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:188px;font-weight:600;text-transform:uppercase;color:#FFFFFF1A;}.elementor-1147 .elementor-element.elementor-element-6984898{--display:flex;--flex-direction:column;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--align-items:center;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:50px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-6984898:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-6984898 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1147 .elementor-element.elementor-element-746d838 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:20px 0px 20px 0px;}.elementor-1147 .elementor-element.elementor-element-746d838{text-align:center;}.elementor-1147 .elementor-element.elementor-element-746d838 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:40px;font-weight:700;text-transform:capitalize;line-height:50px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-c3da6fb{--swiper-slides-to-display:3;--swiper-offset-size:300px;--swiper-slides-gap:25px;}.elementor-1147 .elementor-element.elementor-element-c3da6fb > .elementor-widget-container{padding:30px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-c3da6fb .swiper-slide > .elementor-element{height:100%;}.elementor-1147 .elementor-element.elementor-element-b7d7ace{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--gap:0px 45px;--row-gap:0px;--column-gap:45px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:80px;--padding-bottom:80px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-b7d7ace:not(.elementor-motion-effects-element-type-background), .elementor-1147 .elementor-element.elementor-element-b7d7ace > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-1147 .elementor-element.elementor-element-b21ed24{--display:flex;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-1451cc2{width:var( --container-widget-width, 100% );max-width:100%;--container-widget-width:100%;--container-widget-flex-grow:0;text-align:left;}.elementor-1147 .elementor-element.elementor-element-1451cc2 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-1451cc2 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:88px;font-weight:600;text-transform:capitalize;line-height:100px;color:#FFFFFF;}.elementor-1147 .elementor-element.elementor-element-8f6da4b{--display:flex;--gap:40px 0px;--row-gap:40px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-28445cc{--display:flex;--flex-direction:row;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:flex-start;--align-items:center;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-image-gallery .gallery-item .gallery-caption{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-1147 .elementor-element.elementor-element-f50944a{width:var( --container-widget-width, 100% );max-width:100%;--container-widget-width:100%;--container-widget-flex-grow:0;}.elementor-1147 .elementor-element.elementor-element-f50944a .gallery-item{padding:0 24px 24px 0;}.elementor-1147 .elementor-element.elementor-element-f50944a .gallery{margin:0 -24px -24px 0;}.elementor-1147 .elementor-element.elementor-element-f50944a .gallery-item .gallery-caption{text-align:center;}.elementor-1147 .elementor-element.elementor-element-e3154c7{--display:flex;--flex-direction:row;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:space-between;--align-items:center;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-079a842{width:var( --container-widget-width, 100% );max-width:100%;--container-widget-width:100%;--container-widget-flex-grow:0;}.elementor-1147 .elementor-element.elementor-element-079a842 .gallery-item{padding:0 50px 50px 0;}.elementor-1147 .elementor-element.elementor-element-079a842 .gallery{margin:0 -50px -50px 0;}.elementor-1147 .elementor-element.elementor-element-079a842 .gallery-item .gallery-caption{text-align:center;}.elementor-1147 .elementor-element.elementor-element-3a9b51b{--display:flex;--justify-content:center;--align-items:flex-start;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}:root{--page-title-display:none;}@media(min-width:768px){.elementor-1147 .elementor-element.elementor-element-3ffabf8{--width:330px;}.elementor-1147 .elementor-element.elementor-element-d639831{--width:255px;}.elementor-1147 .elementor-element.elementor-element-67aa10d{--width:255px;}.elementor-1147 .elementor-element.elementor-element-f136ab0{--width:255px;}.elementor-1147 .elementor-element.elementor-element-b21ed24{--width:100%;}.elementor-1147 .elementor-element.elementor-element-8f6da4b{--width:90%;}.elementor-1147 .elementor-element.elementor-element-3a9b51b{--width:65%;}}@media(max-width:1440px) and (min-width:768px){.elementor-1147 .elementor-element.elementor-element-3ffabf8{--width:328px;}}@media(max-width:1024px) and (min-width:768px){.elementor-1147 .elementor-element.elementor-element-d639831{--width:255px;}.elementor-1147 .elementor-element.elementor-element-67aa10d{--width:255px;}.elementor-1147 .elementor-element.elementor-element-f136ab0{--width:255px;}.elementor-1147 .elementor-element.elementor-element-3a9b51b{--width:100%;}}@media(max-width:1440px){.elementor-1147 .elementor-element.elementor-element-ecaf3db .elementor-heading-title{font-size:85px;line-height:90px;}.elementor-1147 .elementor-element.elementor-element-4367530 .elementor-heading-title{font-size:65px;line-height:75px;}.elementor-1147 .elementor-element.elementor-element-4927a4e .elementor-heading-title{font-size:28px;line-height:36px;}.elementor-1147 .elementor-element.elementor-element-d36e42e .elementor-heading-title{font-size:28px;line-height:36px;}.elementor-1147 .elementor-element.elementor-element-0cac1f2 .elementor-heading-title{font-size:28px;line-height:36px;}.elementor-1147 .elementor-element.elementor-element-6d11a51 .elementor-heading-title{font-size:65px;line-height:75px;}.elementor-1147 .elementor-element.elementor-element-1b3c1a1 .elementor-heading-title{font-size:65px;line-height:75px;}.elementor-1147 .elementor-element.elementor-element-e72a503 .elementor-heading-title{font-size:24px;line-height:35px;}.elementor-1147 .elementor-element.elementor-element-1965384 .elementor-heading-title{font-size:24px;line-height:35px;}.elementor-1147 .elementor-element.elementor-element-54a602e .elementor-heading-title{font-size:24px;line-height:35px;}.elementor-1147 .elementor-element.elementor-element-f5a2b34 .elementor-heading-title{font-size:65px;line-height:75px;}.elementor-1147 .elementor-element.elementor-element-b877321{--container-widget-width:100%;--container-widget-flex-grow:0;width:var( --container-widget-width, 100% );max-width:100%;}.elementor-1147 .elementor-element.elementor-element-b5904c6 .elementor-heading-title{font-size:65px;line-height:75px;}.elementor-1147 .elementor-element.elementor-element-8ed751e{--container-widget-width:100%;--container-widget-flex-grow:0;width:var( --container-widget-width, 100% );max-width:100%;}.elementor-1147 .elementor-element.elementor-element-c3da6fb{--swiper-slides-to-display:3;--swiper-offset-size:80px;}.elementor-1147 .elementor-element.elementor-element-1451cc2{--container-widget-width:95%;--container-widget-flex-grow:0;width:var( --container-widget-width, 95% );max-width:95%;}.elementor-1147 .elementor-element.elementor-element-1451cc2 .elementor-heading-title{font-size:65px;line-height:75px;}}@media(max-width:1024px){.elementor-1147 .elementor-element.elementor-element-a814b9d{--min-height:400px;}.elementor-1147 .elementor-element.elementor-element-86c83cd .elementor-heading-title{font-size:24px;line-height:40px;}.elementor-1147 .elementor-element.elementor-element-ecaf3db .elementor-heading-title{font-size:60px;line-height:75px;}.elementor-1147 .elementor-element.elementor-element-d1a17c7{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-4367530 .elementor-heading-title{font-size:30px;line-height:40px;}.elementor-1147 .elementor-element.elementor-element-a04e52b{--padding-top:20px;--padding-bottom:20px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-4927a4e .elementor-heading-title{font-size:24px;line-height:32px;}.elementor-1147 .elementor-element.elementor-element-f6b7f97{--padding-top:20px;--padding-bottom:20px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-d36e42e .elementor-heading-title{font-size:24px;line-height:32px;}.elementor-1147 .elementor-element.elementor-element-ccc6412{--padding-top:20px;--padding-bottom:20px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-0cac1f2 .elementor-heading-title{font-size:24px;line-height:32px;}.elementor-1147 .elementor-element.elementor-element-1ab0b0a .elementor-heading-title{font-size:30px;line-height:40px;}.elementor-1147 .elementor-element.elementor-element-80c0242{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-6d11a51 .elementor-heading-title{font-size:45px;line-height:55px;}.elementor-1147 .elementor-element.elementor-element-8f31137{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-1b3c1a1 .elementor-heading-title{font-size:45px;line-height:55px;}.elementor-1147 .elementor-element.elementor-element-776f01a{--gap:24px 0px;--row-gap:24px;--column-gap:0px;--flex-wrap:wrap;}.elementor-1147 .elementor-element.elementor-element-1789033{--flex-wrap:wrap;--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-42492ef{--margin-top:0px;--margin-bottom:30px;--margin-left:0px;--margin-right:0px;}.elementor-1147 .elementor-element.elementor-element-f5a2b34 .elementor-heading-title{font-size:45px;line-height:55px;}.elementor-1147 .elementor-element.elementor-element-b877321{font-size:16px;line-height:25px;}.elementor-1147 .elementor-element.elementor-element-8ae68d4{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-b5904c6 .elementor-heading-title{font-size:45px;line-height:55px;}.elementor-1147 .elementor-element.elementor-element-8ed751e{font-size:16px;line-height:25px;}.elementor-1147 .elementor-element.elementor-element-6984898{--padding-top:0px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-746d838 .elementor-heading-title{font-size:30px;line-height:40px;}.elementor-1147 .elementor-element.elementor-element-c3da6fb{--swiper-slides-to-display:2;--swiper-offset-size:100px;}.elementor-1147 .elementor-element.elementor-element-b7d7ace{--flex-wrap:wrap;--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-1451cc2{--container-widget-width:100%;--container-widget-flex-grow:0;width:var( --container-widget-width, 100% );max-width:100%;}.elementor-1147 .elementor-element.elementor-element-1451cc2 .elementor-heading-title{font-size:40px;line-height:45px;}.elementor-1147 .elementor-element.elementor-element-f50944a{--container-widget-width:100%;--container-widget-flex-grow:0;width:var( --container-widget-width, 100% );max-width:100%;}.elementor-1147 .elementor-element.elementor-element-079a842{--container-widget-width:100%;--container-widget-flex-grow:0;width:var( --container-widget-width, 100% );max-width:100%;}.elementor-1147 .elementor-element.elementor-element-3a9b51b{--margin-top:40px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;}}@media(max-width:767px){.elementor-1147 .elementor-element.elementor-element-a814b9d{--min-height:450px;--justify-content:center;--align-items:flex-start;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--gap:10px 0px;--row-gap:10px;--column-gap:0px;--padding-top:100px;--padding-bottom:30px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-86c83cd{width:100%;max-width:100%;}.elementor-1147 .elementor-element.elementor-element-86c83cd > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-86c83cd .elementor-heading-title{line-height:29px;}.elementor-1147 .elementor-element.elementor-element-ecaf3db > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-ecaf3db{text-align:center;}.elementor-1147 .elementor-element.elementor-element-ecaf3db .elementor-heading-title{font-size:30px;line-height:49px;}.elementor-1147 .elementor-element.elementor-element-d1a17c7{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-4367530 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-d639831{--width:255px;}.elementor-1147 .elementor-element.elementor-element-7fcf30c{--padding-top:0px;--padding-bottom:24px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-4927a4e .elementor-heading-title{font-size:24px;line-height:32px;}.elementor-1147 .elementor-element.elementor-element-1e742c7{--padding-top:0px;--padding-bottom:24px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-d36e42e .elementor-heading-title{font-size:24px;line-height:32px;}.elementor-1147 .elementor-element.elementor-element-0dbe9e1{--padding-top:0px;--padding-bottom:24px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-0cac1f2 .elementor-heading-title{font-size:24px;line-height:32px;}.elementor-1147 .elementor-element.elementor-element-1ab0b0a .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-80c0242{--gap:20px 0px;--row-gap:20px;--column-gap:0px;--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-6d11a51 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-2099653{--margin-top:100px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-f7a6b01{--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:100px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-df36c29 > .elementor-widget-container{margin:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-df36c29{--n-tabs-title-gap:16px;--n-tabs-gap:0px;--n-tabs-title-padding-top:10px;--n-tabs-title-padding-right:10px;--n-tabs-title-padding-bottom:10px;--n-tabs-title-padding-left:10px;}.elementor-1147 .elementor-element.elementor-element-8f31137{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-1b3c1a1 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-67aa10d{--width:255px;}.elementor-1147 .elementor-element.elementor-element-b38ec5c{--padding-top:25px;--padding-bottom:25px;--padding-left:25px;--padding-right:25px;}.elementor-1147 .elementor-element.elementor-element-e72a503 .elementor-heading-title{font-size:18px;line-height:28px;}.elementor-1147 .elementor-element.elementor-element-945d20b{--padding-top:25px;--padding-bottom:25px;--padding-left:25px;--padding-right:25px;}.elementor-1147 .elementor-element.elementor-element-1965384 .elementor-heading-title{font-size:18px;line-height:28px;}.elementor-1147 .elementor-element.elementor-element-50d0e26{--padding-top:25px;--padding-bottom:25px;--padding-left:25px;--padding-right:25px;}.elementor-1147 .elementor-element.elementor-element-54a602e .elementor-heading-title{font-size:18px;line-height:28px;}.elementor-1147 .elementor-element.elementor-element-42492ef{--align-items:center;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );}.elementor-1147 .elementor-element.elementor-element-f5a2b34 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-f136ab0{--width:255px;}.elementor-1147 .elementor-element.elementor-element-026d0bb{--margin-top:30px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;}.elementor-1147 .elementor-element.elementor-element-dd92006{--container-widget-width:100%;--container-widget-flex-grow:0;width:var( --container-widget-width, 100% );max-width:100%;}.elementor-1147 .elementor-element.elementor-element-8ae68d4{--padding-top:50px;--padding-bottom:0px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-b5904c6{text-align:left;}.elementor-1147 .elementor-element.elementor-element-b5904c6 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-8ed751e{text-align:left;}.elementor-1147 .elementor-element.elementor-element-6984898{--gap:20px 20px;--row-gap:20px;--column-gap:20px;--padding-top:0px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-746d838 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-c3da6fb{--swiper-slides-to-display:1;--swiper-offset-size:0px;}.elementor-1147 .elementor-element.elementor-element-c3da6fb > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-1147 .elementor-element.elementor-element-b7d7ace{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-1147 .elementor-element.elementor-element-b21ed24{--margin-top:30px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:30px;--padding-left:0px;--padding-right:0px;}.elementor-1147 .elementor-element.elementor-element-1451cc2 .elementor-heading-title{font-size:32px;line-height:42px;}.elementor-1147 .elementor-element.elementor-element-28445cc{--justify-content:center;}.elementor-1147 .elementor-element.elementor-element-f50944a{--container-widget-width:50%;--container-widget-flex-grow:0;width:var( --container-widget-width, 50% );max-width:50%;}.elementor-1147 .elementor-element.elementor-element-e3154c7{--justify-content:center;}.elementor-1147 .elementor-element.elementor-element-079a842{--container-widget-width:70%;--container-widget-flex-grow:0;width:var( --container-widget-width, 70% );max-width:70%;}.elementor-1147 .elementor-element.elementor-element-3a9b51b{--align-items:center;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );}}/* Start Custom Fonts CSS */@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 400;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-Regular.eot');
	src: url('/wp-content/uploads/2025/06/Goli-Regular.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-Regular.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-Regular.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-Regular.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-Regular.svg#Goli') format('svg');
}
@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 500;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-Medium.eot');
	src: url('/wp-content/uploads/2025/06/Goli-Medium.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-Medium.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-Medium.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-Medium.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-Medium.svg#Goli') format('svg');
}
@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 600;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-SemiBold.eot');
	src: url('/wp-content/uploads/2025/06/Goli-SemiBold.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.svg#Goli') format('svg');
}
@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 700;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-Bold.eot');
	src: url('/wp-content/uploads/2025/06/Goli-Bold.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-Bold.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-Bold.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-Bold.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-Bold.svg#Goli') format('svg');
}
/* End Custom Fonts CSS */
.elementor-7 .elementor-element.elementor-element-c56560b{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:30px;--padding-bottom:0px;--padding-left:30px;--padding-right:30px;--z-index:1;}.elementor-7 .elementor-element.elementor-element-c56560b:not(.elementor-motion-effects-element-type-background), .elementor-7 .elementor-element.elementor-element-c56560b > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#141414;}.elementor-7 .elementor-element.elementor-element-b3fd4e6{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-theme-site-logo .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-7 .elementor-element.elementor-element-8a7a87f{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-nav-menu .elementor-nav-menu .elementor-item{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item{color:var( --e-global-color-text );fill:var( --e-global-color-text );}.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:hover,
					.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:focus{color:var( --e-global-color-accent );fill:var( --e-global-color-accent );}.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
					.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after{background-color:var( --e-global-color-accent );}.elementor-widget-nav-menu .e--pointer-framed .elementor-item:before,
					.elementor-widget-nav-menu .e--pointer-framed .elementor-item:after{border-color:var( --e-global-color-accent );}.elementor-widget-nav-menu{--e-nav-menu-divider-color:var( --e-global-color-text );}.elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item, .elementor-widget-nav-menu .elementor-nav-menu--dropdown  .elementor-sub-item{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-menu-toggle{margin:0 auto;}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu .elementor-item{font-family:"Goli", Sans-serif;font-size:18px;font-weight:500;}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main .elementor-item{color:#FFFFFF;fill:#FFFFFF;}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main .elementor-item:hover,
					.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main .elementor-item:focus{color:#EAA73F;fill:#EAA73F;}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main .elementor-item.elementor-item-active{color:#EAA73F;}.elementor-7 .elementor-element.elementor-element-108ad57{--e-nav-menu-horizontal-menu-item-margin:calc( 5px / 2 );}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:5px;}.elementor-7 .elementor-element.elementor-element-094c366{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-button .elementor-button{background-color:var( --e-global-color-accent );font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-7 .elementor-element.elementor-element-da4cb3c .elementor-button{background-color:var( --e-global-color-1ba7292 );font-family:"Goli", Sans-serif;font-size:18px;font-weight:600;text-transform:uppercase;border-radius:50px 50px 50px 50px;padding:20px 30px 20px 30px;}.elementor-7 .elementor-element.elementor-element-da4cb3c .elementor-button-content-wrapper{flex-direction:row-reverse;}.elementor-7 .elementor-element.elementor-element-f950a46{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--gap:0px 0px;--row-gap:0px;--column-gap:0px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:30px;--padding-bottom:0px;--padding-left:30px;--padding-right:30px;--z-index:1;}.elementor-7 .elementor-element.elementor-element-f950a46:not(.elementor-motion-effects-element-type-background), .elementor-7 .elementor-element.elementor-element-f950a46 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#141414;}.elementor-7 .elementor-element.elementor-element-4b56f5b{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-7 .elementor-element.elementor-element-0d11267{--display:flex;}.elementor-7 .elementor-element.elementor-element-7a12545{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--justify-content:center;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-7 .elementor-element.elementor-element-c6ff626 .elementor-button{background-color:var( --e-global-color-1ba7292 );font-family:"Roboto", Sans-serif;font-size:18px;font-weight:600;text-transform:uppercase;border-radius:50px 50px 50px 50px;padding:20px 30px 20px 30px;}.elementor-7 .elementor-element.elementor-element-c6ff626 .elementor-button-content-wrapper{flex-direction:row-reverse;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-menu-toggle{margin:0 auto;background-color:#EAA73F;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu .elementor-item{font-family:"Roboto", Sans-serif;font-size:18px;font-weight:500;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item{color:#FFFFFF;fill:#FFFFFF;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item:hover,
					.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item:focus{color:#EAA73F;fill:#EAA73F;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item.elementor-item-active{color:#EAA73F;}.elementor-7 .elementor-element.elementor-element-8f1870a{--e-nav-menu-horizontal-menu-item-margin:calc( 5px / 2 );}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:5px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a, .elementor-7 .elementor-element.elementor-element-8f1870a .elementor-menu-toggle{color:#000000;fill:#000000;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a:hover,
					.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a:focus,
					.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a.elementor-item-active,
					.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a.highlighted{background-color:#EAA73F;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a.elementor-item-active{color:#000000;background-color:#EAA73F;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown .elementor-item, .elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown  .elementor-sub-item{font-family:"Roboto", Sans-serif;font-weight:500;}.elementor-7 .elementor-element.elementor-element-8f1870a div.elementor-menu-toggle{color:#FFFFFF;}.elementor-7 .elementor-element.elementor-element-8f1870a div.elementor-menu-toggle svg{fill:#FFFFFF;}.elementor-theme-builder-content-area{height:400px;}.elementor-location-header:before, .elementor-location-footer:before{content:"";display:table;clear:both;}@media(max-width:1024px){.elementor-7 .elementor-element.elementor-element-4b56f5b{--justify-content:center;}.elementor-7 .elementor-element.elementor-element-0d11267{--flex-direction:row;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:flex-end;--align-items:center;--gap:0px 24px;--row-gap:0px;--column-gap:24px;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-7 .elementor-element.elementor-element-8f1870a > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu .elementor-item{font-size:16px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main .elementor-item{padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}.elementor-7 .elementor-element.elementor-element-8f1870a{--e-nav-menu-horizontal-menu-item-margin:calc( 31px / 2 );--nav-menu-icon-size:32px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:31px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown .elementor-item, .elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown  .elementor-sub-item{font-size:18px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--dropdown a{padding-left:32px;padding-right:32px;padding-top:16px;padding-bottom:16px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main > .elementor-nav-menu > li > .elementor-nav-menu--dropdown, .elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu__container.elementor-nav-menu--dropdown{margin-top:30px !important;}}@media(min-width:768px){.elementor-7 .elementor-element.elementor-element-b3fd4e6{--width:15%;}.elementor-7 .elementor-element.elementor-element-8a7a87f{--width:68%;}.elementor-7 .elementor-element.elementor-element-094c366{--width:262px;}.elementor-7 .elementor-element.elementor-element-4b56f5b{--width:15%;}.elementor-7 .elementor-element.elementor-element-7a12545{--width:15%;}}@media(max-width:1440px) and (min-width:768px){.elementor-7 .elementor-element.elementor-element-094c366{--width:262px;}.elementor-7 .elementor-element.elementor-element-7a12545{--width:29%;}}@media(max-width:1024px) and (min-width:768px){.elementor-7 .elementor-element.elementor-element-4b56f5b{--width:300px;}.elementor-7 .elementor-element.elementor-element-7a12545{--width:190px;}}@media(max-width:1440px){.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu .elementor-item{font-size:18px;}.elementor-7 .elementor-element.elementor-element-108ad57{--e-nav-menu-horizontal-menu-item-margin:calc( 5px / 2 );}.elementor-7 .elementor-element.elementor-element-108ad57 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:5px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu .elementor-item{font-size:11px;}.elementor-7 .elementor-element.elementor-element-8f1870a{--e-nav-menu-horizontal-menu-item-margin:calc( 5px / 2 );}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:5px;}}@media(max-width:767px){.elementor-7 .elementor-element.elementor-element-c56560b{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-7 .elementor-element.elementor-element-f950a46{--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--justify-content:flex-start;--flex-wrap:nowrap;--padding-top:0px;--padding-bottom:0px;--padding-left:20px;--padding-right:20px;}.elementor-7 .elementor-element.elementor-element-4b56f5b{--width:100%;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;}.elementor-7 .elementor-element.elementor-element-0d11267{--width:100%;--justify-content:flex-end;--gap:5px 5px;--row-gap:5px;--column-gap:5px;--flex-wrap:nowrap;}.elementor-7 .elementor-element.elementor-element-7a12545{--width:100%;--align-items:center;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--gap:0px 0px;--row-gap:0px;--column-gap:0px;}.elementor-7 .elementor-element.elementor-element-8f1870a .elementor-nav-menu .elementor-item{font-size:16px;}.elementor-7 .elementor-element.elementor-element-8f1870a{--nav-menu-icon-size:28px;}}/* Start Custom Fonts CSS */@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 400;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-Regular.eot');
	src: url('/wp-content/uploads/2025/06/Goli-Regular.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-Regular.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-Regular.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-Regular.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-Regular.svg#Goli') format('svg');
}
@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 500;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-Medium.eot');
	src: url('/wp-content/uploads/2025/06/Goli-Medium.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-Medium.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-Medium.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-Medium.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-Medium.svg#Goli') format('svg');
}
@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 600;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-SemiBold.eot');
	src: url('/wp-content/uploads/2025/06/Goli-SemiBold.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-SemiBold.svg#Goli') format('svg');
}
@font-face {
	font-family: 'Goli';
	font-style: normal;
	font-weight: 700;
	font-display: auto;
	src: url('/wp-content/uploads/2025/06/Goli-Bold.eot');
	src: url('/wp-content/uploads/2025/06/Goli-Bold.eot#iefix') format('embedded-opentype'),
		url('/wp-content/uploads/2025/06/Goli-Bold.woff2') format('woff2'),
		url('/wp-content/uploads/2025/06/Goli-Bold.woff') format('woff'),
		url('/wp-content/uploads/2025/06/Goli-Bold.ttf') format('truetype'),
		url('/wp-content/uploads/2025/06/Goli-Bold.svg#Goli') format('svg');
}
/* End Custom Fonts CSS */
.elementor-53 .elementor-element.elementor-element-2b779b1{--display:flex;--flex-direction:column;--container-widget-width:100%;--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:70px;--padding-bottom:70px;--padding-left:30px;--padding-right:30px;}.elementor-53 .elementor-element.elementor-element-2b779b1:not(.elementor-motion-effects-element-type-background), .elementor-53 .elementor-element.elementor-element-2b779b1 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;}.elementor-53 .elementor-element.elementor-element-0151371{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-53 .elementor-element.elementor-element-f08bf05{--display:flex;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-heading .elementor-heading-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-primary );}.elementor-53 .elementor-element.elementor-element-0c303aa .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:24px;font-weight:700;color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-945d746{--grid-template-columns:repeat(0, auto);--icon-size:20px;--grid-column-gap:15px;--grid-row-gap:0px;}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-widget-container{text-align:left;}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-social-icon{background-color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-social-icon i{color:#000000;}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-social-icon svg{fill:#000000;}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-social-icon:hover{background-color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-social-icon:hover i{color:var( --e-global-color-1ba7292 );}.elementor-53 .elementor-element.elementor-element-945d746 .elementor-social-icon:hover svg{fill:var( --e-global-color-1ba7292 );}.elementor-widget-theme-site-logo .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-53 .elementor-element.elementor-element-7feac32{text-align:left;}.elementor-53 .elementor-element.elementor-element-7feac32 img{width:75%;max-width:100%;}.elementor-53 .elementor-element.elementor-element-4d22395{--display:flex;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-53 .elementor-element.elementor-element-8e8f0a7 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:24px;font-weight:700;color:#FFFFFF;}.elementor-widget-nav-menu .elementor-nav-menu .elementor-item{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item{color:var( --e-global-color-text );fill:var( --e-global-color-text );}.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:hover,
					.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:focus{color:var( --e-global-color-accent );fill:var( --e-global-color-accent );}.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
					.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after{background-color:var( --e-global-color-accent );}.elementor-widget-nav-menu .e--pointer-framed .elementor-item:before,
					.elementor-widget-nav-menu .e--pointer-framed .elementor-item:after{border-color:var( --e-global-color-accent );}.elementor-widget-nav-menu{--e-nav-menu-divider-color:var( --e-global-color-text );}.elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item, .elementor-widget-nav-menu .elementor-nav-menu--dropdown  .elementor-sub-item{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu .elementor-item{font-family:"Goli", Sans-serif;font-size:18px;font-weight:500;}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main .elementor-item{color:#FFFFFF;fill:#FFFFFF;padding-left:0px;padding-right:0px;padding-top:10px;padding-bottom:10px;}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main .elementor-item:hover,
					.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main .elementor-item:focus{color:#EAA73F;fill:#EAA73F;}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main .elementor-item.elementor-item-active{color:#EAA73F;}.elementor-53 .elementor-element.elementor-element-060c740{--e-nav-menu-horizontal-menu-item-margin:calc( 0px / 2 );}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:0px;}.elementor-53 .elementor-element.elementor-element-2d97379{--display:flex;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-53 .elementor-element.elementor-element-2a1aa6c .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:24px;font-weight:700;color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu .elementor-item{font-family:"Goli", Sans-serif;font-size:18px;font-weight:500;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main .elementor-item{color:#FFFFFF;fill:#FFFFFF;padding-left:0px;padding-right:0px;padding-top:10px;padding-bottom:10px;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main .elementor-item:hover,
					.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main .elementor-item.elementor-item-active,
					.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main .elementor-item.highlighted,
					.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main .elementor-item:focus{color:#EAA73F;fill:#EAA73F;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main .elementor-item.elementor-item-active{color:#EAA73F;}.elementor-53 .elementor-element.elementor-element-3abe232{--e-nav-menu-horizontal-menu-item-margin:calc( 0px / 2 );}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu--main:not(.elementor-nav-menu--layout-horizontal) .elementor-nav-menu > li:not(:last-child){margin-bottom:0px;}.elementor-53 .elementor-element.elementor-element-b65a1a1{--display:flex;--flex-direction:column;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--container-widget-height:initial;--container-widget-flex-grow:0;--container-widget-align-self:initial;--flex-wrap-mobile:wrap;--align-items:flex-start;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-53 .elementor-element.elementor-element-f8d9a64 .elementor-heading-title{font-family:"Goli", Sans-serif;font-size:24px;font-weight:700;color:#FFFFFF;}.elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after{border-color:var( --e-global-color-text );}.elementor-widget-icon-list .elementor-icon-list-icon i{color:var( --e-global-color-primary );}.elementor-widget-icon-list .elementor-icon-list-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-icon-list .elementor-icon-list-item > .elementor-icon-list-text, .elementor-widget-icon-list .elementor-icon-list-item > a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-icon-list .elementor-icon-list-text{color:var( --e-global-color-secondary );}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-block-end:calc(15px/2);}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-block-start:calc(15px/2);}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-inline:calc(15px/2);}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-items.elementor-inline-items{margin-inline:calc(-15px/2);}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{inset-inline-end:calc(-15px/2);}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-icon i{transition:color 0.3s;}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-icon svg{transition:fill 0.3s;}.elementor-53 .elementor-element.elementor-element-563fd92{--e-icon-list-icon-size:14px;--icon-vertical-offset:0px;}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-item > a{font-family:"Goli", Sans-serif;font-size:18px;font-weight:500;}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-text{color:#FFFFFF;transition:color 0.3s;}.elementor-53 .elementor-element.elementor-element-118acd4{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-53 .elementor-element.elementor-element-133e546{--display:flex;--justify-content:center;--align-items:flex-start;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-text-editor{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );color:var( --e-global-color-text );}.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:var( --e-global-color-primary );}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap, .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-53 .elementor-element.elementor-element-4ae0779 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-53 .elementor-element.elementor-element-4ae0779{font-family:"Goli", Sans-serif;font-size:18px;font-weight:400;line-height:25px;color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-4ae0779 a{color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-4ae0779 a:hover, .elementor-53 .elementor-element.elementor-element-4ae0779 a:focus{color:#EAA73F;}.elementor-53 .elementor-element.elementor-element-7d341c2{--display:flex;--justify-content:flex-start;--align-items:flex-start;--container-widget-width:calc( ( 1 - var( --container-widget-flex-grow ) ) * 100% );--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}.elementor-widget-icon-box.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-primary );}.elementor-widget-icon-box.elementor-view-framed .elementor-icon, .elementor-widget-icon-box.elementor-view-default .elementor-icon{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-icon-box .elementor-icon-box-title, .elementor-widget-icon-box .elementor-icon-box-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-icon-box .elementor-icon-box-title{color:var( --e-global-color-primary );}.elementor-widget-icon-box:has(:hover) .elementor-icon-box-title,
					 .elementor-widget-icon-box:has(:focus) .elementor-icon-box-title{color:var( --e-global-color-primary );}.elementor-widget-icon-box .elementor-icon-box-description{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );color:var( --e-global-color-text );}.elementor-53 .elementor-element.elementor-element-0e92558 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-wrapper{align-items:center;text-align:left;}.elementor-53 .elementor-element.elementor-element-0e92558{--icon-box-icon-margin:16px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title{margin-block-end:0px;color:#FFFFFF;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon{font-size:65px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title, .elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title a{font-family:"Goli", Sans-serif;font-size:85px;font-weight:700;line-height:100px;}.elementor-53 .elementor-element.elementor-element-0e92558:has(:hover) .elementor-icon-box-title,
					 .elementor-53 .elementor-element.elementor-element-0e92558:has(:focus) .elementor-icon-box-title{color:#FFFFFF;}.elementor-theme-builder-content-area{height:400px;}.elementor-location-header:before, .elementor-location-footer:before{content:"";display:table;clear:both;}@media(max-width:1440px){.elementor-53 .elementor-element.elementor-element-945d746{--icon-size:16px;}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu .elementor-item{font-size:14px;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu .elementor-item{font-size:14px;}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-item > a{font-size:16px;}.elementor-53 .elementor-element.elementor-element-4ae0779{font-size:16px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon{font-size:44px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title, .elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title a{font-size:55px;line-height:70px;}}@media(max-width:1024px){.elementor-53 .elementor-element.elementor-element-0151371{--flex-wrap:wrap;}.elementor-53 .elementor-element.elementor-element-0c303aa .elementor-heading-title{font-size:20px;}.elementor-53 .elementor-element.elementor-element-945d746{--grid-column-gap:5px;}.elementor-53 .elementor-element.elementor-element-8e8f0a7 .elementor-heading-title{font-size:20px;}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu .elementor-item{font-size:14px;}.elementor-53 .elementor-element.elementor-element-2a1aa6c .elementor-heading-title{font-size:20px;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu .elementor-item{font-size:14px;}.elementor-53 .elementor-element.elementor-element-f8d9a64 .elementor-heading-title{font-size:20px;}.elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-53 .elementor-element.elementor-element-563fd92 .elementor-icon-list-item > a{font-size:13px;}.elementor-53 .elementor-element.elementor-element-4ae0779{font-size:17px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon{font-size:30px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title, .elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title a{font-size:35px;line-height:45px;}}@media(max-width:767px){.elementor-53 .elementor-element.elementor-element-2b779b1{--padding-top:50px;--padding-bottom:50px;--padding-left:20px;--padding-right:20px;}.elementor-53 .elementor-element.elementor-element-0c303aa .elementor-heading-title{font-size:24px;}.elementor-53 .elementor-element.elementor-element-945d746 > .elementor-widget-container{margin:10px 0px 10px 0px;padding:0px 0px 0px 0px;}.elementor-53 .elementor-element.elementor-element-8e8f0a7 .elementor-heading-title{font-size:24px;}.elementor-53 .elementor-element.elementor-element-060c740 .elementor-nav-menu .elementor-item{font-size:16px;}.elementor-53 .elementor-element.elementor-element-2a1aa6c .elementor-heading-title{font-size:24px;}.elementor-53 .elementor-element.elementor-element-3abe232 .elementor-nav-menu .elementor-item{font-size:16px;}.elementor-53 .elementor-element.elementor-element-f8d9a64 .elementor-heading-title{font-size:24px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-wrapper{align-items:end;text-align:justify;}.elementor-53 .elementor-element.elementor-element-0e92558{--icon-box-icon-margin:16px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title{margin-block-end:0px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon{font-size:25px;}.elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title, .elementor-53 .elementor-element.elementor-element-0e92558 .elementor-icon-box-title a{font-size:28px;line-height:32px;}}@media(min-width:768px){.elementor-53 .elementor-element.elementor-element-f08bf05{--width:70%;}.elementor-53 .elementor-element.elementor-element-4d22395{--width:60%;}.elementor-53 .elementor-element.elementor-element-2d97379{--width:60%;}.elementor-53 .elementor-element.elementor-element-b65a1a1{--width:50%;}}@media(max-width:1440px) and (min-width:768px){.elementor-53 .elementor-element.elementor-element-f08bf05{--width:70%;}.elementor-53 .elementor-element.elementor-element-4d22395{--width:65%;}.elementor-53 .elementor-element.elementor-element-b65a1a1{--width:80%;}.elementor-53 .elementor-element.elementor-element-133e546{--width:100%;}}@media(max-width:1024px) and (min-width:768px){.elementor-53 .elementor-element.elementor-element-f08bf05{--width:48%;}.elementor-53 .elementor-element.elementor-element-4d22395{--width:48%;}.elementor-53 .elementor-element.elementor-element-2d97379{--width:48%;}.elementor-53 .elementor-element.elementor-element-b65a1a1{--width:48%;}}
</style>
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
	
	
</style>
<style id="wp-custom-css">
			#content > div > div > div.elementor-element.elementor-element-57e0ccc.e-flex.e-con-boxed.e-con.e-parent.e-lazyloaded{background-color:black;}
.container {
  width: 100%; /* Default 100% width on small screens */
  margin-right: auto;
  margin-left: auto;
}

/* Small devices (tablets, 576px and up) */
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

/* Medium devices (desktops, 768px and up) */
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

/* Large devices (large desktops, 992px and up) */
@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px; /* Negative margins to cancel column padding */
  margin-left: -15px;
}
.col-md-6 {
  position: relative;
  width: 100%;
  padding-right: 15px; /* Gutters (the space between columns) */
  padding-left: 15px;
}

/* For medium devices and larger (screens 768px and up) */
@media (min-width: 768px) {
  .col-md-6 {
    flex: 0 0 50%; /* Sets the column to take up exactly 50% of the row space */
    max-width: 50%; /* Ensures the column's width does not exceed 50% */
  }
}
.text-white{color:white}
.special{
	max-height:446px;
	max-width:446px!important;
	border-radius: 20px;
	border:black thin solid;
	background:black;
	 margin: 0 auto!important;
	display: block;
}
.text-center{text-align:center}		</style>

<?php
?></head>

<body <?php body_class(); ?>>

<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<?php require_once __DIR__ . '/../includes/header.php'; ?>

<main id="content" class="site-main post-1147 page type-page status-publish hentry">

	
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="1147" class="elementor elementor-1147" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-a814b9d e-flex e-con-boxed e-con e-parent" data-id="a814b9d" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;https:\/\/vimeo.com\/1102560126\/b123a0265c&quot;,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
					<div class="e-con-inner">
		<div class="elementor-background-video-container" aria-hidden="true">
							<div class="elementor-background-video-embed"></div>
						</div>		<div class="elementor-element elementor-element-86c83cd elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-heading" data-id="86c83cd" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h4 class="elementor-heading-title elementor-size-default">Video Solutions</h4>				</div>
				</div>
				<div class="elementor-element elementor-element-ecaf3db elementor-invisible elementor-widget elementor-widget-heading" data-id="ecaf3db" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Website <span class="mp-gradient-text">Spokespeople</span> that Convert
</h2>				</div>
				</div>
		<div class="elementor-element elementor-element-3ffabf8 e-con-full e-flex e-con e-child" data-id="3ffabf8" data-element_type="container">
				<div class="elementor-element elementor-element-90733be elementor-align-right main-button elementor-widget elementor-widget-button" data-id="90733be" data-element_type="widget" data-widget_type="button.default">
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
					</div>
				</div>
		<div class="elementor-element elementor-element-d1a17c7 animated-slow e-flex e-con-boxed elementor-invisible e-con e-parent" data-id="d1a17c7" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-5dedb32 e-con-full e-flex e-con e-child" data-id="5dedb32" data-element_type="container">
				<div class="elementor-element elementor-element-4367530 elementor-widget elementor-widget-heading" data-id="4367530" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Choose Your Perfect <span class="mp-gradient-text">Spokesperson</span></h3>				</div>
				</div>
		<div class="elementor-element elementor-element-d639831 e-con-full e-flex e-con e-child" data-id="d639831" data-element_type="container">
				<div class="elementor-element elementor-element-298f7e6 elementor-align-right main-button elementor-widget elementor-widget-button" data-id="298f7e6" data-element_type="widget" data-widget_type="button.default">
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
		<div class="elementor-element elementor-element-3e2b52b e-con-full e-flex e-con e-child" data-id="3e2b52b" data-element_type="container">
		<div class="elementor-element elementor-element-7fcf30c e-con-full sopkespeople e-flex e-con e-child" data-id="7fcf30c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;}">
				<div class="elementor-element elementor-element-1ef7e06 actor-video elementor-widget elementor-widget-video" data-id="1ef7e06" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/08/PROFESSIONALLY-PRODUCED9-16_melinda.webm" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
		<div class="elementor-element elementor-element-a04e52b e-con-full gradient-line border-line e-flex e-con e-child" data-id="a04e52b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-4927a4e elementor-widget elementor-widget-heading" data-id="4927a4e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">On-Location Shoots</h3>				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-1e742c7 e-con-full sopkespeople e-flex e-con e-child" data-id="1e742c7" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;}">
				<div class="elementor-element elementor-element-fadebc7 actor-video elementor-widget elementor-widget-video" data-id="fadebc7" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;}}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/08/Emi.webm" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
		<div class="elementor-element elementor-element-f6b7f97 e-con-full gradient-line border-line e-flex e-con e-child" data-id="f6b7f97" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-d36e42e elementor-widget elementor-widget-heading" data-id="d36e42e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Greenscreen Magic</h3>				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-0dbe9e1 e-con-full sopkespeople e-flex e-con e-child" data-id="0dbe9e1" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;video&quot;}">
				<div class="elementor-element elementor-element-5262921 actor-video elementor-widget elementor-widget-video" data-id="5262921" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;}}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="/wp-content/uploads/2025/08/Denise.webm" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload"></video>
				</div>
						</div>
				</div>
		<div class="elementor-element elementor-element-ccc6412 e-con-full gradient-line border-line e-flex e-con e-child" data-id="ccc6412" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-0cac1f2 elementor-widget elementor-widget-heading" data-id="0cac1f2" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Authentic UGC Style</h3>				</div>
				</div>
				</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1ab0b0a elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="1ab0b0a" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Ready for a Spokesperson Video that Sells?  <span class="mp-gradient-text"> <a href="/contact">  Let’s Talk <img decoding="async" src="/wp-content/uploads/2025/06/Group-20.svg"></a></span></h3>				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-80c0242 our-spokepeople-wrapper e-flex e-con-boxed e-con e-parent" data-id="80c0242" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-5331659 e-con-full e-flex e-con e-child" data-id="5331659" data-element_type="container">
				<div class="elementor-element elementor-element-6d11a51 elementor-widget elementor-widget-heading" data-id="6d11a51" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Our <span class="mp-gradient-text">Spokespeople</span></h2>				</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-df36c29 tab-wrapper e-n-tabs-mobile elementor-widget elementor-widget-n-tabs" data-id="df36c29" data-element_type="widget" data-settings="{&quot;tabs_justify_horizontal&quot;:&quot;end&quot;,&quot;horizontal_scroll&quot;:&quot;disable&quot;}" data-widget_type="nested-tabs.default">
				<div class="elementor-widget-container">
							<div class="e-n-tabs" data-widget-number="234056745" aria-label="Tabs. Open items with Enter or Space, close with Escape and navigate using the Arrow keys.">
			<div class="e-n-tabs-heading" role="tablist">
					<button id="e-n-tab-title-2340567451" class="e-n-tab-title" aria-selected="true" data-tab-index="1" role="tab" tabindex="0" aria-controls="e-n-tab-content-2340567451" style="--n-tabs-title-order: 1;">
					<span class="e-n-tab-icon">
			<svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"><path fill="currentColor" stroke="currentColor" stroke-linejoin="round" stroke-width="4" d="M19.225 6.37c-3.183 0-8.063 1.837-6.366 13.213q.04.258.095.557c.31 1.711.788 4.36-2.254 6.544c2.069 1.698 5.016 3.395 8.597 4.13a28 28 0 0 1-.532 2.414c-.291 1.068-.901 1.825-1.991 2.148c-.96.284-1.966.514-2.996.75q-.398.09-.8.184c-1.285.299-2.595.63-3.756 1.098c-1.164.47-2.246 1.103-3.028 2.047c-.796.963-1.222 2.177-1.193 3.695c.01.472.414.85.91.85h36.178c.496 0 .9-.378.91-.85c.029-1.518-.396-2.732-1.193-3.695c-.781-.944-1.864-1.578-3.027-2.047c-1.162-.469-2.472-.8-3.758-1.099l-.798-.183c-1.031-.236-2.037-.466-2.997-.75c-1.09-.323-1.7-1.08-1.991-2.148a27 27 0 0 1-.606-2.88c2.738-.824 5.648-2.305 8.671-4.67l-.014-.014c-1.419-1.358-4.079-3.904-4.268-9.948c0-8.322-5.306-15.637-13.793-9.347Z"></path></svg>			<svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" viewbox="0 0 48 48"><path fill="currentColor" stroke="currentColor" stroke-linejoin="round" stroke-width="4" d="M19.225 6.37c-3.183 0-8.063 1.837-6.366 13.213q.04.258.095.557c.31 1.711.788 4.36-2.254 6.544c2.069 1.698 5.016 3.395 8.597 4.13a28 28 0 0 1-.532 2.414c-.291 1.068-.901 1.825-1.991 2.148c-.96.284-1.966.514-2.996.75q-.398.09-.8.184c-1.285.299-2.595.63-3.756 1.098c-1.164.47-2.246 1.103-3.028 2.047c-.796.963-1.222 2.177-1.193 3.695c.01.472.414.85.91.85h36.178c.496 0 .9-.378.91-.85c.029-1.518-.396-2.732-1.193-3.695c-.781-.944-1.864-1.578-3.027-2.047c-1.162-.469-2.472-.8-3.758-1.099l-.798-.183c-1.031-.236-2.037-.466-2.997-.75c-1.09-.323-1.7-1.08-1.991-2.148a27 27 0 0 1-.606-2.88c2.738-.824 5.648-2.305 8.671-4.67l-.014-.014c-1.419-1.358-4.079-3.904-4.268-9.948c0-8.322-5.306-15.637-13.793-9.347Z"></path></svg>		</span>
					<span class="e-n-tab-title-text">
				Women			</span>
		</button>
				<button id="e-n-tab-title-2340567452" class="e-n-tab-title" aria-selected="false" data-tab-index="2" role="tab" tabindex="-1" aria-controls="e-n-tab-content-2340567452" style="--n-tabs-title-order: 2;">
					<span class="e-n-tab-icon">
			<svg xmlns="https://www.w3.org/2000/svg" width="22" height="24" viewbox="0 0 22 24"><path fill="currentColor" d="M14.145 16.629a24 24 0 0 1-.052-2.525l-.001.037a4.85 4.85 0 0 0 1.333-2.868l.002-.021c.339-.028.874-.358 1.03-1.666a1.22 1.22 0 0 0-.455-1.218l-.003-.002c.552-1.66 1.698-6.796-2.121-7.326C13.485.35 12.479 0 11.171 0c-5.233.096-5.864 3.951-4.72 8.366a1.22 1.22 0 0 0-.455 1.229l-.001-.008c.16 1.306.691 1.638 1.03 1.666a4.86 4.86 0 0 0 1.374 2.888a25 25 0 0 1-.058 2.569l.005-.081C7.308 19.413.32 18.631 0 24h22.458c-.322-5.369-7.278-4.587-8.314-7.371z"></path></svg>			<svg xmlns="https://www.w3.org/2000/svg" width="22" height="24" viewbox="0 0 22 24"><path fill="currentColor" d="M14.145 16.629a24 24 0 0 1-.052-2.525l-.001.037a4.85 4.85 0 0 0 1.333-2.868l.002-.021c.339-.028.874-.358 1.03-1.666a1.22 1.22 0 0 0-.455-1.218l-.003-.002c.552-1.66 1.698-6.796-2.121-7.326C13.485.35 12.479 0 11.171 0c-5.233.096-5.864 3.951-4.72 8.366a1.22 1.22 0 0 0-.455 1.229l-.001-.008c.16 1.306.691 1.638 1.03 1.666a4.86 4.86 0 0 0 1.374 2.888a25 25 0 0 1-.058 2.569l.005-.081C7.308 19.413.32 18.631 0 24h22.458c-.322-5.369-7.278-4.587-8.314-7.371z"></path></svg>		</span>
					<span class="e-n-tab-title-text">
				Men			</span>
		</button>
					</div>
			<div class="e-n-tabs-content">
				<div id="e-n-tab-content-2340567451" role="tabpanel" aria-labelledby="e-n-tab-title-2340567451" data-tab-index="1" style="--n-tabs-title-order: 1;" class="e-active elementor-element elementor-element-2099653 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="2099653" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
		<div class="elementor-element elementor-element-63c1a5f e-flex e-con-boxed e-con e-child" data-id="63c1a5f" data-element_type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-e835950 category-gender elementor-widget elementor-widget-shortcode" data-id="e835950" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">           
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4871" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Angie_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Angie						</div>
					</a>
				
				<div id="mp-modal-4871" class="modal actor-popup">
					<h2>Angie <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262833?h=a6161b81f9&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4873" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Angelica_2.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Angelica						</div>
					</a>
				
				<div id="mp-modal-4873" class="modal actor-popup">
					<h2>Angelica <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262808?h=0a59e32706&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4874" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Brittany_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Brittany						</div>
					</a>
				
				<div id="mp-modal-4874" class="modal actor-popup">
					<h2>Brittany <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262877?h=2cc76835c8&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4877" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Emi_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Emi						</div>
					</a>
				
				<div id="mp-modal-4877" class="modal actor-popup">
					<h2>Emi <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263054?h=4ba8956156&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4879" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Chantel_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Chantel						</div>
					</a>
				
				<div id="mp-modal-4879" class="modal actor-popup">
					<h2>Chantel <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262914?h=c0267f3f24&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4881" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Maria_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Maria						</div>
					</a>
				
				<div id="mp-modal-4881" class="modal actor-popup">
					<h2>Maria <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263302?h=68fbadc570&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4883" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Dani_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Dani						</div>
					</a>
				
				<div id="mp-modal-4883" class="modal actor-popup">
					<h2>Dani <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262961?h=1c81acd4cf&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4885" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Nora_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Nora						</div>
					</a>
				
				<div id="mp-modal-4885" class="modal actor-popup">
					<h2>Nora <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263341?h=528f9416be&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4888" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Jacqueline_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Jacqueline						</div>
					</a>
				
				<div id="mp-modal-4888" class="modal actor-popup">
					<h2>Jacqueline <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263153?h=ba4329da32&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4891" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Amber_1-1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Amber						</div>
					</a>
				
				<div id="mp-modal-4891" class="modal actor-popup">
					<h2>Amber <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262796?h=3b9a8d5946&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4893" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Bella_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Bella						</div>
					</a>
				
				<div id="mp-modal-4893" class="modal actor-popup">
					<h2>Bella <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262858?h=d18bdbf697&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4945" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Catia_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Catia						</div>
					</a>
				
				<div id="mp-modal-4945" class="modal actor-popup">
					<h2>Catia <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262893?h=ec362d9f63&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4895" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Heidi_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Heidi						</div>
					</a>
				
				<div id="mp-modal-4895" class="modal actor-popup">
					<h2>Heidi <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263113?h=34f525600f&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4898" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/TIffany_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Tiffany						</div>
					</a>
				
				<div id="mp-modal-4898" class="modal actor-popup">
					<h2>Tiffany <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263390?h=58a68f76a8&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4901" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Shanda600x900.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Shanda						</div>
					</a>
				
				<div id="mp-modal-4901" class="modal actor-popup">
					<h2>Shanda <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106276302?h=ec1d96e55d&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4903" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Jillian600x900.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Jillian						</div>
					</a>
				
				<div id="mp-modal-4903" class="modal actor-popup">
					<h2>Jillian <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106276249?h=f27c1844f9&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4905" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Denise_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Denise						</div>
					</a>
				
				<div id="mp-modal-4905" class="modal actor-popup">
					<h2>Denise <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263013?h=509a709c17&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4907" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Jordan_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Jordan						</div>
					</a>
				
				<div id="mp-modal-4907" class="modal actor-popup">
					<h2>Jordan <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263204?h=cadccdd7e9&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4909" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Karina_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Karina						</div>
					</a>
				
				<div id="mp-modal-4909" class="modal actor-popup">
					<h2>Karina <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263224?h=864996fb4b&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4911" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Jennifer_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Jennifer						</div>
					</a>
				
				<div id="mp-modal-4911" class="modal actor-popup">
					<h2>Jennifer <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263182?h=2bc9887fa9&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4913" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Angeline_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Angeline						</div>
					</a>
				
				<div id="mp-modal-4913" class="modal actor-popup">
					<h2>Angeline <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262821?h=9082b6c549&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4915" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Kari600x900.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Kari						</div>
					</a>
				
				<div id="mp-modal-4915" class="modal actor-popup">
					<h2>Kari <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106276276?h=343da680f4&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4918" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/08/Chelsey600x900.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Chelsey						</div>
					</a>
				
				<div id="mp-modal-4918" class="modal actor-popup">
					<h2>Chelsey <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106276226?h=25f7e67a46&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4921" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Emilia_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Emilia						</div>
					</a>
				
				<div id="mp-modal-4921" class="modal actor-popup">
					<h2>Emilia <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263083?h=4f9bdcb4ce&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4924" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Audrey_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Audrey						</div>
					</a>
				
				<div id="mp-modal-4924" class="modal actor-popup">
					<h2>Audrey <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262842?h=015886b2b3&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4926" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Madeline_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Madeline						</div>
					</a>
				
				<div id="mp-modal-4926" class="modal actor-popup">
					<h2>Madeline <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263281?h=3086c56614&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4929" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Lauren_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Lauren						</div>
					</a>
				
				<div id="mp-modal-4929" class="modal actor-popup">
					<h2>Lauren <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263266?h=60e0694ebe&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4931" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/McCall_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Mccall						</div>
					</a>
				
				<div id="mp-modal-4931" class="modal actor-popup">
					<h2>Mccall <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263323?h=27217d1553&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4934" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Tori.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Tori						</div>
					</a>
				
				<div id="mp-modal-4934" class="modal actor-popup">
					<h2>Tori <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263404?h=12c9d48db5&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4936" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Daisy_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Daisy						</div>
					</a>
				
				<div id="mp-modal-4936" class="modal actor-popup">
					<h2>Daisy <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262945?h=4a7f827326&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4938" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Gabrielle_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Gabrielle						</div>
					</a>
				
				<div id="mp-modal-4938" class="modal actor-popup">
					<h2>Gabrielle <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263096?h=c2d4d0d5d1&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4948" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Debbie_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Debbie						</div>
					</a>
				
				<div id="mp-modal-4948" class="modal actor-popup">
					<h2>Debbie <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262990?h=9ca1231500&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4951" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Katelyn_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Katelyn						</div>
					</a>
				
				<div id="mp-modal-4951" class="modal actor-popup">
					<h2>Katelyn <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263249?h=0e0c2a05b6&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4955" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Elisa_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Elisa						</div>
					</a>
				
				<div id="mp-modal-4955" class="modal actor-popup">
					<h2>Elisa <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263038?h=0aedb7a0e5&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4961" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Amanda_1-1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Amanda						</div>
					</a>
				
				<div id="mp-modal-4961" class="modal actor-popup">
					<h2>Amanda <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262775?h=383041b6ea&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4963" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Normandy_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Normandy						</div>
					</a>
				
				<div id="mp-modal-4963" class="modal actor-popup">
					<h2>Normandy <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263361?h=2dfb12ba15&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4966" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Sahalie_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Sahalie						</div>
					</a>
				
				<div id="mp-modal-4966" class="modal actor-popup">
					<h2>Sahalie <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263376?h=e721ada0df&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4968" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/ilene600x900.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Ilene						</div>
					</a>
				
				<div id="mp-modal-4968" class="modal actor-popup">
					<h2>Ilene <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106263132?h=aa7fbecda2&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4970" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Charlette_1.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Charlette						</div>
					</a>
				
				<div id="mp-modal-4970" class="modal actor-popup">
					<h2>Charlette <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106262929?h=25feb5c9ae&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
            </div>
						</div>
				</div>
					</div>
				</div>
				</div>
		<div id="e-n-tab-content-2340567452" role="tabpanel" aria-labelledby="e-n-tab-title-2340567452" data-tab-index="2" style="--n-tabs-title-order: 2;" class=" elementor-element elementor-element-f7a6b01 e-con-full animated-fast e-flex elementor-invisible e-con e-child" data-id="f7a6b01" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
		<div class="elementor-element elementor-element-38b5d2d e-flex e-con-boxed e-con e-child" data-id="38b5d2d" data-element_type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-6dc2716 category-gender elementor-widget elementor-widget-shortcode" data-id="6dc2716" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
							<div class="elementor-shortcode">           
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4972" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/08/Jed.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Jed						</div>
					</a>
				
				<div id="mp-modal-4972" class="modal actor-popup">
					<h2>Jed <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265795?h=8fae4116e5&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4974" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Lonzo.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Lonzo						</div>
					</a>
				
				<div id="mp-modal-4974" class="modal actor-popup">
					<h2>Lonzo <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265889?h=799a6cadcf&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4976" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Derek.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Derek						</div>
					</a>
				
				<div id="mp-modal-4976" class="modal actor-popup">
					<h2>Derek <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265731?h=26d9729312&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4978" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Josh600x900.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Josh						</div>
					</a>
				
				<div id="mp-modal-4978" class="modal actor-popup">
					<h2>Josh <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106278592?h=e5842656a1&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4980" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Walt.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Walt						</div>
					</a>
				
				<div id="mp-modal-4980" class="modal actor-popup">
					<h2>Walt <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265950?h=08625b8395&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4982" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Jonny.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Jonny						</div>
					</a>
				
				<div id="mp-modal-4982" class="modal actor-popup">
					<h2>Jonny <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265869?h=2519f3d57b&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4984" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Ben.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Ben						</div>
					</a>
				
				<div id="mp-modal-4984" class="modal actor-popup">
					<h2>Ben <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265612?h=d2e98eabf7&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4986" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Brenton.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Brenton						</div>
					</a>
				
				<div id="mp-modal-4986" class="modal actor-popup">
					<h2>Brenton <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265628?h=873cc1282e&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4988" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Regi.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Regi						</div>
					</a>
				
				<div id="mp-modal-4988" class="modal actor-popup">
					<h2>Regi <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265929?h=2cd0bd039f&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4990" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Dave.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Dave						</div>
					</a>
				
				<div id="mp-modal-4990" class="modal actor-popup">
					<h2>Dave <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265709?h=1a2f6b0246&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4992" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Julio.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Julio						</div>
					</a>
				
				<div id="mp-modal-4992" class="modal actor-popup">
					<h2>Julio <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265984?h=099bef42b0&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4994" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/08/Daryl.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Daryl						</div>
					</a>
				
				<div id="mp-modal-4994" class="modal actor-popup">
					<h2>Daryl <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265686?h=03593f9480&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4996" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Dustin.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Dustin						</div>
					</a>
				
				<div id="mp-modal-4996" class="modal actor-popup">
					<h2>Dustin <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265749?h=c2b54ffad3&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-4998" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Joe.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Joe						</div>
					</a>
				
				<div id="mp-modal-4998" class="modal actor-popup">
					<h2>Joe <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265825?h=da19ed71e3&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5000" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/600x900James.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 James						</div>
					</a>
				
				<div id="mp-modal-5000" class="modal actor-popup">
					<h2>James <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265775?h=b962e87354&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5002" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Daniel.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Daniel						</div>
					</a>
				
				<div id="mp-modal-5002" class="modal actor-popup">
					<h2>Daniel <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265669?h=2a2e035c22&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5004" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Anthony.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Anthony						</div>
					</a>
				
				<div id="mp-modal-5004" class="modal actor-popup">
					<h2>Anthony <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265596?h=a26f29a874&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5007" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Frits.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Fritz						</div>
					</a>
				
				<div id="mp-modal-5007" class="modal actor-popup">
					<h2>Fritz <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106280432?h=793e75a134&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5010" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Chance.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Chance						</div>
					</a>
				
				<div id="mp-modal-5010" class="modal actor-popup">
					<h2>Chance <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265658?h=23c7a20fb7&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5014" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Caden.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Caden						</div>
					</a>
				
				<div id="mp-modal-5014" class="modal actor-popup">
					<h2>Caden <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265640?h=88ad985102&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5019" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Eirik.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Eirik						</div>
					</a>
				
				<div id="mp-modal-5019" class="modal actor-popup">
					<h2>Eirik <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265971?h=8fc2f9a1b7&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5021" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Quinn.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Quinn						</div>
					</a>
				
				<div id="mp-modal-5021" class="modal actor-popup">
					<h2>Quinn <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106265911?h=3e7c3d52fa&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
                       
            <div class="spokepeople-video-wrapper"> 
				 <a href="#mp-modal-5023" rel="modal:open">
						<video width="300" height="450" autoplay muted loop playsinline>
							<source src="/wp-content/uploads/2025/07/Zeke.webm" type="video/mp4">
						</source></video>
						<div class="spokepeople-video-heading">
							 Zeke						</div>
					</a>
				
				<div id="mp-modal-5023" class="modal actor-popup">
					<h2>Zeke <span class="mp-gradient-text">Video Spokesperson Demonstration</span></h2>
						 <iframe src="https://player.vimeo.com/video/1106266005?h=586cc6f592&amp;autoplay=1?autoplay=1&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
							</iframe>
				</div>				
            </div>			
          
            </div>
						</div>
				</div>
					</div>
				</div>
				</div>
					</div>
		</div>
						</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-8f31137 our-spokepeople-wrapper e-flex e-con-boxed e-con e-parent" data-id="8f31137" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-9d1dccb e-con-full e-flex e-con e-child" data-id="9d1dccb" data-element_type="container">
				<div class="elementor-element elementor-element-1b3c1a1 elementor-widget elementor-widget-heading" data-id="1b3c1a1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">3 Easy <span class="mp-gradient-text">Steps</span> to Launch</h2>				</div>
				</div>
		<div class="elementor-element elementor-element-67aa10d e-con-full e-flex e-con e-child" data-id="67aa10d" data-element_type="container">
				<div class="elementor-element elementor-element-9fccdda elementor-align-right main-button elementor-widget elementor-widget-button" data-id="9fccdda" data-element_type="widget" data-widget_type="button.default">
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
		<div class="elementor-element elementor-element-776f01a e-con-full e-flex e-con e-child" data-id="776f01a" data-element_type="container">
		<div class="elementor-element elementor-element-b38ec5c e-con-full step-wrapper border-line animated-slow e-flex elementor-invisible e-con e-child" data-id="b38ec5c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="elementor-element elementor-element-5d5e0ba elementor-widget elementor-widget-heading" data-id="5d5e0ba" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Step 1</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-e72a503 elementor-widget elementor-widget-heading" data-id="e72a503" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Watch pre-recorded auditions, then pick the face that fits—or ask for free custom auditions.</h3>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-945d20b e-con-full step-wrapper border-line animated-slow e-flex elementor-invisible e-con e-child" data-id="945d20b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				<div class="elementor-element elementor-element-ac68e88 elementor-widget elementor-widget-heading" data-id="ac68e88" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Step 2</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-1965384 elementor-widget elementor-widget-heading" data-id="1965384" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Send us your script—or let our award-winning team craft a conversion-focused script and visuals.</h3>				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-50d0e26 e-con-full step-wrapper border-line animated-slow e-flex elementor-invisible e-con e-child" data-id="50d0e26" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="elementor-element elementor-element-70423d0 elementor-widget elementor-widget-heading" data-id="70423d0" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Step 3</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-54a602e elementor-widget elementor-widget-heading" data-id="54a602e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">We film, edit, and deliver your spokesperson video—fast turnaround, pixel-perfect results.</h3>				</div>
				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-1789033 e-flex e-con-boxed elementor-invisible e-con e-parent" data-id="1789033" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;slideInUp&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-42492ef e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="42492ef" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="elementor-element elementor-element-f5a2b34 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="f5a2b34" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Choose a REAL <span class="mp-gradient-text">human for REAL conversions.
</span></h2>				</div>
				</div>
				<div class="elementor-element elementor-element-b877321 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="b877321" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Our professional website spokespeople greet visitors, explain your offer, and guide them to buy—proven to lift conversions. Use one of our professional spokespeople on your website.</p>								</div>
				</div>
		<div class="elementor-element elementor-element-f136ab0 e-con-full e-flex e-con e-child" data-id="f136ab0" data-element_type="container">
				<div class="elementor-element elementor-element-2b2b3db elementor-align-right main-button elementor-widget elementor-widget-button" data-id="2b2b3db" data-element_type="widget" data-widget_type="button.default">
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
		<div class="elementor-element elementor-element-026d0bb e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="026d0bb" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="elementor-element elementor-element-dd92006 elementor-widget__width-initial elementor-widget elementor-widget-html" data-id="dd92006" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<div class="video-wrapper-talking" onclick="playCustomVideo(this)">
  <div class="video-overlay" style="background:url(https://videoagency.mindpath.tech/wp-content/uploads/2025/07/thumb.jpg;);background-size: cover;"></div>

  <video playsinline preload="metadata">
    <source src="/wp-content/uploads/2025/08/real_actors.mp4" type="video/mp4">
    
  </source></video>
</div>				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-8ae68d4 our-spokepeople-wrapper animated-slow e-flex e-con-boxed elementor-invisible e-con e-parent" data-id="8ae68d4" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;zoomIn&quot;}">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-b5904c6 elementor-widget elementor-widget-heading" data-id="b5904c6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">#1 Virtual Spokesperson <br><span class="mp-gradient-text"> For Site Engagement</span></h2>				</div>
				</div>
				<div class="elementor-element elementor-element-8ed751e elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="8ed751e" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p><span style="font-weight: 400;">A virtual spokesperson captivates visitors, answers questions, and drives sales—24/7, on every device.</span></p><p><span style="font-weight: 400;">Professional spokespeople simplify your message and motivate action, turning clicks into customers and boosting ROI.</span></p>								</div>
				</div>
		<div class="elementor-element elementor-element-cfa81a2 e-con-full video-section-big e-flex e-con e-child" data-id="cfa81a2" data-element_type="container">
				<div class="elementor-element elementor-element-a4e90a9 elementor-widget elementor-widget-video" data-id="a4e90a9" data-element_type="widget" data-settings="{&quot;video_type&quot;:&quot;vimeo&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;play_on_mobile&quot;:&quot;yes&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="elementor-wrapper elementor-open-inline">
			<iframe class="elementor-video-iframe" allowfullscreen allow="autoplay" title="vimeo Video Player" src="https://player.vimeo.com/video/1103263725?autoplay=1&amp;playsinline=1&amp;color&amp;autopause=0&amp;loop=1&amp;muted=1&amp;title=1&amp;portrait=1&amp;byline=1&amp;h=d89d7b2f3a#t="></iframe>		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-6643414 elementor-widget elementor-widget-heading" data-id="6643414" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Talking Heads</h2>				</div>
				</div>
				</div>
					</div>
				</div>
		<div class="elementor-element elementor-element-6984898 e-con-full e-flex e-con e-child" data-id="6984898" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-746d838 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="746d838" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Ready to Create a Video Like This?  <span class="mp-gradient-text"> <a href="#"> Let’s Talk <img decoding="async" src="/wp-content/uploads/2025/06/Group-20.svg"></a></span></h3>				</div>
				</div>
				<div class="elementor-element elementor-element-c3da6fb elementor-pagination-type-bullets elementor-pagination-position-outside elementor-widget elementor-widget-loop-carousel" data-id="c3da6fb" data-element_type="widget" data-settings="{&quot;template_id&quot;:&quot;441&quot;,&quot;offset_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;offset_sides&quot;:&quot;both&quot;,&quot;offset_width_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:80,&quot;sizes&quot;:[]},&quot;offset_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;offset_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_skin&quot;:&quot;post&quot;,&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_laptop&quot;:&quot;3&quot;,&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;edit_handle_selector&quot;:&quot;.elementor-loop-container&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;pagination&quot;:&quot;bullets&quot;,&quot;image_spacing_custom_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="loop-carousel.post">
				<div class="elementor-widget-container">
							<div class="swiper elementor-loop-container elementor-grid" role="list" dir="ltr">
				<div class="swiper-wrapper" aria-live="polite">
				</div>
		</div>
					<div class="swiper-pagination"></div>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-b7d7ace e-flex e-con-boxed e-con e-parent" data-id="b7d7ace" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="e-con-inner">
		<div class="elementor-element elementor-element-b21ed24 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="b21ed24" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
				<div class="elementor-element elementor-element-1451cc2 elementor-widget__width-initial animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="1451cc2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Let’s Create Something
<span class="mp-gradient-text">Like This!</span></h2>				</div>
				</div>
		<div class="elementor-element elementor-element-8f6da4b e-con-full e-flex e-con e-child" data-id="8f6da4b" data-element_type="container">
		<div class="elementor-element elementor-element-28445cc e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="28445cc" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;}">
				<div class="elementor-element elementor-element-f50944a gallery-spacing-custom elementor-widget__width-initial elementor-widget elementor-widget-image-gallery" data-id="f50944a" data-element_type="widget" data-widget_type="image-gallery.default">
				<div class="elementor-widget-container">
							<div class="elementor-image-gallery">
			<div id="gallery-1" class="gallery galleryid-1147 gallery-columns-4 gallery-size-full"><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f50944a" data-elementor-lightbox-title="001" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUxNSwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC8wMDEucG5nIiwic2xpZGVzaG93IjoiZjUwOTQ0YSJ9" href="/wp-content/uploads/2025/07/001.png"><img fetchpriority="high" decoding="async" width="300" height="300" src="/wp-content/uploads/2025/07/001.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/001.png 300w, /wp-content/uploads/2025/07/001-150x150.png 150w" sizes="(max-width: 300px) 100vw, 300px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f50944a" data-elementor-lightbox-title="002" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUxNiwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC8wMDIucG5nIiwic2xpZGVzaG93IjoiZjUwOTQ0YSJ9" href="/wp-content/uploads/2025/07/002.png"><img decoding="async" width="300" height="300" src="/wp-content/uploads/2025/07/002.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/002.png 300w, /wp-content/uploads/2025/07/002-150x150.png 150w" sizes="(max-width: 300px) 100vw, 300px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f50944a" data-elementor-lightbox-title="w2-banner" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMywidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC93Mi1iYW5uZXIucG5nIiwic2xpZGVzaG93IjoiZjUwOTQ0YSJ9" href="/wp-content/uploads/2025/07/w2-banner.png"><img loading="lazy" decoding="async" width="300" height="300" src="/wp-content/uploads/2025/07/w2-banner.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/w2-banner.png 300w, /wp-content/uploads/2025/07/w2-banner-150x150.png 150w" sizes="(max-width: 300px) 100vw, 300px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="f50944a" data-elementor-lightbox-title="Telly_46th_ProudTelly_Badge" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk4NCwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX1Byb3VkVGVsbHlfQmFkZ2UucG5nIiwic2xpZGVzaG93IjoiZjUwOTQ0YSJ9" href="/wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge.png"><img loading="lazy" decoding="async" width="600" height="600" src="/wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge.png 600w, /wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge-300x300.png 300w, /wp-content/uploads/2025/07/Telly_46th_ProudTelly_Badge-150x150.png 150w" sizes="(max-width: 600px) 100vw, 600px"></a>
			</div></figure>
		</div>
		</div>
						</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-e3154c7 e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="e3154c7" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;}">
				<div class="elementor-element elementor-element-079a842 gallery-spacing-custom elementor-widget__width-initial elementor-widget elementor-widget-image-gallery" data-id="079a842" data-element_type="widget" data-widget_type="image-gallery.default">
				<div class="elementor-widget-container">
							<div class="elementor-image-gallery">
			<div id="gallery-2" class="gallery galleryid-1147 gallery-columns-3 gallery-size-full"><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="079a842" data-elementor-lightbox-title="Telly_46th_badge_evergreen_bronze" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk4MCwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX2JhZGdlX2V2ZXJncmVlbl9icm9uemUucG5nIiwic2xpZGVzaG93IjoiMDc5YTg0MiJ9" href="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze.png"><img loading="lazy" decoding="async" width="317" height="173" src="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze.png 317w, /wp-content/uploads/2025/07/Telly_46th_badge_evergreen_bronze-300x164.png 300w" sizes="(max-width: 317px) 100vw, 317px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="079a842" data-elementor-lightbox-title="Telly_46th_badge_evergreen_silver" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk3OCwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX2JhZGdlX2V2ZXJncmVlbl9zaWx2ZXIucG5nIiwic2xpZGVzaG93IjoiMDc5YTg0MiJ9" href="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver.png"><img loading="lazy" decoding="async" width="317" height="172" src="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver.png 317w, /wp-content/uploads/2025/07/Telly_46th_badge_evergreen_silver-300x163.png 300w" sizes="(max-width: 317px) 100vw, 317px"></a>
			</div></figure><figure class="gallery-item">
			<div class="gallery-icon landscape">
				<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="079a842" data-elementor-lightbox-title="Telly_46th_badge_evergreen_gold" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTk3OSwidXJsIjoiaHR0cHM6XC9cL3RhbGtpbmdoZWFkcy5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjVcLzA3XC9UZWxseV80NnRoX2JhZGdlX2V2ZXJncmVlbl9nb2xkLnBuZyIsInNsaWRlc2hvdyI6IjA3OWE4NDIifQ%3D%3D" href="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold.png"><img loading="lazy" decoding="async" width="317" height="173" src="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold.png" class="attachment-full size-full" alt="" srcset="/wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold.png 317w, /wp-content/uploads/2025/07/Telly_46th_badge_evergreen_gold-300x164.png 300w" sizes="(max-width: 317px) 100vw, 317px"></a>
			</div></figure>
		</div>
		</div>
						</div>
				</div>
				</div>
				</div>
				</div>
		<div class="elementor-element elementor-element-3a9b51b e-con-full animated-slow e-flex elementor-invisible e-con e-child" data-id="3a9b51b" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				<div class="elementor-element elementor-element-0d44ff4 elementor-widget elementor-widget-template" data-id="0d44ff4" data-element_type="widget" data-widget_type="template.default">
				<div class="elementor-widget-container">
							<div class="elementor-template">
			<style id="elementor-post-2845">.elementor-2845 .elementor-element.elementor-element-5786d0e{--display:flex;--flex-direction:row;--container-widget-width:initial;--container-widget-height:100%;--container-widget-flex-grow:1;--container-widget-align-self:stretch;--flex-wrap-mobile:wrap;--margin-top:0px;--margin-bottom:0px;--margin-left:0px;--margin-right:0px;--padding-top:0px;--padding-bottom:0px;--padding-left:0px;--padding-right:0px;}</style>		<div data-elementor-type="section" data-elementor-id="2845" class="elementor elementor-2845" data-elementor-post-type="elementor_library">
			<div class="elementor-element elementor-element-5786d0e contact-page-form e-flex e-con-boxed e-con e-parent" data-id="5786d0e" data-element_type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-cfe44de elementor-widget elementor-widget-html" data-id="cfe44de" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<iframe src="https://webforms.pipedrive.com/f/64N8Yh5LjLa3zsJpStC8kImEOZckKBW30BIUXgC2yNZ5gGRbmBb63rrcxGiSsmoA5d" title="contact form" scrolling="no" class="contact-form-iframe"></iframe>				</div>
				</div>
					</div>
				</div>
				</div>
				</div>
						</div>
				</div>
				</div>
					</div>
				</div>
				</div>
		
		
			</div>

	
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
