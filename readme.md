Miro is a Minimal, Clean and Responsive WordPress Theme which adapts itself automatically for tablets and mobile devices. Theme is customizable with theme options: you can configure the title to show a logo (or a generic html piece of code), configure the social buttons to display, and other parts of the layout. A set of shortcodes will help you to generate complex portfolios (not a simple gallery of images). It also supports feature images and submenus.

# Live Demo

You can see a demo in http://miromannino.com


# Social Buttons

From the Theme options, you can configure the social buttons: Facebook, Twitter and Google+. You can decide to display them in the top of a page, in the bottom of a page, and in the bottom of a post. Social buttons example


# Buttons

To add a generic button you can use the shortcode [button]. This one has two possible parameters: href and target. The button works like a standard link. The target is optional.

For example:

[button href="http://miromannino.com" target="_blank"]link to my site[/button]


# Portfolio Shortcodes

To create a portfolio page use these shortcodes:

[pf-portfolio]
  ...
[/pf-portfolio]

The content of portfolio shortcodes are cached. The cache ID is related to the page ID, for this reason you should use only one pf-portfolio per page. But, if you want to use more pf-portfolio, you can use the id attribute:

[pf-portfolio id="1"]
  ...
[/pf-portfolio]

  ...

[pf-portfolio id="2"]
  ...
[/pf-portfolio]

If in the latter example you don’t use the id attributes, the second portfolio will be the same of the first, because they have the same cache id.

Remember that the cache store the pages for 1 hour, any changes is not visible after you change the page. If you want to force a refresh, you can change the id attributes.


## Entries

The portfolio has various entries:

[pf-portfolio]
	
  [pf-entry]
    ...
  [/pf-entry]

  [pf-entry]
    ...
  [/pf-entry]
	
[/pf-portfolio]


## Title

Each entry has a title, usually it links to the project page:

[pf-entryTitle href="http://myblog.com/myProjectPage/"]My Title[/pf-entryTitle]

you can also have a title without a link:

[pf-entryTitle]My Title[/pf-entryTitle]

## Attributes list

Each entry has a list of attributes too. This is an example of that list:

[pf-entryAttrList image="http://myImageLink"]

  [pf-entryAttr label="Category"]Wordpress plugin[/pf-entryAttr]
  [pf-entryAttr label="Release Date"]07/2012[/pf-entryAttr]
  [pf-entryAttr label="Technologies"]PHP, Javascript, CSS, HTML[/pf-entryAttr]
  [pf-entryAttr label="Download"]<a href="...">version 1.0</a>[/pf-entryAttr]
  ...
			
  [pf-entryLinks]
    [pf-entryLink href="http://myblog.com/myProjectPage/"]Project Page[/pf-entryLink]
    [pf-entryLink href="http://github.com/myProjectPage/" target="_blank"]GitHub page[/pf-entryLink]
  [/pf-entryLinks]
[/pf-entryAttrList]

As you can see, the entryAttrList has an optional image (using the image attribute), and its width should be 260px. Then, the last attribute can be a list of useful links (like the one that points to the project page and so on).


## Description

The description give a short description of the entry. You can use it like this:

[pf-entryDescription]
  My Description ...
[/pf-entryDescription]

A Complete example

Complete entry example:

[pf-portfolio]

  [pf-entry]

    [pf-entryTitle href="http://myblog.com/myProjectPage/"]My Title[/pf-entryTitle]

    [pf-entryAttrList image="http://myImageLink"]

      [pf-entryAttr label="Category"]Wordpress plugin[/pf-entryAttr]
      [pf-entryAttr label="Release Date"]07/2012[/pf-entryAttr]
      [pf-entryAttr label="Technologies"]PHP, Javascript, CSS, HTML[/pf-entryAttr]
      [pf-entryAttr label="Download"]<a href="...">version 1.0</a>[/pf-entryAttr]
      ...
			
      [pf-entryLinks]
        [pf-entryLink href="http://myblog.com/myProjectPage/"]Project Page[/pf-entryLink]
        [pf-entryLink href="http://github.com/myProjectPage/" target="_blank"]GitHub page[/pf-entryLink]
      [/pf-entryLinks]
    [/pf-entryAttrList]

    [pf-entryDescription]
      My Description ...
    [/pf-entryDescription]

  [/pf-entry]
	
  ... other entries
	
[/pf-portfolio]


# Recommendations

If you try to write a page using these shortcodes, probably WordPress will add extra spaces, because the wpautop is enabled. Disable this option in the pages where you use the shortcodes, for example using the plugin called wpautop-control.