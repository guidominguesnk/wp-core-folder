# Organize and Manage WordPress Features with Ease

WP Core is a code organization structure for WordPress themes that aims to facilitate feature management. It divides the code into three distinct folders: Core, Config, and Vendor, simplifying the location, activation, and deactivation of features.

## Features:

**Organized code:** The structure divides the code into three folders:

- **Core:** Contains the main theme files.
- **Config:** Allows you to customize the theme configuration without modifying the Core folder files.
- **Vendor:** Stores third-party code, such as libraries and frameworks.

**Selective feature deactivation:** Quickly and easily disable WordPress features and plugins, optimizing your website's performance.

**Custom code management:** Create and manage your own custom codes in the Core/Enable folder, keeping the code organized and easy to maintain.

**Settings standardization:** Define default settings for your projects in a single file, making it easy to replicate them in new projects.

```php
<?php

return [
  /**
   * Disable WordPress features.
   * 
   * 1. Disable block editor.
   * 2. Disable RSS feeds.
   * 3. Disable comments.
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
   * 4. Enable smooth scroll.
   * 5. Enable animations with AOS.
   */
  'enable' => [
    'svg' => true, /* 1 */
    'theme' => [
      'menus' => true, /* 2 */
      'custom-logo' => true, /* 3 */
      // ...
    ],
    'lib' => [
      'smooth-scroll' => true, /* 4 */
      'aos' => true, /* 5 */
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

- **Create the folders:** Create the `core`, `config`, and `vendor` folders inside your theme directory.  
- **Add the configuration file:** Create a `global.php` file in the `config` folder and add the above sample code, modifying it according to your needs.  
- **Activate the configuration:** In your theme's `functions.php file`, include the following code:

```php
<?php

$theme_dir = get_template_directory();

/* Include essential core files. (Do not modify these files!) */
require_once $theme_dir . '/core/core.php';
```

## Notes

- This is a basic example of the my WP Core structure. You can adapt it according to your needs.
- It is important to have WordPress development knowledge to use this structure.
