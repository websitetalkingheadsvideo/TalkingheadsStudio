# Talking Heads Reference Site Analysis

## Site URL
https://talkingheads.com/

## Page Structure

### 1. Header/Navigation
- **Location**: `<header class="site-header">` or `<banner>`
- **Components**:
  - Logo (link to home)
  - Primary navigation menu (Home, About, Actors, Our Work, Marketing, Specials, Contact)
  - "Book A Demo" CTA button with icon
- **Layout**: Horizontal flex layout with logo, nav, and CTA

### 2. Hero Section
- **Location**: First section in `<main id="content">`
- **Content**:
  - H4: "A video production company"
  - H2: "Captivate Your audience" (with gradient text on "Captivate")
  - CTA Button: "Start Your Project" with arrow icon
- **Background**: Video background (Vimeo embed)
- **Layout**: Centered content with video background

### 3. Services Grid Section
- **Location**: Second section in main
- **Structure**: Grid of article cards (10 services)
- **Services**:
  1. Funny Ads
  2. Custom Animated Videos
  3. 3D and 2D Animation
  4. Motion Graphics
  5. VSL and Presentations
  6. Elearning Videos
  7. Corporate Videos
  8. Product Demos
  9. Whiteboard Videos
  10. App Walkthrough
- **Layout**: Grid layout with video/image cards

### 4. Process/Steps Section
- **Location**: Appears after services (need to verify exact location)
- **Content**: 4 icon boxes with titles:
  1. Next-Level Performance Creative
  2. Sponsored Media
  3. Customer Experience Lead
- **Layout**: Horizontal row of icon boxes

### 5. Testimonials Section
- **Location**: Third section in main
- **Structure**: Grid of testimonial cards
- **Content**: 5 video testimonials
  - Bogdan V. - "Our VSL made him more than $1 Million."
  - David O. - "Our strategy helped increase their funds from under $60 million to almost $80 million."
  - Dave Z. - "It was a pleasure working with the team. You are in great hands with those guys."
  - John G. - "You can't go wrong working with the Talking Heads team."
  - Demar Z. - "Our video strategy took his sales from $0 to $1 MILLION per month"
- **Layout**: Grid of video cards with play buttons

### 6. Logo/Client Strip
- **Location**: After testimonials
- **Content**: 
  - "Trusted by over 4,000 clients worldwide"
  - "More than 25k+ happy clients"
- **Layout**: Horizontal strip

### 7. Footer
- **Location**: `<footer>` or `<contentinfo>`
- **Sections**:
  - Follow Us (social media links)
  - Quick menu (navigation links)
  - Services (service links)
  - Get in Touch (phone, email)
  - Copyright and "Let's collaborate" CTA
- **Layout**: Multi-column footer

## Typography

### Base Typography
- **Font Family**: `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`
- **Base Font Size**: `16px`
- **Base Font Weight**: `400`
- **Base Line Height**: `24px`
- **Base Color**: `rgb(51, 51, 51)` (#333)

### Heading Styles
- **H2**: 
  - Font Size: `60px`
  - Font Weight: `700` (bold)
  - Color: `rgb(255, 255, 255)` (white)
  - Used for: Large headings (e.g., "Captivate Your audience")
- **H3**: 
  - Font Size: `30px`
  - Font Weight: `700` (bold)
  - Color: `rgb(255, 255, 255)` (white)
  - Used for: Section titles (e.g., service names)
- **H4**: 
  - Font Size: `24px`
  - Font Weight: `500` (medium)
  - Color: `rgb(255, 255, 255)` (white)
  - Used for: Smaller headings (e.g., "A video production company", footer headings)

### Gradient Text
- **Class**: `.mp-gradient-text`
- **Usage**: Applied to key words in headings (e.g., "Captivate" in hero)

## Colors

### Base Colors
- **Background**: `rgb(255, 255, 255)` (white)
- **Text**: `rgb(51, 51, 51)` (#333)
- **Gradient**: Used for accent text (orange/gold gradient - #EAA73F appears in icons)

### Button Colors
- Primary CTA buttons appear to have white text on colored background
- Arrow icons are white

## Layout Patterns

### Container Structure
- Main content wrapped in `<main id="content">`
- Sections use flex/grid layouts
- No apparent use of Elementor classes

### Spacing
- Sections have consistent vertical spacing
- Grid items have consistent gaps
- Padding and margins appear balanced

## Responsive Breakpoints
- **Desktop**: ~1200px+
- **Tablet**: ~768px
- **Mobile**: ~375-414px

## CSS Files (to be determined from network requests)
- Need to inspect Network tab for CSS file names and structure

## Key Visual Elements

### Buttons
- "Book A Demo" in header
- "Start Your Project" in hero
- "Let's collaborate" in footer
- All have arrow icons (SVG)

### Icons
- Arrow icons in buttons
- Social media icons in footer
- Process step icons (SVG format)

### Videos
- Hero background video (Vimeo)
- Testimonial videos with play button overlays

## Notes
- Site appears clean without Elementor markup
- Uses semantic HTML structure
- Modern CSS (flexbox/grid)
- No black area before content
- Sections flow naturally without overlaps

