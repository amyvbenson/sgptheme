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