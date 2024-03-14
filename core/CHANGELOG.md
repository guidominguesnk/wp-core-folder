# Changelog

All notable changes to this project will be documented in this file.

Format based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [1.0.1] - 2024-03-14

### Added
- Add `dashboard.php` for admin dashboard customization:
  - Remove Welcome panel.
  - Remove WordPress Events and News widget.
  - Remove deprecated Secondary widget area.
  - Remove Quick Draft widget.
  - Remove Recent Drafts widget.
  - Remove Activity widget.
  - Remove Browser Update Required notice.
  - Remove Site Health Status widget.
  - Remove Incoming Links widget.
  - Remove At a Glance widget for multisite networks.
  - Remove PHP Update Required notice.
  - Remove Plugins widget.
  - Remove Recent Comments widget.
  - Remove Right Now widget.
- Customization to remove language dropdown on login screen.
- Customization to update login page image link URL to home URL.
- Customization to update login page link title to site name.
- Customization to remove unnecessary theme checks from Site Health check.

### Removed
- Remove `vendor` folder to focus solely on the core WordPress structure.

### Improved
- Code comments and formatting for better readability and maintenance.
