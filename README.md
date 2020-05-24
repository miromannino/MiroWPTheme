![screenshot](https://github.com/miromannino/MiroWPTheme/blob/resources/miro-wp-theme-project-image.png)

Miro is a Minimal, Clean and Responsive WordPress Theme with random animated headers. Theme is customisable with theme options: social buttons to display, twitter tracker, privacy policy link, and other parts of the layout. A set of shortcodes will help you to generate complex portfolios. Realised using Bootstrap 4, it brings all of its power in your blog.



## Live Demo

[miromannino.com](http://miromannino.com)




## Features

### Social Buttons 

From the Theme options, you can configure the social buttons: Twitter, GitHub, LinkedIn, Wordpress, PayPal donation, Instagram, Flickr, YouTube. You can decide to display them in the footer as in the following image.

![screenshot](https://github.com/miromannino/MiroWPTheme/blob/resources/footer-screenshot.png)

The social buttons can be also displayed anywhere using the shortcode <code>[social-links]</code> as a series of icons, or using the shortcode <code>[social-links-list]</code> to show as a list of links.


### Portfolio

You can build a portfolio like the following one:

![screenshot](https://github.com/miromannino/MiroWPTheme/blob/resources/portfolio-screenshot.png)

In order to make a similar one, follow the example in [portfolio_test.html](https://github.com/miromannino/MiroWPTheme/blob/master/assets/scripts/portfolio_test.html)


### Title links

Each title is modified to add a hash character, that let sections of a post to be easily referenced.



## Theme development

The theme is based on Sage, a WordPress starter theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap Sass.


### Requirements

Make sure all dependencies have been installed before moving on:

* [WordPress](https://wordpress.org/) >= 4.7
* [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 8.0.0
* [Yarn](https://yarnpkg.com/en/docs/install)

### Theme structure

```shell
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── Controllers/      # → Controller files
│   ├── admin.php         # → Theme customizer setup
│   ├── filters.php       # → Theme filters
│   ├── helpers.php       # → Helper functions
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── dist/                 # → Built theme assets (never edit)
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
│   │   ├── config.json   # → Settings for compiled assets
│   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
│   ├── functions.php     # → Composer autoloader, theme includes
│   ├── index.php         # → Never manually edit
│   ├── screenshot.png    # → Theme screenshot for WP admin
│   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
└── vendor/               # → Composer packages (never edit)
```

### Theme setup

* Run `composer install` from the theme directory to install PHP dependencies
* Run `yarn` from the theme directory to install dependencies
* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (e.g. `/wp-content/themes/sage`)

### Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production
