# WP Toolbelt

![Travis build process](https://travis-ci.com/BinaryMoon/wp-toolbelt.svg?branch=master)

A lightweight plugin inspired by Jetpack but designed for privacy, speed, and accessibility.

## Speed?

I want it to be fast. I want to be able to enable any of the features and not have my Google Pagespeed score drop. To be fast it:

* Doesn't use jQuery or any other javascript framework. All javascript is vanilla js, and minified.
* Minifies all assets (JS and CSS)
* Loads all assets inline. They are already small, and loading them directly on the page means there are no server requests.
* Only loads things when they are needed. JS and CSS are only loaded for activated modules.
* No options. There's only one database option, and that's an array that stores what modules are active.
* Uses the minimum code possible. Minimum Javascript and PHP. Less code means more speed, and fewer bugs.
* All modules are disabled by default. You only enable the ones you need.

## Privacy? GDPR?

To ensure the plugin is as privacy focused as possible it:

* Does not phone out. No data is shared with third parties.
* Does not use standard social sharing javascripts (loaded from social networks servers).
* Does not track your usage of the plugin.
* Does not add generator comments, or secret comments to your site html.

# Features

* [Breadcrumbs](https://github.com/BinaryMoon/wp-toolbelt/wiki/Breadcrumbs)
* [Cookie Banner](https://github.com/BinaryMoon/wp-toolbelt/wiki/Cookie-Banner)
* [Disable Comment Urls](https://github.com/BinaryMoon/wp-toolbelt/wiki/Disable-Comment-Urls)
* [Fast 404](https://github.com/BinaryMoon/wp-toolbelt/wiki/Fast-404)
* [Featured Attachments](https://github.com/BinaryMoon/wp-toolbelt/wiki/Featured-Attachment)
* [Heading Anchors](https://github.com/BinaryMoon/wp-toolbelt/wiki/Heading-Anchor)
* [Lazy Loading](https://github.com/BinaryMoon/wp-toolbelt/wiki/Lazy-Loading)
* [Optimization](https://github.com/BinaryMoon/wp-toolbelt/wiki/Optimization)
* [Portfolio](https://github.com/BinaryMoon/wp-toolbelt/wiki/Portfolio)
* [Random Redirection](https://github.com/BinaryMoon/wp-toolbelt/wiki/Random-Redirect)
* [Related Posts](https://github.com/BinaryMoon/wp-toolbelt/wiki/Related-Posts)
* [Responsive Videos](https://github.com/BinaryMoon/wp-toolbelt/wiki/Responsive-Videos)
* [Social Menu](https://github.com/BinaryMoon/wp-toolbelt/wiki/Social-Menu)
* [Static Social Sharing](https://github.com/BinaryMoon/wp-toolbelt/wiki/Static-Social-Sharing)
* [Widget Display](https://github.com/BinaryMoon/wp-toolbelt/wiki/Widget-Display)

# Thanks!

This plugin is heavily inspired by the [Jetpack](https://github.com/automattic/jetpack) and [Machete](https://github.com/nilovelez/machete/) plugins. A lot of the modules use code from these plugins as starting points.
