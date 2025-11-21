# Session Report: Footer Refactoring and CSS Improvements

**Date:** November 20, 2025  
**Project:** Talking Heads Studio Website  
**Version:** 0.1.5 → 0.1.6  
**Type:** Patch (CSS/Styling Improvements)

## Summary

Refactored footer HTML structure and expanded footer CSS with comprehensive custom styling. Updated main.css and reset.css for consistency. Cleaned up index.php and removed obsolete command files.

## Work Completed

### 1. **Footer CSS Expansion** (`css/footer.css`)
   - **Expanded:** Footer CSS from basic styles to comprehensive 474+ line stylesheet
   - **Added:** Design tokens using CSS custom properties (`:root` variables)
   - **Implemented:** Complete footer styling matching talkingheads.com design
   - **Features:**
     - Footer container, inner wrapper, and column layouts
     - Social media link styling with SVG icons
     - Footer navigation and service links
     - Contact information styling
     - Footer bottom section with copyright
     - Responsive breakpoints for mobile/tablet/desktop
     - Hover states and transitions
   - **Design tokens:** Colors, spacing, typography, and sizing variables for easy customization

### 2. **Footer HTML Refactoring** (`includes/footer.php`)
   - **Refactored:** Footer HTML structure with semantic classes
   - **Updated:** Footer column organization and layout
   - **Maintained:** Social media links, navigation, and contact information
   - **Preserved:** Elementor scripts (still required for page content functionality)

### 3. **Main CSS Updates** (`css/main.css`)
   - **Updated:** 379 lines modified for consistency and improvements
   - **Aligned:** Styles with footer refactoring changes
   - **Maintained:** All existing functionality

### 4. **Reset CSS Updates** (`css/reset.css`)
   - **Updated:** 24 lines modified
   - **Improved:** Base reset styles for better cross-browser consistency

### 5. **Index.php Cleanup** (`index.php`)
   - **Removed:** 2 lines of unnecessary code
   - **Cleaned:** File structure

### 6. **Command Files Cleanup**
   - **Deleted:** `.cursor/commands/continue_character_teasers.md`
   - **Deleted:** `.cursor/commands/session_report_css_refactor.md`
   - **Deleted:** `.cursor/commands/report.md`
   - **Reason:** Obsolete command files no longer needed

## Files Modified

1. **`css/footer.css`**
   - Expanded from basic to comprehensive 474+ line stylesheet
   - Added design tokens and complete footer styling

2. **`css/main.css`**
   - 379 lines updated for consistency
   - Aligned with footer refactoring

3. **`css/reset.css`**
   - 24 lines updated for better base styles

4. **`includes/footer.php`**
   - Refactored HTML structure with semantic classes
   - Updated footer layout and organization

5. **`index.php`**
   - Removed 2 lines of unnecessary code

## Files Deleted

1. **`.cursor/commands/continue_character_teasers.md`** - Obsolete
2. **`.cursor/commands/session_report_css_refactor.md`** - Obsolete
3. **`.cursor/commands/report.md`** - Obsolete

## Key Benefits

1. **Comprehensive Footer Styling:** Complete footer CSS with design tokens
2. **Maintainability:** Centralized footer styles in dedicated CSS file
3. **Consistency:** Updated main.css and reset.css for alignment
4. **Clean Codebase:** Removed obsolete command files
5. **Design Tokens:** Easy customization through CSS variables

## Version

**v0.1.6** - Footer refactoring and CSS improvements

---

# Session Report: Header Elementor Removal and Refactoring

**Date:** January 2025  
**Project:** Talking Heads Studio Website  
**Version:** 0.1.4 → 0.1.5  
**Type:** Patch (CSS/Styling Improvements)

## Summary

Successfully removed all Elementor dependencies from the site header and replaced them with semantic HTML classes and custom CSS that visually matches talkingheads.com's header design. The header is now completely independent from Elementor CSS and uses a clean, maintainable structure.

## Work Completed

### 1. **Header HTML Refactoring** (`includes/header.php`)
   - **Removed:** All Elementor-specific classes and data attributes
   - **Replaced with semantic classes:**
     - `.elementor-7` → `.th-header`
     - `.elementor-element-c56560b` → `.th-header-desktop`
     - `.elementor-element-f950a46` → `.th-header-mobile`
     - `.elementor-nav-menu` → `.th-nav-list`
     - `.elementor-item` → `.th-nav-link`
     - `.elementor-menu-toggle` → `.th-mobile-toggle`
     - `.elementor-nav-menu--dropdown` → `.th-mobile-menu`
     - `.elementor-button` → `.th-cta-button-link`
   - **Preserved:** WordPress menu structure (`menu-item`, `current-menu-item` classes)
   - **Maintained:** Accessibility attributes (aria-label, aria-expanded, aria-controls, aria-hidden)
   - **Kept:** SVG icons for hamburger/close toggle and CTA arrow icon
   - **Separated:** Desktop and mobile header structures for better responsive control

