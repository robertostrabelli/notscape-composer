<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
// CONTENT RATING
// Safe For Kids               -CONTENT FOR CHILDREN ONLY
// 14 Years                    -FOR MINIMUM AGE
// General                     -FOR EVERYBODY
// Mature                      -ADULTS ONLY
// Restricted
// RTA-5042-1996-1400-1577-RTA -RESTRICTED TO ADULTS
$PageRating = "General";
// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$RobotsParameters = "index,follow";
// INSTRUCTION FOR GOOGLEBOT ONLY
$GoogleBotDirectives = "";
// PAGE TEMPLATE - "post" FOR REGULAR POSTS WITH META INFO FOOTER, "pagina" FOR PAGES WITHOUT FOOTER
$PageTemplate = "post";
// POST TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$PageTitle="Hello World!";
// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$PageKeywords="first,post,awsome,blog";
// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$PageDescription="This is my first post on my new blog";
// POST AUTHOR'S NAME
$PageAuthor="John";
// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$PageAuthorBio="about.php";
// AUTHOR'S JOB - NOT MANDATORY
$PageAuthorJob="Boss";
// AUTHOR'S COMPANY - NOT MANDATORY
$PageAuthorCompany="JS Inc.";
// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$DatePub="2019-12-08T00:01:00-03:00";
// SHOW COMMENTS - on OR off
$Comments="off";
// SHOW META DATA (AUTHOR, DATE, TAGS) - on OR off
$ShowMeta="on";
require_once __DIR__.'/001.php';
echo <<<HTML

<!-- BODY TEXT START -->
<p>Hi, my name is John Smith and this is my first post on my new awesome personal blog.</p>
<figure>
<img src="assets/img/2019/apple_colours.jpg" alt="apples" /><figcaption>http://mrg.bz/9dd13a</figcaption>
</figure>
<p>Don&apos;t worry, eat some apples and everything will be fine!</p>
<!-- BODY TEXT END -->

HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
