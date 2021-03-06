# Notscape Composer
A very small and naive static blog system for people like me who don't know how to program and don't want or can't use more complex CMS.

![icon sample](android-chrome-192x192.png "icon sample")

See how it looks online: http://supercaras.com.br/notscape-composer/

## Features

- No composer or generator. Just work out-of-the-box
- No SQL. Only PHP, CSS, a little JS and HTML
- Microdata schema with best SEO practices
- Full control over what is viewed and indexed by searchbots
- Very light, good for limited web host server
- Fast page load
- Consistent display on any device

## Limitations
- Update and edit files only by ftp or cpanel drive
- No RSS/feed (you will need to use a newsletter or other external solution).
- Can be chaotic when you have many post and page files (but posts will be in date order).
- The search may fall or bring poor results.

### How does it work?

It is a very basic application of PHP code, which joins the parts of HTML code (header, footer and body) and fills in some variable fields like post title, keywords etc. Content files are properly delimited and can be easily edited, imported or exported. You will need free access by ftp or cpanel to edit and create files.

## INSTRUCTIONS

### Install
Just put the files on the server and change all php files permission to 644 and folders to 755. Setup the `001.php` and `assets/js/search.js` files and that should work. 

### Writing
Edit in your favorite code editor.
Use regular html elements.
Upload to your server via ftp or web drive in cpanel.

##### Date and time format

When creating a page/post it is important to correctly set the date and time field according to ISO 8601 following this format:

2019-12-09T00:00:00-03:00

| year | month | day | T | hours | minutes | seconds | UTC |
|------|-------|-----|---|-------|---------|---------|-----|
|2019  |12     |09   | T |23     |59       |59       |-03:00|

Discover UTC from your location here: https://en.wikipedia.org/wiki/List_of_UTC_time_offsets

#### Posts
Use the demo posts. Copy and rename with this filename format: `2019-12-31_The-title-of-my-text.php`. Otherwise it will not be displayed in timeline.php

If you name a post file starting with 0, it will not be displayed in the list. It can be a draft system.

#### Pages

Copy one of regular pages (about, copyright etc.) and rename with the name you prefer, preferably friendly, with words separated by - or _ and no special characters. Do not start name with number 2.

Delete default pages you don't want except `index.php` and `timeline.php`. Don't forget to adapt the menu in the `001.php` file. Or don't, if you want them to be accessed only from other location. Be creative!

#### Images and other files
For organization purposes, try placing images in annual folders in `assets/img/` and general files in `assets/files/`
Use images like this: `<img src="assets/img/2019/sample.jpg" alt="description" />` and link files like this `<a href="assets/files/2019/archive.zip">archive.zip</a>`

### Site icon and manifest
Use the template image `assets/img/Notscape_icon.xcf` to make you own icon with Gimp or other image editor and build default sizes on https://favicon.io/favicon-converter/

Be sure to edit `site.webmanifest` file ("name" and "short_name"). Put them all in the root replacing the example icons.

### Comments
Comments provided by Telegram. Just setup in https://comments.app/ - Comments for websites - Connect website. Add token code in `001.php` file.

### Dealing with search engines and memorie

This is very important if you want full control of search engines access and general archive of your content on Internet.

#### Robots.txt and sitemap.xml

This is important: the `robots.txt` file must be at the root of domain or subdomain. If used in a subdirectory, it will not work. Make a good one using this generator: http://mcanerin.com/search-engine/tools/robots-txt-generator/. Block *assets* directory if you wish. Remember that spambots and badbots do not respect the `robots.txt` file instructions.

Be sure to change the sitemap address in the robots.txt file. You can create a sitemap using some free online tool such as https://www.xml-sitemaps.com/. You will need to generate a new sitemap.xml and upload it to server every time you create new content.

#### robots meta tag

Inside files, use the appropriate instructions on a case by case basis. Follow the guidelines in 
- https://developers.google.com/search/reference/robots_meta_tag#directives_1

More info: 
- https://yoast.com/robots-meta-tags/
- http://noarchive.net/meta/

### Internal search
The solution to finding specific texts is not the best but it is supposed to work. Qwant has a good search engine, but if your site is not being indexed, you can request a visit from the robot: https://help.qwant.com/help/qwant-search/how-to-get-my-website-listed-on-qwant/

If you want use another search engine you will need to make changes in `search.php`, `001.php` and `003.php` files and `assets/js/search.js` as well.

#### Search page setup

Put the full site url on `assets/js/search.js`, line 9, right after "site:", without `http` or `www`.

### Style

There are three pre-created style designs that can be selected in `001.php` file:
- `default.css`: my personal style
- `dark-default.css`: same but in dark mode ;)
- `minimal.css`: with minimum CSS required

If you are good at CSS and studying the chaotic organization of CSS classes you can change everything. Be free to rethink everything.

You can edit `assets/css/mystyle.css` for minor changes to your design preferences.

### Advice

Avoid messing up the `timeline.php`, `001.php` and `003.php` files. I recommend maintaining and using the `about.php`, `follow.php`, `copyright.php`, `search.php` and `privacy.php` pages. `index.php` also is critic.

## Help me
This is my first public code on Github and I'm a beginner. If you see something wrong, please, <a rel="me" href="https://banana.dog/@roberto">tell me</a>.
