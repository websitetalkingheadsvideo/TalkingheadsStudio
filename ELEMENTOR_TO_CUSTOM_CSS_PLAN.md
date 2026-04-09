# Elementor to Custom CSS Migration Plan - Main Content Area

## Overview
This plan outlines the step-by-step process to remove all Elementor dependencies from the `<main>` content area in `index.php` and replace them with plain, custom CSS that visually mimics the main content design of https://talkingheads.com/.

## Current State Analysis

### Files Affected
1. **`index.php`** (931 lines)
   - Main content starts at line 36: `<main id="content" class="site-main...">`
   - Main content ends at line 926: `</main>`
   - Contains 338+ Elementor class/attribute references
   - Structure: Hero section → Services → Steps → Testimonials → Logo strip → Other sections

2. **CSS Files**
   - `css/main.css` (7,602 lines) - Contains extensive Elementor CSS rules
   - `css/layout.css` - Contains Elementor layout rules
   - `css/components.css` - Contains Elementor component styles
   - `css/variables.css` - Contains Elementor CSS variables

### Elementor Structure in `<main>`
- Root wrapper: `<div data-elementor-type="wp-page" data-elementor-id="6564" class="elementor elementor-6564">`
- Sections: `<div class="elementor-element elementor-element-[ID] e-flex e-con-boxed e-con e-parent">`
- Inner containers: `<div class="e-con-inner">`
- Widgets: `<div class="elementor-element ... elementor-widget elementor-widget-[TYPE]">`
- Widget containers: `<div class="elementor-widget-container">`
- Headings: `<h2 class="elementor-heading-title elementor-size-default">`
- Buttons: `<a class="elementor-button elementor-button-link elementor-size-sm">`
- Icon boxes: `<div class="elementor-icon-box-wrapper">`
- Video elements: `<div class="elementor-background-video-container">`

### Sections Identified
1. **Hero Section** (lines 41-69)
   - Video background container
   - H4 heading: "A video production company"
   - H2 heading: "Captivate Your audience" (with gradient text)
   - CTA button: "Start Your Project"

2. **Services Section** (lines 70-167)
   - H2 heading: "We create every style of video you need."
   - Grid of service cards (`.th-root`, `.th-grid`, `.th-card` - already clean)

3. **Steps/Process Section** (lines 168-271)
   - H3 heading: "Next-Level Performance Creative"
   - 4 icon boxes with SVG icons and titles

4. **Testimonials Section** (lines 272-396)
   - H2 heading: "Listen to what our clients say about talking heads"
   - Grid of testimonial cards with videos and text

5. **Logo Strip Section** (lines 397-432)
   - Vimeo iframe embed
   - Trust text

6. **Additional Sections** (lines 433+)
   - Process section with steps
   - Hero slider section
   - Other content sections

---

## Implementation Plan

### Phase 1: Preparation & Analysis

#### Step 1.1: Create Backup
- **Action**: Create backup copies of all files to be modified
- **Files**: `index.php`, `css/main.css`, `css/layout.css`, `css/components.css`
- **Method**: Copy files with `.backup` extension

#### Step 1.2: Document Current CSS Dependencies
- **Action**: Extract all Elementor CSS rules that affect `<main>` content
- **Files**: `css/main.css`, `css/layout.css`, `css/components.css`
- **Output**: List of CSS rules to replace with custom equivalents

#### Step 1.3: Analyze talkingheads.com Design
- **Action**: Inspect https://talkingheads.com/ main content area
- **Focus Areas**:
  - Hero section layout, typography, colors
  - Section spacing and padding
  - Typography hierarchy (font families, sizes, weights)
  - Button styles and hover states
  - Color scheme (backgrounds, text, accents)
  - Responsive breakpoints and behavior

---

### Phase 2: Markup Cleanup

#### Step 2.1: Remove Elementor Root Wrapper
- **File**: `index.php`
- **Location**: Line 40
- **Current**: `<div data-elementor-type="wp-page" data-elementor-id="6564" class="elementor elementor-6564" data-elementor-post-type="page">`
- **Replace with**: `<div class="site-main-inner">`
- **Remove attributes**: `data-elementor-type`, `data-elementor-id`, `data-elementor-post-type`

