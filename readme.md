<figure class="figure">
<img class="figure-img img-fluid rounded" src="http://miromannino.com/wp-content/uploads/miro-wp-theme-main-image.png"/>
</figure>

Miro is a Minimal, Clean and Responsive WordPress Theme with random animated headers. Theme is customisable with theme options: social buttons to display, twitter tracker, privacy policy link, and other parts of the layout. A set of shortcodes will help you to generate complex portfolios. Realised using Bootstrap 4, it brings all of its power in your blog.

## Live Demo

[miromannino.com](http://miromannino.com)

## Social Buttons 

From the Theme options, you can configure the social buttons: Twitter, GitHub, LinkedIn, Wordpress, PayPal donation, Instagram, Flickr, YouTube. You can decide to display them in the footer as in the following image.

<figure class="figure">
<img class="figure-img img-fluid rounded" src="http://miromannino.com/wp-content/uploads/miro-wp-theme-social-buttons-1024x236.png"/>
</figure>

The social buttons can be also displayed anywhere using the shortcode <code>[social-links]</code> as a series of icons, or using the shortcode <code>[social-links-list]</code> to show as a list of links.

## Buttons

To add a generic button you can use the shortcode <code>[button]</code>. This one has two possible parameters: <code>href</code> and <code>target</code>. The button works like a standard link. The target is optional.

For example: 

    [button href="http://miromannino.com" target="_blank"]
        link to my site
    [/button]

## Title links

Each title is modified to add a hash character, that let sections of a post to be easily referenced.

## Portfolio Shortcodes

To create a portfolio page use these shortcodes:
    
    [portfolio]
        ...
    [/portfolio]

The content of portfolio shortcodes are cached. The cache ID is related to the page ID, for this reason you should use only one <code>portfolio</code> per page. But, if you want to use more <code>portfolio</code>, you can use the <code>id</code> attribute:

    [portfolio id="1"]
        ...
    [/portfolio]

The cache stores the pages for 1 hour, so any changes is not immediately visible, unless you change the id attribute.

### Entries

The portfolio has various entries, where each one shows a particular project:

    [portfolio]
        [portfolio-entry]
            ...
        [/portfolio-entry]
        [portfolio-entry]
            ...
        [/portfolio-entry]
    [portfolio]
  
### Title<

Each entry has a title, usually it links to the project page:

    [portfolio-title href="http://myblog.com/myProjectPage/"]
        My Title
    [/portfolio-title]
  
### Attributes list

Each entry has a list of attributes. This is an example:

    [portfolio-attrs image="http://myImageLink"]
        [portfolio-attr label="Category"]Wordpress plugin[/portfolio-attr]
        [portfolio-attr label="Release Date"]07/2012[/portfolio-attr]
        [portfolio-attr label="Technologies"]PHP, Javascript, CSS, HTML[/portfolio-attr]
        [portfolio-attr label="Download"]&lt;a href="...">version 1.0&lt;/a>[/portfolio-attr]
        ...
        [portfolio-links]
            [portfolio-link href="http://myblog.com/myProjectPage/"]Project Page[/portfolio-link]
            [portfolio-link href="http://github.com/myProjectPage/" target="_blank"]GitHub page[/portfolio-link]
        [/portfolio-links]
    [/portfolio-attrs]

The <code>portfolio-attrs</code> has an optional image (using the <code>image</code> attribute). Then, the last attribute can be a list of useful links: link that point to project and so on.

### Description

The description give a short description of the entry. You can use it in the following way:

    [pf-entryDescription]
        My Description ...
    [/pf-entryDescription]

### A Complete example

Complete entry example:

    [portfolio]
        [pf-entry]
            [pf-entryTitle href="http://myblog.com/myProjectPage/"]My Title[/pf-entryTitle]
            [portfolio-attrs image="http://myImageLink"]
                [portfolio-attr label="Category"]Wordpress plugin[/portfolio-attr]
                [portfolio-attr label="Release Date"]07/2012[/portfolio-attr]
                [portfolio-attr label="Technologies"]PHP, Javascript, CSS, HTML[/portfolio-attr]
                [portfolio-attr label="Download"]&lt;a href="...">version 1.0&lt;/a>[/portfolio-attr]
                ...
                [portfolio-links]
                    [portfolio-link href="http://myblog.com/myProjectPage/"]Project Page[/portfolio-link]
                    [portfolio-link href="http://github.com/myProjectPage/" target="_blank"]GitHub page[/portfolio-link]
                [/portfolio-links]
            [/portfolio-attrs]
            [pf-entryDescription]
              My Description ...
            [/pf-entryDescription]
        [/pf-entry]
        ... other entries
    [/portfolio]

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

