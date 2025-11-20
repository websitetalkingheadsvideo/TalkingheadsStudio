# CSS Analysis Report: index.php vs Reference Site
**Date:** January 2025  
**Project:** Talking Heads Studio Website  
**Reference:** https://talkingheads.com/

## Executive Summary

Analysis of `index.php` reveals several critical CSS loading and styling issues that prevent proper visual rendering. The page loads only `css/main.css` while ignoring 8 other CSS files in the `css/` directory. Additionally, several classes used in the HTML lack corresponding CSS rules.

---

## 1. Missing CSS File Links

### Issue: Local CSS Files Not Loaded

**Current State:**
- `index.php` only loads: `css/main.css` (line 26)
- `includes/head.php` loads 30+ WordPress/Elementor CSS files but **zero** local CSS files

**Missing Files:**
The following CSS files exist in `/css/` but are **never loaded**:

1. ❌ `css/reset.css` - Empty but should contain base reset styles
2. ❌ `css/variables.css` - Contains CSS custom properties (color palette, fonts, spacing)
3. ❌ `css/typography.css` - Contains `@font-face` declarations for Goli font family
4. ❌ `css/layout.css` - Contains layout utilities and container styles
5. ❌ `css/components.css` - Contains component base styles (buttons, headings, text)
6. ❌ `css/header.css` - Contains header-specific styles
7. ❌ `css/footer.css` - Contains footer-specific styles
8. ❌ `css/responsive.css` - Empty but should contain responsive breakpoints

**Impact:**
- CSS variables from `variables.css` are not available, causing fallback to browser defaults
- Goli font faces from `typography.css` may not load properly
- Layout utilities from `layout.css` are not applied
- Component base styles are missing
- Header/footer specific styles are not loaded

**Fix Required:**
Add these `<link>` tags to `includes/head.php` **before** the WordPress/Elementor CSS files:

```php
<!-- Local CSS Files (load first for proper cascade) -->
<link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/variables.css">
<link rel="stylesheet" href="/css/typography.css">
<link rel="stylesheet" href="/css/layout.css">
<link rel="stylesheet" href="/css/components.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="stylesheet" href="/css/main.css">
```

---

## 2. Missing CSS Selectors/Classes

### Issue: HTML Classes Without CSS Rules

**Classes Used in `index.php` But Not Defined in Any CSS File:**

1. ❌ `.skip-link` (line 34)
   - **Usage:** `<a class="skip-link screen-reader-text" href="#content">`
   - **Missing Styles:** No CSS rules found in any CSS file
   - **Impact:** Skip link is visible when it should be hidden until focused
   - **Required CSS:**
   ```css
   .skip-link {
     position: absolute;
     top: -9999px;
     left: -9999px;
     z-index: 999999;
   }
   .skip-link:focus {
     position: fixed;
     top: 0;
     left: 0;
     padding: 1em;
     background: #000;
     color: #fff;
     text-decoration: none;
   }
   ```

2. ❌ `.screen-reader-text` (line 34)
   - **Usage:** `<a class="skip-link screen-reader-text" href="#content">`
   - **Missing Styles:** No CSS rules found
   - **Impact:** Text may be visible when it should be screen-reader only
   - **Required CSS:**
   ```css
   .screen-reader-text {
     clip: rect(1px, 1px, 1px, 1px);
     position: absolute !important;
     height: 1px;
     width: 1px;
     overflow: hidden;
   }
   .screen-reader-text:focus {
     clip: auto !important;
     height: auto;
     width: auto;
     position: static !important;
   }
   ```

3. ❌ `.site-main` (line 38)
   - **Usage:** `<main id="content" class="site-main post-6564 page type-page status-publish hentry">`
   - **Missing Styles:** No base styles for main content area
   - **Impact:** Main content may lack proper spacing, max-width, or layout
   - **Required CSS:**
   ```css
   .site-main {
     display: block;
     width: 100%;
   }
   main#content {
     padding: 0;
     margin: 0;
   }
   ```

4. ❌ `.page-content` (line 41)
   - **Usage:** `<div class="page-content">`
   - **Missing Styles:** No styles found
   - **Impact:** Page content wrapper lacks styling
   - **Required CSS:**
   ```css
   .page-content {
     width: 100%;
     max-width: 100%;
   }
   ```

5. ❌ `.elementor-background-video-container` (line 45)
   - **Usage:** `<div class="elementor-background-video-container" aria-hidden="true">`
   - **Missing Styles:** No styles found in local CSS (may be in Elementor CSS)
   - **Impact:** Background video may not display correctly
   - **Note:** This may be handled by Elementor CSS, but should be verified

6. ❌ `.elementor-background-video-embed` (line 46)
   - **Usage:** `<div class="elementor-background-video-embed"></div>`
   - **Missing Styles:** No styles found
   - **Impact:** Video embed container may not position correctly

7. ❌ `.animated-slow` (lines 72, 74, 78)
   - **Usage:** Multiple elements with `class="animated-slow"`
   - **Missing Styles:** No CSS rules found
   - **Impact:** Animation delays or timing may not work
   - **Required CSS:**
   ```css
   .animated-slow {
     animation-duration: 1s;
     animation-fill-mode: both;
   }
   ```