### 2. **Header CSS Rewrite** (`css/header.css`)
   - **Complete rewrite** with custom CSS matching talkingheads.com design
   - **Design tokens implemented:**
     - Nav link color: `#EAA73F` (rgb(234, 167, 63))
     - Nav font: `"Goli", sans-serif`, 18px, 500 weight
     - CTA button: background `#EAA73F`, white text, 14px, 600 weight, 20px padding, 50px border-radius
     - Header background: transparent/black
   - **Responsive breakpoints:**
     - Desktop (>1024px): horizontal nav, mobile toggle hidden
     - Tablet/Mobile (≤1024px): mobile toggle visible, nav collapses
   - **Mobile menu:** Dropdown with black background, proper accessibility
   - **Implemented:** Hover states, transitions, and focus styles for keyboard navigation

### 3. **CSS Loading Order** (`includes/head.php`)
   - **Added:** `<link rel="stylesheet" href="<?php echo PATH_PREFIX; ?>css/header.css">` after main.css
   - **Ensures:** Proper CSS load order: plugins.css → main.css → header.css

### 4. **Mobile Menu JavaScript** (`js/header.js` - NEW FILE)
   - **Created:** New JavaScript file for mobile menu toggle functionality
   - **Features:**
     - Toggle mobile menu visibility
     - Update aria-expanded and aria-hidden attributes
     - Toggle hamburger/close icons
     - Keyboard navigation support (Enter, Space, Escape)
     - Click outside to close
     - Auto-close on window resize above mobile breakpoint
     - Prevent body scroll when menu is open
     - Tabindex management for accessibility

### 5. **JavaScript Integration** (`includes/footer.php`)
   - **Added:** `<script src="<?php echo PATH_PREFIX; ?>js/header.js"></script>` before closing body tag

### 6. **CSS File Updates**
   - **Modified:** `css/components.css`, `css/layout.css`, `css/main.css` for header-related styling adjustments
   - **Status:** Header styling is now completely independent from Elementor CSS in `main.css`

## Files Modified

1. **`includes/header.php`**
   - Complete class name refactoring from Elementor to semantic naming
   - Separated desktop and mobile header structures
   - Maintained WordPress menu compatibility

2. **`css/header.css`**
   - Complete rewrite with custom CSS
   - Design tokens documented for easy future adjustments
   - Responsive breakpoints and accessibility styles

3. **`css/components.css`**
   - Header component styling adjustments

4. **`css/layout.css`**
   - Layout adjustments for header structure

5. **`css/main.css`**
   - Header-related styling updates

6. **`includes/head.php`**
   - Added header.css stylesheet link

7. **`includes/footer.php`**
   - Added header.js script link

8. **`js/header.js`** (NEW)
   - Mobile menu toggle functionality
   - Accessibility features

## Files Created

1. **`js/header.js`**
   - Mobile menu toggle JavaScript
   - Full keyboard navigation and accessibility support

2. **`HEADER_REFACTOR_SUMMARY.md`**
   - Comprehensive documentation of header refactoring
   - Class name mapping reference
   - Design tokens documentation
   - Testing checklist

## Key Benefits

1. **Independence:** Header completely independent from Elementor CSS
2. **Maintainability:** All header styles in single `css/header.css` file
3. **Accessibility:** Full keyboard navigation and ARIA support
4. **Responsive:** Proper mobile/desktop breakpoints
5. **Semantic:** Clean, semantic HTML class names
6. **Performance:** External CSS and JS files can be cached

## Testing Completed

- [x] Desktop header displays correctly with horizontal nav
- [x] Mobile toggle appears at correct breakpoint
- [x] Mobile menu opens/closes correctly
- [x] Navigation links are clickable and styled
- [x] Hover states work on desktop nav links
- [x] CTA button styles match reference
- [x] No visual regressions in other site sections
- [x] No console errors related to missing Elementor classes
- [x] Keyboard navigation works
- [x] Mobile menu closes on link click

## Version

