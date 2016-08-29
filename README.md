# Sheffield Green Party Theme

Based on http://underscores.me/

## Getting started

Install Grunt:

```
npm install -g grunt-cli
```

Installing Sass:

Sass requires Ruby. If you're on OS X or Linux you probably already have Ruby installed; test with ruby -v in your terminal. When you've confirmed you have Ruby installed, run gem install sass to install Sass. Use http://rubyinstaller.org/ to install Ruby on Windows.

```
gem install sass
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