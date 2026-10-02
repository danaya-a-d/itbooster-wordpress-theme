# IT Booster — Custom WordPress Theme

Custom multilingual WordPress theme developed for the **IT Booster** corporate IT-services website.

This repository is a cleaned portfolio snapshot of the theme source code. It contains the code I implemented for the frontend, WordPress templates, CMS integration and custom JavaScript.

**Static frontend demo:** https://danaya-a-d.github.io/itbooster/

> The demo is a static snapshot of the frontend. WordPress admin/CMS functionality is not available in the demo.

## My role

- Responsive frontend implementation
- Custom WordPress theme development
- Multi-page template implementation
- WordPress navigation and CMS integration
- Multilingual page structure
- Blog/custom post type implementation
- AJAX interactions and contact form handling

## Key features

- **Custom WordPress theme** for a large multi-page corporate website
- Separate content templates for **Russian, English and Polish** versions of service pages
- **Polylang** language switcher integration
- **Carbon Fields** theme options for contacts, social links, localized labels, blog content and forms
- Custom post type for the **blog**, including archive and single-post templates
- **AJAX-powered load more / pagination** with browser history handling
- Contact form submission through WordPress AJAX and `wp_mail()`
- WordPress menus, featured images and custom image sizes
- Responsive styling and custom frontend interactions

## Tech stack

`WordPress` · `PHP` · `HTML` · `CSS` · `JavaScript` · `jQuery` · `Carbon Fields` · `Polylang` · `AJAX`

## Repository structure

```text
.
├── assets/
│   └── js/                     # custom JavaScript and AJAX logic
├── includes/
│   └── carbon-fields-options/  # theme option definitions
├── page-home.php               # main language version
├── page-home-en.php
├── page-home-pl.php
├── page-about.php
├── page-about-en.php
├── page-about-pl.php
├── page-3-*.php                # multilingual service page templates
├── archive-product.php         # blog archive
├── single-product.php          # blog article
├── product-content.php
├── contact-form.php
├── header.php
├── footer.php
├── functions.php               # theme setup, CPT, AJAX, CMS integration
├── index.php
└── style.css
```

## Portfolio-source note

The original local project archive also contained a full WordPress installation, WordPress core files, default themes/plugins, a vendored Carbon Fields package, third-party frontend libraries, fonts and client media.

Those files are intentionally **not included** here. This repository is meant for source-code review rather than as a production-ready WordPress backup.

Third-party libraries used by the original project included Swiper and WOW.js/Animate.css. Font files and client media are also omitted from the public source snapshot.

## What to review

For the WordPress/CMS side, start with:

- `functions.php`
- `includes/carbon-fields-options/theme-options.php`
- `header.php`
- `archive-product.php`
- `single-product.php`

For the multilingual frontend implementation, see the `page-*.php` templates, `style.css` and `assets/js/`.