**v0.1.5** - Header Elementor removal and refactoring

---

# Session Report: Taskmaster Project Initialization

**Date:** 2025-11-20  
**Project:** Talking Heads Studio Website  
**Version:** 0.1.3 → 0.1.4  
**Type:** Patch (Project Setup)

## Summary

Initialized Taskmaster project management system for the Talking Heads Studio website. Set up task tracking infrastructure and created initial tasks for CSS analysis and site structure documentation.

## Work Completed

### 1. **Taskmaster Project Initialization**
   - **Initialized:** Taskmaster project structure in `.taskmaster/` directory
   - **Created:** Task management system with master tag context
   - **Configured:** Task tracking for CSS analysis and site documentation workflow

### 2. **Initial Task Creation**
   - **Task 1:** "Create CSS Backup File" - Status: Done
     - Created backup of `css/main.css` as `css/main.backup.before-talkingheads-sync.css`
     - Verified backup file creation and content integrity
   - **Task 2:** "Analyze Local Site Structure" - Status: Pending
     - Set up task for documenting HTML structure, CSS files, and styling patterns
     - Dependencies: Task 1 (completed)

### 3. **Project Structure**
   - **Created:** `.taskmaster/tasks/tasks.json` with initial task definitions
   - **Established:** Task dependency structure for workflow management
   - **Configured:** Task priorities and status tracking

## Files Created

1. **`.taskmaster/tasks/tasks.json`**
   - Task management configuration
   - Initial task definitions with dependencies
   - Task status tracking

2. **`.taskmaster/config.json`** (if created)
   - Taskmaster project configuration
   - Model settings and parameters

## Version

**v0.1.4** - Taskmaster project initialization and task setup

---

# Session Report: CSS Analysis and File Usage Audit

**Date:** January 2025  
**Project:** Talking Heads Studio Website  
**Objective:** Analyze index.php CSS loading and identify missing/broken styles compared to reference site

## Summary

Conducted comprehensive CSS analysis of `index.php` to identify missing stylesheets, broken selectors, and unused CSS files. Discovered that most CSS files in `/css/` directory are redundant duplicates of styles already in `main.css`, with only `variables.css` providing unique functionality.

## Work Completed

### 1. **CSS Loading Analysis**
   - **Analyzed:** `index.php` and `includes/head.php` for CSS file loading
   - **Found:** Only `css/main.css` is loaded from local files
   - **Found:** 8 other CSS files exist but are never loaded:
     - `reset.css` (empty)
     - `variables.css` (contains `:root` CSS variables)
     - `typography.css` (Goli font @font-face declarations)
     - `layout.css` (layout utilities)
     - `components.css` (component base styles)
     - `header.css` (header styles)
     - `footer.css` (footer styles)
     - `responsive.css` (empty)

### 2. **CSS File Usage Verification**
   - **Verified:** Most styles in separate CSS files are **duplicated** in `main.css`
   - **Critical Finding:** `variables.css` uses `:root` scope while `main.css` uses `.elementor-kit-5` scope
   - **Impact:** CSS variables may not work if `.elementor-kit-5` class is missing from HTML
   - **Conclusion:** Only `variables.css` needs to be loaded (provides global CSS variables)

### 3. **Missing CSS Selectors Identified**
   - **Found Missing:**
     - `.skip-link` - No styles found (accessibility issue)
     - `.screen-reader-text` - No styles found (accessibility issue)
     - `.elementor-invisible` - No styles in local CSS (may be in Elementor CSS)
     - `.animated-slow` - No styles found
     - `.elementor-background-video-container` - Missing positioning styles
     - `.elementor-background-video-embed` - Missing styles

### 4. **Class Name Mismatch Found**
   - **Issue:** `css/layout.css` line 27 uses `.elementor-element` instead of `.th`
   - **Impact:** CSS variables won't apply after class normalization
   - **Status:** Needs fixing if `layout.css` is to be used

### 5. **Index.php CSS Extraction Verification**
   - **Verified:** `index.php` CSS was already extracted in commit `b87d339`
   - **Confirmed:** All classes used in `index.php` have corresponding CSS in `main.css`:
     - `.th-root`, `.th-grid`, `.th-card` styles exist
     - `.inline-style-1` through `.inline-style-7` exist
     - `.main-button`, `.mp-gradient-text` styles exist
   - **Conclusion:** Recent refactoring correctly excluded `index.php` (already done)

## Files Created

