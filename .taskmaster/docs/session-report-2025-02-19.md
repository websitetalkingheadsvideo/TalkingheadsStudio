# Session report – 2025-02-19

## Summary
Actors page fixes and layout alignment with talkingheads.com/actors/.

## Changes

### Script paths (fix 404 / syntax error)
- **includes/footer.php**: `js/video-player.js` → `/js/video-player.js`
- **index.php**: All four script srcs → `/js/counters.js`, `/js/video-player.js`, `/js/animations.js`, `/js/hero-slider.js`

### Skip to content
- **css/main.css**: Hide skip link site-wide with `a.skip-link.screen-reader-text { display: none !important; }`

### Actors page – hero and overlap
- **css/main.css**: Hero block (`.elementor-1147 .th.th-a814b9d`) given padding-top 100px, padding-bottom 60px; `.e-con-inner` forced to flex column with gap; background video absolutely positioned so title/button don’t overlap.

### Actors page – layout and grid
- **actors/index.php**: Stylesheet links → `/css/main.css`, `/css/actors.css`
- **css/actors.css** (new): Layout to match talkingheads.com/actors/: hero typography; “Choose Your Perfect Spokesperson” row; three-column grid (On-Location / Greenscreen / UGC) with video + overlapping title card; CTA; Our Spokespeople section with Women/Men tabs; grid of spokesperson cards (5 cols desktop, responsive). Parent containers given zero padding/margin to remove large vertical gaps. **Spokespeople row gap fix**: `.modal.actor-popup` (650px iframe) was in document flow inside each card; set `position: absolute`, `visibility: hidden`, `pointer-events: none` on modal so it doesn’t affect layout; wrapper `position: relative`. Row gap set to 16px (column-gap 20px).

## Files touched
- includes/footer.php
- index.php
- actors/index.php
- css/main.css
- css/actors.css (new)
