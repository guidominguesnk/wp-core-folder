# Organize and Manage WordPress Features with Ease

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen)](https://egghead.io/courses/how-to-contribute-to-an-open-source-project-on-github)

WP Core is a code organization structure for WordPress themes that aims to facilitate feature management.
 
## Features:

**Organized code:** The structure divides the code into four folders:

- **Enable:** Activates features.
- **Disable:** Deactivates features.
- **Config:** Customizes theme without modifying core files.

**Selective feature deactivation:** Quickly and easily disable WordPress features and plugins, optimizing your website's performance.

**Custom code management:** Create and manage your own custom codes in the Core/Enable folder, keeping the code organized and easy to maintain.

**Settings standardization:** Define default settings for your projects in a single file, making it easy to replicate them in new projects.

```php
<?php

return [
  /**
   * Disable WordPress features.
   * 
   * 1. Block editor.
   * 2. RSS feeds.
   * 3. Comments.
   */
  'disable' => [
    'block-library' => true, /* 1 */
    'rss' => true, /* 2 */
    'comment' => true, /* 3 */
    // ...
  ],

  /**
   * Enable theme features.
   * 
   * 1. Allow SVG upload.
   * 2. Enable menus.
   * 3. Allow custom logo.
   * 4. Load smooth scroll library.
   * 5. Load animations library (AOS).
   */
  'enable' => [
    'svg' => true, /* 1 */
    'theme' => [
      'menus' => true, /* 2 */
      'custom-logo' => true, /* 3 */
      // ...
    ],
  ],
];
```

## Benefits

- **Increased organization:** The code is more organized and easier to understand.
- **Flexibility:** Customize the theme without modifying the core files.
- **Optimized performance:** Disable unused features to improve website performance.
- **Simplified maintenance:** Easier code maintenance and bug fixing.

## Target audience

- WordPress developers who want to organize and optimize their projects.
- Theme creators who want to offer a more flexible experience to their users.
- Professionals who seek to improve the performance and security of their WordPress websites.

## Get started

**1:** Add the `core` folder directly into your theme directory.  
**2:** Adjust settings in `default.php` and `index.php` files within the `config` folder to meet your requirements.  
**3:** In your theme's `functions.php file`, include the following code:

```php
<?php

/* Include essential core files. */
require_once get_template_directory() . '/core/core.php';
```

## Notes

- This is a basic example of the my WP Core structure. You can adapt it according to your needs.
- It is important to have WordPress development knowledge to use this structure.
