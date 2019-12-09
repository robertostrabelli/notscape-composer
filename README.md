# notscape-composer
A very tiny and naive static blog system for people like me who don't know how to program.

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
Some files referenced in the code are not contained in the project:
android-chrome-192x192.png
android-chrome-512x512.png
apple-touch-icon.png
favicon-16x16.png
favicon-32x32.png
favicon.ico
site.webmanifest

They can be generated here:
https://favicon.io/favicon-converter/

Be sure to edit the site.webmanifest file. Put them all in the root.

### Advice
Avoid messing up the timeline.php, 001.php, 002.php and 003.php files

I recommend maintaining and using the about.php, follow.php, copyright.php, and privacy.php pages.

### Search
Adapt the search.php page to the alternative search engine that works best for you. You will need to change line 27 of the 003.php file if you go use another search engine.

### Style
Make a copy of the assets/css/estilos.css file and adapt it to your preferences.
