# CSS Files Usage Analysis
**Question:** Are the unloaded CSS files in `/css/` actually used?

## Summary: Most Styles Are Already in `main.css`, BUT...

**Answer:** Most styles are **duplicated** in `main.css`, but there are **critical differences** in scope and some unique styles that matter.

---

## File-by-File Analysis

### 1. ❌ `css/reset.css` - **EMPTY**
- **Status:** File is completely empty (only comments)
- **Used?** NO - Nothing to load
- **Action:** Can be ignored or populated with actual reset styles

---

### 2. ⚠️ `css/variables.css` - **DIFFERENT SCOPE**

**What it contains:**
```css
:root {
  --e-global-color-primary: #6EC1E4;
  --e-global-typography-primary-font-family: "Roboto", Sans-serif;
  --container-max-width: 1600px;
  /* etc */
}
```

**What's in `main.css`:**
```css
.elementor-kit-5 {
  --e-global-color-primary: #6EC1E4;
  --e-global-typography-primary-font-family: "Roboto", Sans-serif;
  /* etc - SAME VALUES but in .elementor-kit-5 scope */
}
```

**Difference:**
- `variables.css` uses `:root` (global scope)
- `main.css` uses `.elementor-kit-5` (scoped to elements with that class)

**Used?** **YES - CRITICAL DIFFERENCE**
- If HTML doesn't have `.elementor-kit-5` class, variables won't work
- `:root` variables are always available globally
- **Impact:** CSS variables may not work if `.elementor-kit-5` class is missing

**Verdict:** **SHOULD BE LOADED** - Provides global CSS variables

---

### 3. ✅ `css/typography.css` - **DUPLICATED**

**What it contains:**
- 4 `@font-face` declarations for Goli font (400, 500, 600, 700 weights)

**What's in `main.css`:**
- **EXACT SAME** `@font-face` declarations (lines 32-78)

**Used?** NO - Completely duplicated
- Loading this would create duplicate font declarations
- `main.css` already has them

**Verdict:** **NOT NEEDED** - Already in `main.css`

---

### 4. ⚠️ `css/layout.css` - **PARTIALLY DUPLICATED + BUG**

**What it contains:**
```css
.elementor-section.elementor-section-boxed > .elementor-container {
  max-width: var(--container-max-width);
}

.e-con {
  --container-max-width: var(--container-max-width);
}

main#content .e-con-boxed,
main#content .e-con-boxed .e-con-inner {
  max-width: 100% !important;
  width: 100%;
}

.elementor-widget:not(:last-child) {
  margin-block-end: 20px;
}

.elementor-element {  /* ❌ BUG: Should be .th */
  --widgets-spacing: 20px 20px;
}
```

**What's in `main.css`:**
- ✅ `.elementor-section.elementor-section-boxed > .elementor-container` - EXISTS (line 1)
- ✅ `.e-con { --container-max-width: 1600px }` - EXISTS (line 1, but hardcoded value)
- ✅ `main#content .e-con-boxed` styles - EXISTS (line 1)
- ✅ `.elementor-widget:not(:last-child)` - EXISTS (line 1)
- ❌ `.elementor-element` - EXISTS but should be `.th` (class normalization issue)

**Differences:**
1. `layout.css` uses `var(--container-max-width)` (dynamic)
2. `main.css` uses hardcoded `1600px` (static)
3. `layout.css` has `.elementor-element` (wrong class name)
4. `main.css` has `.th` (correct class name)

**Used?** **PARTIALLY**
- The `var(--container-max-width)` approach is better (responsive)
- But the `.elementor-element` bug needs fixing
- `main.css` already has most of these styles

**Verdict:** **NOT NEEDED IF FIXED** - But `main.css` should use CSS variables instead of hardcoded values

---

### 5. ✅ `css/components.css` - **DUPLICATED**

