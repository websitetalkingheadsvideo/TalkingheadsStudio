# Elementor Structure Mapping - index.php

## Overview
- **Total Elementor instances**: 338+ matches
- **File**: `index.php` (932 lines)
- **Main wrapper**: Starts at line 41 with `<div data-elementor-type="wp-page"...>`

## Elementor Class Patterns

### 1. Root Container
**Current**: 
```html
<div data-elementor-type="wp-page" data-elementor-id="6564" class="elementor elementor-6564" data-elementor-post-type="page">
```
**Replace with**: 
```html
<div class="th-page-content">
```
**Remove attributes**: 
- `data-elementor-type`
- `data-elementor-id`
- `data-elementor-post-type`

### 2. Section Containers
**Current**: 
```html
<div class="elementor-element elementor-element-[ID] e-flex e-con-boxed e-con e-parent" data-id="[ID]" data-element_type="container" data-settings="...">
```
**Replace with**: 
```html
<div class="th-section">
```
**Remove attributes**: 
- `data-id`
- `data-element_type`
- `data-settings`
- All `elementor-element`, `elementor-element-[ID]`, `e-flex`, `e-con-boxed`, `e-con`, `e-parent` classes

### 3. Inner Containers
**Current**: 
```html
<div class="e-con-inner">
```
**Replace with**: 
```html
<div class="th-container">
```
**Note**: Can often be collapsed into parent if not needed

### 4. Child Containers
**Current**: 
```html
<div class="elementor-element elementor-element-[ID] e-con-full e-flex e-con e-child" data-id="[ID]" data-element_type="container">
```
**Replace with**: 
```html
<div class="th-section-inner">
```
**Remove attributes**: Same as section containers

### 5. Widget Wrappers
**Current**: 
```html
<div class="elementor-element elementor-element-[ID] elementor-widget elementor-widget-[TYPE]" data-id="[ID]" data-element_type="widget" data-widget_type="[TYPE]">
  <div class="elementor-widget-container">
    <!-- content -->
  </div>
</div>
```
**Replace with**: 
- Remove both wrapper divs
- Keep only the actual content (headings, buttons, etc.)

### 6. Heading Widgets
**Current**: 
```html
<div class="elementor-element ... elementor-widget-heading">
  <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">Text</h2>
  </div>
</div>
```
**Replace with**: 
```html
<h2>Text</h2>
```
**Remove classes**: 
- `elementor-heading-title`
- `elementor-size-default`
- `elementor-invisible` (animation class, remove)

### 7. Button Widgets
**Current**: 
```html
<div class="elementor-element ... elementor-widget-button">
  <div class="elementor-widget-container">
    <div class="elementor-button-wrapper">
      <a class="elementor-button elementor-button-link elementor-size-sm" href="/contact">
        <span class="elementor-button-content-wrapper">
          <span class="elementor-button-icon">...</span>
          <span class="elementor-button-text">Text</span>
        </span>
      </a>
    </div>
  </div>
</div>
```
**Replace with**: 
```html
<a class="th-button" href="/contact">
  <span class="th-button-icon">...</span>
  <span class="th-button-text">Text</span>
</a>
```
**Remove classes**: 
- `elementor-button`
- `elementor-button-link`
- `elementor-size-sm`
- `elementor-button-wrapper`
- `elementor-button-content-wrapper`
- `elementor-button-icon`
- `elementor-button-text`

### 8. HTML Widgets
**Current**: 
```html
<div class="elementor-element ... elementor-widget-html">
  <div class="elementor-widget-container">
    <!-- custom HTML (like .th-root, .th-grid, .th-card) -->
  </div>
</div>
```
**Replace with**: 
- Remove wrapper divs
- Keep the custom HTML inside (`.th-root`, `.th-grid`, `.th-card` are already clean)

### 9. Icon Box Widgets
**Current**: 
```html
<div class="elementor-element ... elementor-widget-icon-box">
  <div class="elementor-widget-container">
    <div class="elementor-icon-box-wrapper">
      <div class="elementor-icon-box-icon">
        <span class="elementor-icon">...</span>
      </div>
      <div class="elementor-icon-box-content">
        <h3 class="elementor-icon-box-title">Title</h3>
      </div>
    </div>
  </div>
</div>
```
**Replace with**: 
```html
<div class="th-icon-box">
  <div class="th-icon-box-icon">
    <span class="th-icon">...</span>
  </div>
  <div class="th-icon-box-content">
    <h3 class="th-icon-box-title">Title</h3>
  </div>
</div>
```

### 10. Video Widgets
**Current**: 
```html
<div class="elementor-element ... elementor-widget-video">
  <div class="elementor-widget-container">
    <div class="e-hosted-video elementor-wrapper elementor-open-inline">
      <video class="elementor-video" src="..."></video>
      <div class="elementor-custom-embed-image-overlay">
        <div class="elementor-custom-embed-play">...</div>
      </div>
    </div>
  </div>
</div>
```
**Replace with**: 
```html
<div class="th-video-wrapper">
  <video class="th-video" src="..."></video>
  <div class="th-video-overlay">
    <button class="th-video-play" aria-label="Play Video">...</button>
  </div>
</div>
```

