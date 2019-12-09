# Notscape Composer
A very tiny and naive static blog system for people like me who don't know how to program.

## Features

- Very light, good for cheap or limited web host server
- Fast page load
- Update files only by ftp or cpanel drive
- Responsive

## INSTRUCTIONS

### Install
Just put the files on the server, set up the 002.php file and that should work.

### Posts
Use the demo post and only create blog posts with this filename format: 2019-12-31_The-title-of-my-text.php

If you name a post file starting with 0, it will not be displayed in the list. It can be a draft system.

### Pages
Create new pages or delete pages you don't want to use except index.php and timeline.php. Don't forget to adapt the menu in the 002.php file.

### Images
For organization purposes, try placing images in annual folders in assets/img/

### Site icon and manifest
Use the template image assets/img/Notscape_icon.xcf to make you own icon with Gimp or other image editor and build default sizes on https://favicon.io/favicon-converter/

Be sure to edit site.webmanifest file ("name" and "short_name"). Put them all in the root.

### Advice
Avoid messing up the timeline.php, 001.php, 002.php and 003.php files

I recommend maintaining and using the about.php, follow.php, copyright.php, and privacy.php pages.

### Search
Adapt the search.php page to the alternative search engine that works best for you. You will need to change line 27 of 003.php file if you going to use another search engine.

### Style
Make a copy of the assets/css/estilos.css file and adapt it to your design preferences.