**What it contains:**
```css
.elementor-widget-button .elementor-button {
  background-color: var(--e-global-color-accent);
  font-family: var(--e-global-typography-accent-font-family), Sans-serif;
  font-weight: var(--e-global-typography-accent-font-weight);
}

.elementor-widget-heading .elementor-heading-title {
  font-family: var(--e-global-typography-primary-font-family), Sans-serif;
  font-weight: var(--e-global-typography-primary-font-weight);
  color: var(--e-global-color-primary);
}

.elementor-widget-text-editor {
  font-family: var(--e-global-typography-text-font-family), Sans-serif;
  font-weight: var(--e-global-typography-text-font-weight);
  color: var(--e-global-color-text);
}
```

**What's in `main.css`:**
- ✅ **EXACT SAME** styles exist (line 2, 88, etc.)
- These are base component styles that are then overridden by page-specific rules

**Used?** NO - Completely duplicated
- `main.css` has these exact same base styles
- Plus many more specific overrides

**Verdict:** **NOT NEEDED** - Already in `main.css`

---

### 6. ✅ `css/header.css` - **DUPLICATED**

**What it contains:**
```css
.site-header .site-branding {
  flex-direction: column;
  align-items: stretch;
}

.site-header {
  padding-inline-end: 0px;
  padding-inline-start: 0px;
}
```

**What's in `main.css`:**
- ✅ **EXACT SAME** styles (line 1)

**Used?** NO - Completely duplicated

**Verdict:** **NOT NEEDED** - Already in `main.css`

---

### 7. ✅ `css/footer.css` - **DUPLICATED**

**What it contains:**
```css
.site-footer .site-branding {
  flex-direction: column;
  align-items: stretch;
}
```

**What's in `main.css`:**
- ✅ **EXACT SAME** style (line 1)

**Used?** NO - Completely duplicated

**Verdict:** **NOT NEEDED** - Already in `main.css`

---

### 8. ❌ `css/responsive.css` - **EMPTY**
- **Status:** File is completely empty (only comments)
- **Used?** NO - Nothing to load
- **Action:** Can be ignored or populated with responsive utilities

---

## Final Verdict

### Files That SHOULD Be Loaded:
1. ✅ **`css/variables.css`** - Provides `:root` scope for CSS variables (critical)

### Files That Are NOT Needed (duplicated):
2. ❌ `css/reset.css` - Empty
3. ❌ `css/typography.css` - Duplicated in `main.css`
4. ❌ `css/layout.css` - Mostly duplicated (but has a bug to fix)
5. ❌ `css/components.css` - Duplicated in `main.css`
6. ❌ `css/header.css` - Duplicated in `main.css`
7. ❌ `css/footer.css` - Duplicated in `main.css`
8. ❌ `css/responsive.css` - Empty

---

## Critical Issues Found

### 1. CSS Variable Scope Problem
- `main.css` defines variables in `.elementor-kit-5` scope
- If HTML doesn't have this class, variables won't work
- `variables.css` uses `:root` (always available)
- **Fix:** Load `variables.css` OR ensure `.elementor-kit-5` class exists on `<html>` or `<body>`

### 2. Class Name Mismatch in `layout.css`
- `layout.css` line 27 uses `.elementor-element`
- Should be `.th` (after class normalization)
- **Fix:** Update `layout.css` or don't load it

### 3. Hardcoded Values vs CSS Variables
- `main.css` uses hardcoded `1600px` for max-width
- `layout.css` uses `var(--container-max-width)` (better approach)
- **Fix:** Update `main.css` to use variables

---

## Recommendation

**Only load `css/variables.css`** to ensure CSS variables work globally:

```php
<!-- In includes/head.php, before main.css -->
<link rel="stylesheet" href="/css/variables.css">
<link rel="stylesheet" href="/css/main.css">
```

**OR** ensure `.elementor-kit-5` class exists on a parent element so variables in `main.css` work.

**All other CSS files are redundant** and don't need to be loaded.

