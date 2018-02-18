# Getting set up locally

You can use Docker to run a container with WordPress and its dependencies locally.

## Pre-requisites

* [Docker for Mac](https://www.docker.com/docker-mac) / insert own operating system here
* [Docker Compose](https://docs.docker.com/compose/install/) - this is already included with Docker for Mac
* Grunt CLI `npm install -g grunt-cli`
* Sass `gem install sass` (requires Ruby)

## Installing

1. Create a directory for the site
```
mkdir sgp-site
```

2. Go in to that directory
```
cd sgp-site
```

3. Install the dev dependencies `npm install`

4. Create a file called docker-compose.yml and put the following in it
```
version: '2'

services:
   db:
     image: mysql:5.7
     volumes:
       - db_data:/var/lib/mysql
     restart: always
     environment:
       MYSQL_ROOT_PASSWORD: wordpress
       MYSQL_DATABASE: wordpress
       MYSQL_USER: wordpress
       MYSQL_PASSWORD: wordpress

   wordpress:
     depends_on:
       - db
     image: wordpress:latest
     ports:
       - "8000:80"
     restart: always
     environment:
       WORDPRESS_DB_HOST: db:3306
       WORDPRESS_DB_PASSWORD: wordpress
     working_dir: /var/www/html
     volumes:
       - ./wordpress/:/var/www/html/wp-content
volumes:
    db_data:

```

5. Run `docker-compose up`, this should create a local wordpress site in sgp-wordpress/wordpress. The first time you this it'll take a while as will be downloading and installing apache, php etc.

6. Once it's finished you can access wordpress locally at http://127.0.0.1:8000/

7. Go through the WordPress setup form and install

8. Clone the SGP theme into the themes folder
```
cd wordpress/themes && git clone git@github.com:amyvbenson/sgptheme.git
```

9. Enable the theme, go to http://127.0.0.1:8000/wp-admin/themes.php and active the sgptheme

10. Set permalink style
* Settings > Permalinks
* Set to 'Day and name'

11. Install and activate required plugins
* Plugins > Add new
* The following plugins are required in the theme, more are installed on the production site:
  * Advanced Custom Fields
  * BE Subpages Widget
  * Contact Form 7
  * List Category posts

12. Import content
* Install the importer: Tools > Import > WordPress > Install
* Run Importer > Upload file exported from the live site > Assign authors to the admin account you set up in WordPress install.

13. Update menus
* Appearance > menus > manage locations
* Assign 'Main nav' to Primary
* Assign 'Footer menu' to Footer

14. Set the homepage
* Settings > Reading
* Set 'Your homepage displays' to 'A static page' and select 'Home'

15. Configure widgets
* Appearance > Widgets
* Remove the default widgets and add the ones currently used on production.

## Generating the CSS

* Run `grunt` to generate the CSS from Sass
* Run `grunt watch` to watch for changes and regenerate
* The generated CSS file should be committed, there's no build process on deploy.

## Deploying

### Git Remote

In the SGP theme folder (sgp-site/wordpress/themes/sgptheme), set up the git remote
```
git remote add production sgpadmin@sheffieldgreenparty.org.uk:themes/sgptheme.git
```

### Deploy!

* Commit your changes
* Push to origin `git push origin master`
* Push to production `git push production master`

CSS and JS are merged and minified on production by the Fast Velocity Minify plugin, you may need to purge the cache after deploy to see your changes: Settings > Fast Velocity Minify > Purge the cache files > Delete