#### Step 2.2: Replace Hero Section Markup
- **File**: `index.php`
- **Location**: Lines 41-69
- **Changes**:
  - Remove: `.elementor-element`, `.e-flex`, `.e-con-boxed`, `.e-con`, `.e-parent`, `data-id`, `data-element_type`, `data-settings`
  - Replace: `.elementor-background-video-container` → `.hero-video-background`
  - Replace: `.elementor-background-video-embed` → remove wrapper, keep content
  - Remove: `.elementor-widget-container` wrappers
  - Replace: `.elementor-heading-title` → remove class, keep semantic `<h4>`, `<h2>`
  - Replace: `.elementor-button` → `.btn`, `.btn-primary`
  - Remove: `.elementor-button-wrapper`, `.elementor-button-content-wrapper`
- **Target structure**:
```html
<section class="hero">
  <div class="hero-video-background" aria-hidden="true">
    <!-- Vimeo embed will be inserted here -->
  </div>
  <div class="hero-content">
    <h4>A video production company</h4>
    <h2><span class="mp-gradient-text">Captivate</span><br>Your audience</h2>
    <a href="/contact" class="btn btn-primary">Start Your Project</a>
  </div>
</section>
```

#### Step 2.3: Replace Services Section Markup
- **File**: `index.php`
- **Location**: Lines 70-167
- **Changes**:
  - Remove all Elementor wrapper divs
  - Keep: `.th-root`, `.th-grid`, `.th-card` (already clean)
  - Replace: `.elementor-heading-title` → remove class, keep `<h2>`
- **Target structure**:
```html
<section class="section section--light">
  <div class="section-inner">
    <h2 class="section-title">We create every style of <br><span class="mp-gradient-text">video you need.</span></h2>
    <div class="th-root">
      <div class="th-grid">
        <!-- Service cards (already clean) -->
      </div>
    </div>
  </div>
</section>
```

#### Step 2.4: Replace Steps/Process Section Markup
- **File**: `index.php`
- **Location**: Lines 168-271
- **Changes**:
  - Remove: `.elementor-element`, `.elementor-widget-icon-box`, `.elementor-icon-box-wrapper`
  - Replace: `.elementor-icon-box-icon` → `.icon-box-icon`
  - Replace: `.elementor-icon` → `.icon`
  - Replace: `.elementor-icon-box-title` → `.icon-box-title`
  - Remove: `.elementor-icon-box-content` wrapper
- **Target structure**:
```html
<section class="section section--dark">
  <div class="section-inner">
    <h3 class="section-title">Next-Level Performance Creative</h3>
    <div class="steps-grid">
      <div class="icon-box">
        <div class="icon-box-icon">
          <span class="icon"><!-- SVG --></span>
        </div>
        <h3 class="icon-box-title">Title</h3>
      </div>
      <!-- Repeat for 4 items -->
    </div>
  </div>
</section>
```

#### Step 2.5: Replace Testimonials Section Markup
- **File**: `index.php`
- **Location**: Lines 272-396
- **Changes**:
  - Remove: `.elementor-element`, `.elementor-widget-video`, `.elementor-widget-container`
  - Replace: `.elementor-video` → `.testimonial-video`
  - Replace: `.elementor-custom-embed-image-overlay` → `.video-overlay`
  - Replace: `.elementor-custom-embed-play` → `.video-play-button`
  - Remove: `.elementor-heading-title` class
  - Remove: `.elementor-widget-text-editor` wrapper
- **Target structure**:
```html
<section class="section section--dark">
  <div class="section-inner">
    <h2 class="section-title">Listen to what our clients say <br><span class="mp-gradient-text">about talking heads</span></h2>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="testimonial-video-wrapper">
          <video class="testimonial-video" src="..."></video>
          <div class="video-overlay">
            <button class="video-play-button" aria-label="Play Video"></button>
          </div>
        </div>
        <div class="testimonial-content">
          <h2>Name</h2>
          <p>Testimonial text</p>
        </div>
      </div>
      <!-- Repeat for 5 testimonials -->
    </div>
  </div>
</section>
```