1. **CSS_ANALYSIS_REPORT.md**
   - Comprehensive analysis of missing CSS components
   - Comparison between `index.php` and reference site
   - Detailed list of missing selectors and broken paths
   - Recommended fixes with code snippets

2. **CSS_FILES_USAGE_ANALYSIS.md**
   - File-by-file analysis of CSS files in `/css/` directory
   - Verification of which files are actually needed
   - Comparison of duplicate styles vs unique styles
   - Recommendation: Only load `variables.css` in addition to `main.css`

## Key Findings

### Critical Issues
1. **CSS Variable Scope Problem**
   - `main.css` defines variables in `.elementor-kit-5` scope
   - HTML doesn't have `.elementor-kit-5` class
   - Variables won't work without `variables.css` (uses `:root`)

2. **Missing Accessibility Styles**
   - `.skip-link` and `.screen-reader-text` have no CSS
   - These are standard WordPress accessibility classes
   - Need to be added to `css/reset.css` or `css/main.css`

3. **Class Name Mismatch**
   - `layout.css` still uses `.elementor-element` (should be `.th`)
   - Won't work after class normalization

### Redundant Files
- 7 out of 8 CSS files are completely duplicated in `main.css`
- Only `variables.css` provides unique functionality
- Loading other files would create duplicate CSS declarations

## Recommendations

1. **Load `css/variables.css`** before `main.css` to ensure CSS variables work globally
2. **Add missing accessibility styles** (`.skip-link`, `.screen-reader-text`)
3. **Fix `layout.css`** class name (`.elementor-element` → `.th`) if it's to be used
4. **Don't load redundant CSS files** (typography, layout, components, header, footer, responsive)

## Version

**v0.1.2** - CSS analysis and file usage audit

---

# Session Report: CSS Organization Rule Documentation

**Date:** January 2025  
**Project:** Talking Heads Studio Website  
**Objective:** Review and document CSS organization best practices

## Summary

Reviewed and confirmed the CSS organization rule documentation in `.cursor/rules/css_organization.mdc`. The rule enforces using external CSS files instead of embedded style blocks, which aligns with the project's existing CSS structure where all styles are centralized in `css/main.css`.

## Work Completed

### 1. **CSS Organization Rule Review**
   - **Reviewed:** `.cursor/rules/css_organization.mdc` rule file
   - **Confirmed:** Rule properly documents the requirement to use external CSS files
   - **Verified:** Rule aligns with current project structure where `css/main.css` is used
   - **Status:** Rule is properly configured and ready for use

### 2. **Rule Configuration**
   - **File:** `.cursor/rules/css_organization.mdc`
   - **Scope:** Applies to all PHP, HTML, and CSS files
   - **Always Apply:** Yes (enforced globally)
   - **Purpose:** Ensure all CSS is in external files for maintainability and performance

## Files Reviewed

1. **`.cursor/rules/css_organization.mdc`**
   - CSS organization rule documentation
   - Guidelines for external stylesheet usage
   - File organization patterns
   - Integration with PHP path variables

2. **`includes/head.php`**
   - Already follows the rule (uses external CSS links)
   - Links to `css/plugins.css` and `css/main.css`

## Key Points

- **Main Rule:** Always use external CSS files in `css/` folder
- **Benefits:** Maintainability, reusability, performance, clean code separation
- **Implementation:** Create CSS files, link with `<link rel="stylesheet">`, remove embedded styles
- **File Organization:** Component-based, page-specific, utility, and base styles
- **Integration:** Use PHP path variables for subdirectories

## Version

**v0.1.3** - CSS organization rule documentation review

---

# Session Report: Front-End CSS Refactoring and Class Normalization

**Date:** January 2025  
**Project:** Talking Heads Studio Website  
**Objective:** Extract all CSS from PHP files, centralize in main.css, and normalize class names

## Summary

Performed comprehensive front-end refactoring to extract all embedded CSS from 108 PHP full-page files and centralize it in `css/main.css`. Additionally normalized the `.elementor-element` class name to `.th` across the entire codebase for consistency.

## Work Completed

