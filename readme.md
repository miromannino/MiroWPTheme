![screenshot](https://github.com/miromannino/MiroWPTheme/blob/resources/miro-wp-theme-project-image.png)

Miro is a Minimal, Clean and Responsive WordPress Theme with random animated headers. Theme is customisable with theme options: social buttons to display, twitter tracker, privacy policy link, and other parts of the layout. A set of shortcodes will help you to generate complex portfolios. Realised using Bootstrap 4, it brings all of its power in your blog.


## Live Demo

[miromannino.com](http://miromannino.com)


## Social Buttons 

From the Theme options, you can configure the social buttons: Twitter, GitHub, LinkedIn, Wordpress, PayPal donation, Instagram, Flickr, YouTube. You can decide to display them in the footer as in the following image.

![screenshot](https://github.com/miromannino/MiroWPTheme/blob/resources/footer-screenshot.png)

The social buttons can be also displayed anywhere using the shortcode <code>[social-links]</code> as a series of icons, or using the shortcode <code>[social-links-list]</code> to show as a list of links.


## Buttons

To add a generic button you can use the shortcode <code>[button]</code>. This one has two possible parameters: <code>href</code> and <code>target</code>. The button works like a standard link. The target is optional.

For example: 

    [button href="http://miromannino.com" target="_blank"]
        link to my site
    [/button]



## Portfolio

You can build a portfolio like the following one:

![screenshot](https://github.com/miromannino/MiroWPTheme/blob/resources/portfolio-screenshot.png)

In order to make a similar one, follow the example in [portfolio_test.html](https://github.com/miromannino/MiroWPTheme/blob/master/assets/scripts/portfolio_test.html)


## Title links

Each title is modified to add a hash character, that let sections of a post to be easily referenced.


## Theme development

The theme is based on Sage, a WordPress starter theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap Sass.


### Theme development

Sage uses [gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.


#### Install gulp and Bower

Building the theme requires [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.


#### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