### 11. Background Video Container
**Current**: 
```html
<div class="elementor-background-video-container" aria-hidden="true">
  <div class="elementor-background-video-embed"></div>
</div>
```
**Replace with**: 
```html
<div class="th-hero-video-background" aria-hidden="true">
  <!-- Vimeo iframe will be inserted here -->
</div>
```

## Data Attributes to Remove

### Elementor-Specific
- `data-elementor-type`
- `data-elementor-id`
- `data-elementor-post-type`
- `data-elementor-open-lightbox`
- `data-elementor-lightbox-slideshow`
- `data-elementor-lightbox-title`
- `data-e-action-hash`

### Elementor Widget Data
- `data-id` (Elementor-generated IDs)
- `data-element_type`
- `data-widget_type`
- `data-settings` (JSON configs)

## Custom Classes to Preserve

### Already Clean
- `.th-root`
- `.th-grid`
- `.th-card` (and variants: `.th-funny`, `.th-custom`, `.th-3d2d`, `.th-motion`, `.th-vsl`, `.th-elearn`, `.th-corp`, `.th-product`, `.th-whiteboard`, `.th-app`)
- `.th-card-video`
- `.mp-gradient-text` (gradient text class)

### Utility Classes to Preserve
- `.animated-slow` (may need to keep for animations, or replace with CSS)
- `.main-button` (custom class, keep)
- `.testimonail-title` (typo in original, but keep if used)

## Section Structure Mapping

### Hero Section (Lines 41-70)
**Current Structure**:
```
.elementor (root)
  .elementor-element (section with video background)
    .e-con-inner
      .elementor-background-video-container
      .elementor-element (H4 heading)
      .elementor-element (H2 heading)
      .elementor-element (button container)
        .elementor-element (button widget)
```

**Target Structure**:
```
.th-hero-section
  .th-hero-video-background
  .th-hero-content
    h4
    h2
    a.th-button
```

### Services Section (Lines 71-167)
**Current Structure**:
```
.elementor-element (section)
  .e-con-inner
    .elementor-element (H2 heading)
    .elementor-element (HTML widget containing .th-root/.th-grid/.th-card)
```

**Target Structure**:
```
.th-services-section
  .th-container
    h2
    .th-root
      .th-grid
        .th-card (multiple)
```

### Process/Steps Section (Lines 168-271)
**Current Structure**:
```
.elementor-element (section)
  .e-con-inner
    .elementor-element (H3 heading)
    .elementor-element (4 icon boxes in containers)
```

**Target Structure**:
```
.th-steps-section
  .th-container
    h3
    .th-steps-grid
      .th-icon-box (4 items)
```

### Testimonials Section (Lines 272-396)
**Current Structure**:
```
.elementor-element (section)
  .e-con-inner
    .elementor-element (H2 heading)
    .elementor-element (container)
      .elementor-element (container)
        .elementor-element (video widget)
        .elementor-element (text container)
          .elementor-element (H2 name)
          .elementor-element (text editor)
      (repeat for 5 testimonials)
```

**Target Structure**:
```
.th-testimonials-section
  .th-container
    h2
    .th-testimonials-grid
      .th-testimonial-card (5 items)
        .th-video-wrapper
        .th-testimonial-content
          h2
          p
```

### Logo Strip Section (Lines 397-432)
**Current Structure**:
```
.elementor-element (section)
  .e-con-inner
    .elementor-element (Vimeo iframe)
    .elementor-element (text)
```

**Target Structure**:
```
.th-logos-section
  .th-container
    iframe (Vimeo)
    p (trust text)
```

## PHP Includes to Preserve
- Line 35: `<?php require_once __DIR__ . '/includes/header.php'; ?>`
- Line 932: `<?php require_once __DIR__ . '/includes/footer.php'; ?>`
- All PHP variables and logic at top of file

## Animation Classes
**Remove**:
- `elementor-invisible` (used for scroll animations)
- `animated-slow` (may need to keep or replace with CSS animations)

**Note**: Animations will need to be reimplemented in CSS if desired

## Summary of Class Replacements

| Elementor Class | Replacement | Notes |
|----------------|-------------|-------|
| `.elementor` | `.th-page-content` | Root wrapper |
| `.elementor-element` | Remove | Widget wrapper |
| `.elementor-section` | `.th-section` | Section container |
| `.e-con-inner` | `.th-container` | Inner container |
| `.e-con-boxed` | Remove | Layout class |
| `.e-con-full` | Remove | Layout class |
| `.e-con` | Remove | Layout class |
| `.e-parent` | Remove | Layout class |
| `.e-child` | Remove | Layout class |
| `.elementor-widget-container` | Remove | Unnecessary wrapper |
| `.elementor-heading-title` | Remove | Use semantic h1-h6 |
| `.elementor-button` | `.th-button` | Button styling |
| `.elementor-icon-box-*` | `.th-icon-box-*` | Icon box components |
| `.elementor-video` | `.th-video` | Video element |
| `.elementor-background-video-container` | `.th-hero-video-background` | Hero video |

## Files to Modify
1. **index.php** - Remove all Elementor markup
2. **includes/head.php** - Remove Elementor CSS loading
3. **css/plugins.css** - Remove/neutralize Elementor CSS rules
4. **css/main.css** - Add new semantic class styles