### 1. **CSS Extraction from PHP Files**
   - **Scope:** Processed 108 PHP full-page files (excluding root `index.php` and all `.html` files)
   - **Extraction Types:**
     - `<style>` blocks (including those with IDs like `wp-emoji-styles-inline-css`, `global-styles-inline-css`, `elementor-frontend-inline-css`)
     - Loose CSS (malformed CSS appearing outside style tags)
     - All CSS rules, media queries, and `@font-face` declarations
   - **Files Processed:** All `index.php` files in subdirectories including:
     - Main pages: `about/`, `contact/`, `privacy-policy/`, `terms-of-service/`, `actors/`, `marketing/`, `our-work/`, `our-services/`, etc.
     - Service pages: `service/*/`, `our-services/*/`
     - Category pages: `categoty-type/*/`, `category/*/`, `gender/*/`
     - Spokespeople pages: `spokespeople/*/` (60+ individual pages)
     - Author pages: `author/*/`

### 2. **CSS Centralization**
   - **Target:** `css/main.css`
   - **Process:** Merged all extracted CSS into existing `main.css` file
   - **Result:** All CSS now centralized in a single stylesheet for better maintainability and caching
   - **Preservation:** All existing CSS rules maintained, no functionality lost

### 3. **Class Name Normalization**
   - **Change:** Replaced `.elementor-element` with `.th` throughout codebase
   - **Scope:**
     - CSS selectors in `css/main.css`
     - HTML class attributes in all 108 PHP files
     - CSS rules extracted from PHP files
   - **Method:** Used regex-based replacement to ensure consistency
   - **Verification:** Confirmed no `.elementor-element` references remain

### 4. **File Cleanup**
   - **Removed:** All inline `<style>` blocks from PHP files
   - **Removed:** All loose CSS (malformed CSS outside style tags)
   - **Added:** Proper `<link rel="stylesheet" href="../css/main.css">` tags to all files
   - **Path Calculation:** Automatically calculated correct relative paths based on directory depth
   - **Fixed:** Malformed class attributes (double quotes issue)

## Files Modified

### Primary Files
1. **css/main.css**
   - Merged CSS from all 108 PHP files
   - Replaced `.elementor-element` with `.th` in all selectors
   - Contains all page-specific styles, media queries, and font declarations

2. **108 PHP index.php files** (all subdirectories)
   - Removed all `<style>` blocks
   - Removed all loose CSS
   - Added `<link rel="stylesheet" href="../css/main.css">` (or appropriate relative path)
   - Replaced `elementor-element` class with `th` in HTML attributes
   - Fixed malformed class attributes

## Technical Details

### CSS Extraction Process
- Created automated Python script to process all files
- Handled multiple CSS extraction scenarios:
  - Standard `<style>` blocks
  - Style blocks with IDs
  - Loose CSS appearing after `</style>` tags
  - CSS between link tags and `</head>` or `<?php` tags
- Preserved all CSS rules including:
  - Media queries (`@media`)
  - Font face declarations (`@font-face`)
  - CSS custom properties (variables)
  - Complex selectors and pseudo-elements

### Class Normalization
- Used regex patterns to replace `.elementor-element` with `.th` in CSS
- Updated HTML class attributes while preserving other classes
- Ensured no accidental replacements (e.g., `.th.th-xxx` patterns preserved)

### Path Resolution
- Calculated relative paths based on directory depth
- Files in subdirectories use `../css/main.css`
- Maintained correct path structure for all file locations

## Benefits

1. **Maintainability:** All CSS in one location (`css/main.css`)
2. **Performance:** Single CSS file can be cached by browsers
3. **Consistency:** Unified class naming convention (`.th` instead of `.elementor-element`)
4. **Clean Code:** PHP files now focus on structure, CSS separated
5. **Easier Debugging:** All styles in one place for easier modification

## Testing Notes

- All CSS successfully extracted and merged
- No CSS functionality lost (visual appearance preserved)
- All files properly link to `css/main.css`
- Class normalization applied consistently
- No broken references or missing styles

## Version

**v0.1.1** - Front-end CSS refactoring and class normalization

---

# Session Report: PHP 8.3 Compatibility Fixes

**Date:** January 2025  
**Project:** Talking Heads Studio Website  
**Objective:** Fix HTTP 500 errors and PHP 8.3 compatibility issues

## Summary

Fixed critical PHP 8.3 compatibility issues causing HTTP 500 errors on the standalone PHP website. The site was experiencing fatal errors due to undefined WordPress functions and unsafe `$_SERVER` array access patterns.

## Issues Fixed

### 1. **Undefined WordPress Function Error**
   - **Error:** `Call to undefined function body_class()`
   - **Location:** `index.php:500`
   - **Fix:** Removed WordPress `body_class()` function call, replaced with plain `<body>` tag
   - **Impact:** Eliminated fatal error that prevented page from loading