#### Step 2.6: Replace Logo Strip Section Markup
- **File**: `index.php`
- **Location**: Lines 397-432
- **Changes**:
  - Remove: `.elementor-element`, `.elementor-widget-container` wrappers
  - Keep: Vimeo iframe and text content
- **Target structure**:
```html
<section class="section section--light">
  <div class="section-inner">
    <iframe class="logo-strip-video" src="..."></iframe>
    <p>Trust text</p>
  </div>
</section>
```

#### Step 2.7: Replace Remaining Sections
- **File**: `index.php`
- **Location**: Lines 433-925
- **Changes**: Apply same pattern as above for all remaining sections
- **Process**: Iterate through each section, removing Elementor classes and replacing with semantic classes

#### Step 2.8: Remove All Elementor Data Attributes
- **File**: `index.php`
- **Action**: Remove all `data-elementor-*`, `data-id`, `data-element_type`, `data-widget_type`, `data-settings` attributes throughout `<main>`

#### Step 2.9: Remove Animation Classes
- **File**: `index.php`
- **Action**: Remove `.elementor-invisible`, `.animated-slow` classes (will be replaced with CSS animations if needed)

---

### Phase 3: CSS Replacement

#### Step 3.1: Create New Main Content CSS Structure
- **File**: `css/main.css`
- **Action**: Add new section at the top (or create `css/main-content.css` if preferred)
- **Structure**:
```css
/* ============================================
   MAIN CONTENT STYLES
   Custom CSS for <main> content area
   ============================================ */

/* Base Main Styles */
.site-main {
  /* Base styles */
}

.site-main-inner {
  /* Inner wrapper */
}

/* Section Base */
.section {
  /* Base section styles */
}

.section-inner {
  /* Inner container with max-width */
}

.section--light {
  /* Light background variant */
}

.section--dark {
  /* Dark background variant */
}

/* Typography */
.section-title {
  /* Section heading styles */
}

/* Hero Section */
.hero {
  /* Hero section styles */
}

.hero-video-background {
  /* Video background container */
}

.hero-content {
  /* Hero content wrapper */
}

.hero-title {
  /* Hero main title */
}

.hero-subtitle {
  /* Hero subtitle */
}

/* Buttons */
.btn {
  /* Base button styles */
}

.btn-primary {
  /* Primary button variant */
}

.btn-secondary {
  /* Secondary button variant */
}

/* Icon Boxes */
.icon-box {
  /* Icon box container */
}

.icon-box-icon {
  /* Icon wrapper */
}

.icon-box-title {
  /* Icon box heading */
}

/* Testimonials */
.testimonials-grid {
  /* Testimonials grid layout */
}

.testimonial-card {
  /* Individual testimonial */
}

.testimonial-video-wrapper {
  /* Video wrapper */
}

/* Responsive Styles */
@media (max-width: 1024px) {
  /* Tablet styles */
}

@media (max-width: 768px) {
  /* Mobile styles */
}
```

#### Step 3.2: Implement Hero Section Styles
- **File**: `css/main.css`
- **Action**: Create styles matching talkingheads.com hero section
- **Properties**:
  - Full-width layout
  - Video background positioning
  - Typography (font family, size, weight, line-height)
  - Text alignment and positioning
  - Button styles with hover states
  - Responsive behavior

#### Step 3.3: Implement Section Base Styles
- **File**: `css/main.css`
- **Action**: Create base section styles
- **Properties**:
  - Section padding (top/bottom)
  - Max-width for `.section-inner`
  - Background colors (light/dark variants)
  - Vertical rhythm and spacing

#### Step 3.4: Implement Typography Styles
- **File**: `css/main.css`
- **Action**: Create typography hierarchy
- **Properties**:
  - Font families (matching talkingheads.com)
  - Heading sizes (h1-h6)
  - Font weights
  - Line heights
  - Letter spacing
  - Color scheme

#### Step 3.5: Implement Button Styles
- **File**: `css/main.css`
- **Action**: Create button component styles
- **Properties**:
  - Base button styles
  - Primary/secondary variants
  - Hover and focus states
  - Icon positioning
  - Responsive sizing

