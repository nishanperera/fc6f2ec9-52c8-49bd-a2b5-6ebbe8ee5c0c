# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

Project overview
- This repository is a static website for Mindful Journey Psychology. There is no build system, package manager, or test framework configured. Pages are plain HTML with inline CSS and minimal inline JavaScript.
- Key files:
  - index.html: Landing page with header/nav, hero, services, about, booking, and footer sections.
  - privacy.html and terms.html: Policy pages that share the same header/footer structure as index.html.
  - images/: Static assets (logos and profile photo).
  - robots.txt and sitemap.xml: Basic SEO and crawl configuration.
  - README.md: Minimal placeholder.

How to develop and preview locally
- Because this is a static site, you can edit the HTML files directly and preview via a simple static web server. Choose one option you have available:

Option A — Python (built-in, if Python is installed)
```bash path=null start=null
# From the repository root
# On Windows with the launcher:
py -m http.server 8000
# Or, if "python" is on PATH:
python -m http.server 8000
# Then open http://localhost:8000/index.html
```

Option B — Node.js (no project deps required)
```bash path=null start=null
# Using http-server (no install; runs via npx)
npx http-server -p 8000 .
# Or using serve
npx serve -l 8000 .
# Then open http://localhost:8000/index.html
```

Build, lint, and tests
- Build: Not applicable. There is no build step; the site is served as-is.
- Lint/format: Not configured.
- Tests: Not configured. Running a single test is not applicable.

High-level architecture and structure
- Page layout and styling
  - Each HTML page includes its own <style> block that defines the layout, colors, typography, and responsive behavior. There is no shared CSS file, so style changes must be applied to each page that needs them.
  - index.html sections:
    - header: Sticky header with logo and nav links that anchor-scroll to sections on the landing page.
    - hero: Headline, supporting text, and a button that smooth-scrolls to the booking section.
    - services: Grid of practice areas (anxiety, PTSD, neurodevelopmental, etc.).
    - about (bio): Profile container with portrait image and qualifications list.
    - booking: Contact details (address, phone, email) and a mailto: booking button; includes a Facebook link.
    - footer: Repeated site-wide links (Home, Privacy Policy, Terms & Conditions) and practice info.
  - privacy.html and terms.html mirror the header/footer and embed their own content inside a styled content container.

- Assets and external dependencies
  - images/:
    - logo-transparent-png.png and other logo variants used in the header.
    - profile.jpg used in the About section.
  - External CDNs used directly in HTML:
    - Google Fonts (Playfair Display and Open Sans).
    - Font Awesome CSS via cdnjs for icons.

- Navigation and links
  - Header nav in index.html uses in-page anchors (#services, #about, #booking, #contact).
  - Footer provides cross-links to index.html, privacy.html, and terms.html across all pages.

- SEO and crawl configuration
  - index.html, privacy.html, and terms.html each define descriptive <title>, meta description, authorship, and a canonical URL pointing to the production domain.
  - robots.txt allows all user agents and references the sitemap at https://mindfuljourneypsychology.com.au/sitemap.xml.
  - sitemap.xml lists index.html, privacy.html, and terms.html with changefreq/priority metadata.

Conventions and maintenance notes
- When adding a new standalone page (e.g., a services subpage):
  - Add consistent header/footer so navigation remains uniform.
  - Update footer links if you want the new page discoverable from all pages.
  - Add the new page’s canonical link and meta tags aligned with existing pages.
  - Update sitemap.xml with the new URL and adjust robots.txt if needed.
- When changing styles shared across pages, remember styles are defined inline per page; replicate updates to each page as needed or consider refactoring to a shared CSS file if you introduce a build step later.
- Keep external asset URLs (Google Fonts, Font Awesome) current; if you update versions, test visual consistency across pages.

Repository-specific notes for Warp
- There are no CLAUDE, Cursor, or Copilot rule files in this repository.
- README.md does not contain actionable setup or run instructions.
