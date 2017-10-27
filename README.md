# Sheffield Green Party Theme

Based on http://underscores.me/

## Getting started

### Running WordPress locally

Follow the instructions at https://github.com/Varying-Vagrant-Vagrants/VVV#installation for installing Varying Vagrant Vagrants (VVV).


### Install Grunt:

```
npm install -g grunt-cli
```

### Installing Sass:

Sass requires Ruby. If you're on OS X or Linux you probably already have Ruby installed; test with ruby -v in your terminal. When you've confirmed you have Ruby installed, run gem install sass to install Sass. Use http://rubyinstaller.org/ to install Ruby on Windows.

```
gem install sass
```

### Install this theme

Clone this repo into `www/wordpress-default/wp-config/themes` (this path may be differenet if you're using multi-site locally).

In the Wordpress Admin (`/wp-admin`) go to `Appearance > Themes` and activate `Sheffield Green Party Theme`

### Enable JetPack locally

Add the following line to `www/wordpress-default/wp-config.php`

```
add_filter( 'jetpack_development_mode', '__return_true' );
```


## Generating the CSS

### Development

To complile the CSS run:

```
grunt
```

To watch for changes and recompile:

```
grunt watch
```

### Production

To compile the CSS for production (compresses and no sourcemap) run:

```
grunt dist
```

## Icons

Uses an inline SVG sprite generated using Icomoon - https://icomoon.io/app/

TO DO: see if using an external svg sprite would be better.

### Updating the icon set

1. Upload `sgptheme/images/icons/selection.json` to Icomoon.
2. Add or remove icons
3. Download the new icon set
4. Rename the new `symbol-defs.svg` to `symbol-defs.svg.php`
5. Replace the existing `selection.json` and `symbol-defs.svg.php` in `sgptheme/images/icons` with the new versions

### Using icons

Pass in the icon name and (optionally) screen-reader only text.

```
<?php echo svg_icon('menu', 'Menu') ?>
```


## Image sizes

Post / page thumbnail 500x360px

Author bio thumbnail 200x200px

Portrait 400x430px


## Staging

git remote sgpadmin@do.sheffieldgreenparty.org.uk:themes/sgptheme.git
git push master staging


## Related posts

add custom field 'category' to a page to show 5 posts for that category


## Posts

To appear on homepage add category 'featured'. To have it appear as a sticky post at the top of the news on homepage add category 'sticky'

if should set author
custom fields
author: their name
author-image: relative path eg /wp-content/uploads/2017/08/douglas-johnson-tb.jpg
author-link: relative path to the category for their posts eg /category/people/douglas-johnson/
author-title: eg City Ward Councillor, Sheffield Green Party or just 'Sheffield Green Party' if no official role