#### Step 3.6: Implement Icon Box Styles
- **File**: `css/main.css`
- **Action**: Create icon box component styles
- **Properties**:
  - Grid layout for steps section
  - Icon sizing and positioning
  - Title and content spacing
  - Responsive stacking

#### Step 3.7: Implement Testimonials Styles
- **File**: `css/main.css`
- **Action**: Create testimonials section styles
- **Properties**:
  - Grid layout
  - Video wrapper styles
  - Video overlay and play button
  - Content typography
  - Responsive behavior

#### Step 3.8: Implement Services Section Styles
- **File**: `css/main.css`
- **Action**: Ensure `.th-root`, `.th-grid`, `.th-card` styles are preserved/updated
- **Note**: These classes are already clean, but may need adjustments

#### Step 3.9: Implement Responsive Styles
- **File**: `css/main.css`
- **Action**: Add media queries for all sections
- **Breakpoints**:
  - Desktop: 1200px+
  - Tablet: 768px - 1199px
  - Mobile: 375px - 767px
- **Focus**: Column stacking, text sizing, spacing adjustments

---

### Phase 4: Remove Elementor CSS Dependencies

#### Step 4.1: Remove Elementor Rules from main.css
- **File**: `css/main.css`
- **Action**: Remove or comment out all CSS rules targeting:
  - `.elementor-*` classes
  - `.e-con`, `.e-con-inner`, `.e-con-boxed`, `.e-con-full`
  - `.elementor-widget-*`
  - `.elementor-heading-title`
  - `.elementor-button`
  - `.elementor-icon-box-*`
  - `.elementor-video`
  - `.elementor-background-video-*`
- **Method**: Search and remove, or wrap in `/* REMOVED: Elementor CSS */` comments

#### Step 4.2: Remove Elementor Rules from layout.css
- **File**: `css/layout.css`
- **Action**: Remove Elementor-specific layout rules
- **Keep**: Generic layout utilities if they're still needed

#### Step 4.3: Remove Elementor Rules from components.css
- **File**: `css/components.css`
- **Action**: Remove Elementor component styles
- **Keep**: Generic component styles that aren't Elementor-specific

#### Step 4.4: Update CSS Variables
- **File**: `css/variables.css`
- **Action**: Replace Elementor CSS variables with custom ones
- **Changes**:
  - Keep color values but rename variables
  - Keep typography values but rename variables
  - Remove Elementor-specific variable names

---

### Phase 5: Testing & Refinement

#### Step 5.1: Desktop Testing (1200px+)
- **Action**: Test main content at desktop width
- **Checklist**:
  - [ ] Hero section displays correctly with video background
  - [ ] Typography matches talkingheads.com
  - [ ] Section spacing is appropriate
  - [ ] Buttons are styled correctly with hover states
  - [ ] Grid layouts (services, testimonials) display properly
  - [ ] No overlapping or cut-off content
  - [ ] Colors match reference site

#### Step 5.2: Tablet Testing (768px - 1199px)
- **Action**: Test main content at tablet width
- **Checklist**:
  - [ ] Sections stack appropriately
  - [ ] Text remains readable
  - [ ] Buttons are appropriately sized
  - [ ] Grids adapt to tablet layout
  - [ ] Spacing is maintained

#### Step 5.3: Mobile Testing (375px - 767px)
- **Action**: Test main content at mobile width
- **Checklist**:
  - [ ] All sections stack vertically
  - [ ] Text is readable and not cut off
  - [ ] Buttons are touch-friendly
  - [ ] Videos display correctly
  - [ ] No horizontal scrolling
  - [ ] Spacing is appropriate for mobile

#### Step 5.4: Cross-Browser Testing
- **Action**: Test in Chrome, Firefox, Safari, Edge
- **Focus**: CSS compatibility, layout rendering

#### Step 5.5: Visual Comparison
- **Action**: Compare side-by-side with talkingheads.com
- **Focus**: Layout, typography, colors, spacing, overall feel

