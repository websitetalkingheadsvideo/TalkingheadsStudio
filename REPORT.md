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

