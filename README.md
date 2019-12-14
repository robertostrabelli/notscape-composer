# Notscape Composer
A very small and naive static blog system for people like me who don't know how to program and don't want or can't use more complex CMS.

![icon sample](android-chrome-192x192.png "icon sample")

See how it looks online: http://supercaras.com.br/notscape-composer/

## Features

- No SQL, no JS. Only PHP, CSS and HTML
- Microdata schema with best SEO practices
- Full control over what is viewed and indexed by searchbots
- Very light, good for limited web host server
- Fast page load
- Update files only by ftp or cpanel drive
- Consistent display on any device

## Limitations
- No RSS/feed (you will need to use a newsletter or other external solution)
- Can get chaotic when you have many post and page files (but posts will be in date order)
- List of posts can get hard to navigate (no solution yet)
- The search system may fall or bring poor results.


## INSTRUCTIONS

### Install
Just put the files on the server, set up the 002.php file and that should work.

### Writing
Edit in your favorite code editor. 
Use regular html elements. This is important: use **`&apos;`** insted **'**.
Upload to your server via ftp or web drive in cpanel.

##### Date and time format

When creating a page/post it is important to correctly set the date and time field according to ISO 8601 following this format:

2019-12-09T00:00:00-03:00

| year | month | day | T | hours | minutes | seconds | UTC |
|------|-------|-----|---|-------|---------|---------|-----|
|2019  |12     |09   | T |23     |59       |59       |-03:00|

Discover UTC from your location here: https://en.wikipedia.org/wiki/List_of_UTC_time_offsets


#### Posts
Copy the demo post and rename with this filename format: 2019-12-31_The-title-of-my-text.php . Otherwise it will not be displayed in timeline.php

If you name a post file starting with 0, it will not be displayed in the list. It can be a draft system.

#### Pages

Create pages with the name you prefer, preferably friendly, with words separated by - or _ and no special characters. Do not start with number 2.

Delete default pages you don't want except index.php and timeline.php. Don't forget to adapt the menu in the 002.php file. Or don't put it in the menu if you want them to be accessed only from other locations. Be creative!

#### Images
For organization purposes, try placing images in annual folders in assets/img/

### Site icon and manifest
Use the template image assets/img/Notscape_icon.xcf to make you own icon with Gimp or other image editor and build default sizes on https://favicon.io/favicon-converter/

Be sure to edit site.webmanifest file ("name" and "short_name"). Put them all in the root replacing the example icons.

### Advice
Avoid messing up the timeline.php, 001.php, 002.php and 003.php files

I recommend maintaining and using the about.php, follow.php, copyright.php, and privacy.php pages.

### Search
The solution to finding specific texts that I deployed is not the best but it is supposed to work.
Adapt the search.php page to the alternative search engine that works best for you. You will need to change line 27 of 003.php file if you going to use another search engine.

#### Tag search
Another important detail to consider: In 002.php you must define the domain or subdomain, even if the site is in a subdirectory. At the same time, for the keyword search to work, you must add the directory name to line 27 of the 003.php file according to the instructions written there.

### Style
Make a copy of the assets/css/estilos.css file and adapt it to your design preferences.

## Help me
This is my first public code on github and I'm a beginner. If you see something wrong, please, tell me.