#### Step 5.6: Performance Check
- **Action**: Verify page load performance
- **Focus**: CSS file size, render blocking, layout shifts

---

### Phase 6: Documentation & Cleanup

#### Step 6.1: Document Class Naming Convention
- **Action**: Create reference document for new class names
- **Content**: List of all new semantic classes and their purposes

#### Step 6.2: Document Design Tokens
- **Action**: Document customizable design tokens
- **Content**:
  - Color variables
  - Typography variables
  - Spacing variables
  - Breakpoint variables

#### Step 6.3: Remove Backup Files (Optional)
- **Action**: After successful testing, optionally remove `.backup` files
- **Note**: Keep backups until project is fully verified

---

## File Modification Summary

### Files to Modify
1. **`index.php`**
   - Remove 338+ Elementor class/attribute references
   - Replace with semantic HTML and classes
   - Estimated changes: ~400-500 lines

2. **`css/main.css`**
   - Remove Elementor CSS rules (~2000+ lines)
   - Add new main content CSS (~500-800 lines)
   - Estimated net change: -1200 to -1500 lines

3. **`css/layout.css`**
   - Remove Elementor layout rules
   - Keep generic layout utilities
   - Estimated changes: ~20-30 lines

4. **`css/components.css`**
   - Remove Elementor component styles
   - Keep generic components
   - Estimated changes: ~50-100 lines

5. **`css/variables.css`**
   - Rename Elementor variables to custom names
   - Estimated changes: ~10-20 lines

### New Files (Optional)
- **`css/main-content.css`** (if separating main content styles)
  - Would contain all new main content CSS
  - Would need to be linked in `includes/head.php`

---

## Risk Mitigation

### Potential Issues
1. **Layout Breaking**: Elementor CSS may have hidden dependencies
   - **Mitigation**: Test incrementally, keep backups

2. **Animation Loss**: Elementor animations may be lost
   - **Mitigation**: Reimplement with CSS animations if needed

3. **Responsive Issues**: Mobile/tablet layouts may break
   - **Mitigation**: Test thoroughly at all breakpoints

4. **Video Background Issues**: Hero video may not work
   - **Mitigation**: Test video embedding, may need JavaScript

5. **Third-party Dependencies**: Other plugins may rely on Elementor classes
   - **Mitigation**: Check for conflicts, adjust selectors if needed

---

## Success Criteria

### Visual
- [ ] Main content visually matches talkingheads.com design
- [ ] Typography hierarchy is clear and readable
- [ ] Colors match reference site
- [ ] Spacing and rhythm are appropriate
- [ ] Buttons and interactive elements are styled correctly

### Technical
- [ ] No Elementor classes remain in `<main>` markup
- [ ] No Elementor CSS rules affect `<main>` content
- [ ] All styling uses custom CSS classes
- [ ] Semantic HTML structure is maintained
- [ ] Accessibility attributes are preserved

### Functional
- [ ] All sections display correctly
- [ ] Responsive behavior works at all breakpoints
- [ ] Interactive elements (buttons, videos) function correctly
- [ ] No JavaScript errors
- [ ] Page performance is maintained or improved

---

## Estimated Timeline

- **Phase 1 (Preparation)**: 1-2 hours
- **Phase 2 (Markup Cleanup)**: 4-6 hours
- **Phase 3 (CSS Replacement)**: 6-8 hours
- **Phase 4 (Remove Dependencies)**: 2-3 hours
- **Phase 5 (Testing)**: 3-4 hours
- **Phase 6 (Documentation)**: 1-2 hours

**Total Estimated Time**: 17-25 hours

---

## Next Steps

1. **Review and approve this plan**
2. **Begin Phase 1: Preparation & Analysis**
3. **Proceed through phases sequentially**
4. **Test after each major phase**
5. **Iterate based on testing results**

---

## Notes

- This plan focuses ONLY on the `<main>` content area
- Header and footer are handled separately (already completed per existing tasks)
- Custom classes like `.th-root`, `.th-grid`, `.th-card`, `.mp-gradient-text` are preserved
- PHP logic and includes are not modified
- All changes are within the scope of removing Elementor from main content