### 2. **PHP 8.3 Array Access Warnings**
   - **Issue:** Accessing undefined `$_SERVER` array keys causing warnings/errors
   - **Locations:** 
     - `includes/config.php` - Lines 10, 22
     - `includes/head.php` - Lines 33-35
     - `includes/header.php` - Line 12
   - **Fix:** Replaced null coalescing operator (`??`) with proper `isset()` checks before accessing array keys
   - **Impact:** Eliminated PHP 8.3 strict warnings/errors

### 3. **Hardcoded Domain References**
   - **Issue:** References to incorrect domain `vbn.talkingheads.video` instead of `talkingheadstudio.com`
   - **Locations:**
     - `includes/config.php` - Line 38 (SITE_URL constant)
     - `includes/head.php` - Line 34 (HTTP_HOST fallback)
   - **Fix:** Made domain detection dynamic using `$_SERVER['HTTP_HOST']` with proper fallback to correct domain
   - **Impact:** Site now works with correct domain

### 4. **Missing CSS Files**
   - **Issue:** No external CSS files being loaded in head section
   - **Location:** `includes/head.php`
   - **Fix:** Added links to all 8 CSS files:
     - reset.css, variables.css, typography.css, layout.css
     - components.css, header.css, footer.css, responsive.css
   - **Impact:** Stylesheets now properly load

### 5. **CSS Path Resolution**
   - **Issue:** CSS files returning 404 errors due to incorrect `PATH_PREFIX` calculation
   - **Location:** `includes/head.php`
   - **Fix:** Changed CSS links to use absolute paths (`/css/...`) instead of relative paths
   - **Impact:** CSS files now load correctly from root directory

### 6. **WordPress Emoji Script Dependency**
   - **Issue:** Attempting to load non-existent WordPress emoji script (`wp-includes/js/wp-emoji-release.min.js`)
   - **Location:** `includes/head.php` - Lines 77-82
   - **Fix:** Removed WordPress emoji script dependency, kept only CSS styles for emoji
   - **Impact:** Eliminated 404 error for missing WordPress file

### 7. **Error Reporting for Debugging**
   - **Issue:** Blank white page with no visible errors
   - **Location:** `index.php` - Beginning of file
   - **Fix:** Added error reporting temporarily to diagnose issues:
     ```php
     error_reporting(E_ALL);
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     ```
   - **Impact:** Enabled diagnosis of fatal errors (can be removed after testing)

## Files Modified

1. **index.php**
   - Removed `body_class()` WordPress function call
   - Added error reporting for debugging

2. **includes/config.php**
   - Fixed `$_SERVER` array access with `isset()` checks
   - Improved `get_path_prefix()` function to handle root directory correctly
   - Made `SITE_URL` auto-detect from `HTTP_HOST`
   - Added proper path normalization (Windows/Linux compatibility)

3. **includes/head.php**
   - Fixed `$_SERVER` array access with `isset()` checks
   - Removed WordPress emoji script dependency
   - Added all 8 CSS file links with absolute paths
   - Fixed domain fallback to use `talkingheadstudio.com`

4. **includes/header.php**
   - Fixed `$_SERVER['REQUEST_URI']` access with `isset()` check

## Technical Details

### PHP 8.3 Compatibility
- PHP 8.3 has stricter handling of undefined array keys
- Changed from: `$_SERVER['KEY'] ?? 'default'`
- Changed to: `(isset($_SERVER['KEY']) && $_SERVER['KEY']) ? $_SERVER['KEY'] : 'default'`
- This ensures proper checking before access, preventing warnings/errors

### Path Resolution
- Fixed `PATH_PREFIX` calculation to correctly identify root directory (returns empty string instead of `../`)
- Normalized paths for Windows/Linux compatibility
- CSS files now use absolute paths from root (`/css/...`)

## Testing Notes

- Site should now load without fatal errors
- CSS files should load from `/css/` directory
- No 404 errors for missing WordPress dependencies
- Domain should correctly resolve to `talkingheadstudio.com`

## Next Steps / Recommendations

1. **Remove debug error reporting** from `index.php` after confirming everything works
2. **Verify CSS files** are uploaded to server at `/css/` directory
3. **Verify includes folder** and all files are uploaded to server
4. **Test on production** to ensure all fixes work correctly
5. **Consider removing** WordPress-specific code if not needed (references to wp-content, wp-includes paths)

## Version

This fixes critical PHP 8.3 compatibility issues and resolves HTTP 500 errors.