8. ❌ `.elementor-invisible` (lines 51, 74)
   - **Usage:** Elements with `class="elementor-invisible"`
   - **Missing Styles:** No CSS rules found in local CSS
   - **Impact:** Elements may be visible when they should be hidden initially
   - **Required CSS:**
   ```css
   .elementor-invisible {
     visibility: hidden;
   }
   ```

---

## 3. Incorrect Asset Paths

### Issue: Hardcoded WordPress Paths

**Problematic Paths in `includes/head.php`:**

All WordPress/Elementor CSS files use absolute paths starting with `/wp-content/`:
- `/wp-content/plugins/jet-engine/assets/css/frontend.css`
- `/wp-content/themes/hello-elementor/assets/css/reset.css`
- `/wp-content/uploads/elementor/css/custom-frontend.min.css`
- etc.

**Impact:**
- These paths assume WordPress directory structure exists
- If this is a standalone PHP site, these files won't exist
- Results in 404 errors for missing CSS files
- Browser dev tools will show failed resource loads

**Fix Required:**
Either:
1. **Remove WordPress CSS links** if this is a standalone site
2. **Verify paths exist** if WordPress files are present
3. **Use relative paths** or environment-based path resolution

---

## 4. Broken Selectors / Mismatched Class Names

### Issue: Class Name Inconsistency

**Found in `css/layout.css` line 27:**
```css
.elementor-element {
	--widgets-spacing: 20px 20px;
	--widgets-spacing-row: 20px;
	--widgets-spacing-column: 20px;
}
```

**But in `css/main.css`:**
- Uses `.th` class instead of `.elementor-element`
- This was part of the class normalization (`.elementor-element` → `.th`)

**Impact:**
- `css/layout.css` still references `.elementor-element` but HTML uses `.th`
- CSS variables won't apply to elements with `.th` class
- Layout spacing may not work correctly

**Fix Required:**
Update `css/layout.css` line 27:
```css
/* OLD */
.elementor-element {
	--widgets-spacing: 20px 20px;
	--widgets-spacing-row: 20px;
	--widgets-spacing-column: 20px;
}

/* NEW */
.th {
	--widgets-spacing: 20px 20px;
	--widgets-spacing-row: 20px;
	--widgets-spacing-column: 20px;
}
```

---

## 5. JavaScript Components Relying on Missing CSS

### Issue: CSS-Dependent JavaScript Functionality

**Classes Used by JavaScript (likely) But Missing CSS:**

1. ❌ `.elementor-invisible` - Used for scroll-triggered animations
   - JavaScript likely toggles this class
   - Without CSS, elements won't hide/show properly

2. ❌ `.animated-slow` - Used for animation timing
   - JavaScript animations may depend on this class
   - Without CSS, animations may not work

3. ❌ `.elementor-background-video-container` - Video background functionality
   - JavaScript likely initializes video here
   - Without proper CSS, video positioning fails

---

## 6. CSS Loading Order Issues

### Current Loading Order (Problematic):
1. WordPress/Elementor CSS files (30+ files)
2. `css/main.css` (only local file)

### Correct Loading Order Should Be:
1. `css/reset.css` - Base reset
2. `css/variables.css` - CSS custom properties
3. `css/typography.css` - Font declarations
4. `css/layout.css` - Layout utilities
5. `css/components.css` - Component base styles
6. `css/header.css` - Header styles
7. `css/footer.css` - Footer styles
8. `css/responsive.css` - Responsive breakpoints
9. `css/main.css` - Page-specific styles (highest priority)
10. WordPress/Elementor CSS (if needed)

**Impact:**
- CSS cascade is incorrect
- Local styles may be overridden by WordPress CSS
- Variables may not be available when needed

---

## 7. Missing Styles for Critical Components

### Video Background Container
**HTML (line 45):**
```html
<div class="elementor-background-video-container" aria-hidden="true">
    <div class="elementor-background-video-embed"></div>
</div>
```

**Missing CSS:**
```css
.elementor-background-video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

.elementor-background-video-embed {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
}
```

---

## Recommended Fixes

### Priority 1: Critical (Breaks Functionality)

1. **Add missing CSS file links to `includes/head.php`**
2. **Add `.skip-link` and `.screen-reader-text` styles to `css/reset.css`**
3. **Fix `.elementor-element` → `.th` in `css/layout.css`**
4. **Add `.elementor-invisible` styles to `css/components.css`**

### Priority 2: Important (Visual Issues)

5. **Add `.site-main` and `.page-content` base styles**
6. **Add `.animated-slow` animation styles**
7. **Add video background container styles**
8. **Verify WordPress CSS paths exist or remove them**

### Priority 3: Optimization

9. **Consolidate CSS loading order**
10. **Remove unused WordPress CSS if not needed**
11. **Add missing responsive breakpoints**

---

## Files to Modify

1. **`includes/head.php`** - Add local CSS file links
2. **`css/reset.css`** - Add skip-link and screen-reader styles
3. **`css/layout.css`** - Fix `.elementor-element` → `.th`
4. **`css/components.css`** - Add `.elementor-invisible` and `.animated-slow`
5. **`css/responsive.css`** - Add responsive utilities if needed

---

## Testing Checklist

After fixes:
- [ ] All CSS files load without 404 errors
- [ ] Skip link is hidden until focused
- [ ] Screen reader text is properly hidden
- [ ] Main content area displays correctly
- [ ] Video background works
- [ ] Animations trigger properly
- [ ] CSS variables are available
- [ ] Goli font loads correctly
- [ ] No console errors for missing resources

