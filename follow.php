<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "noindex,follow";
$GoogleBotDirectives = "";
$PageTemplate = "pagina";
$PageTitle = "Sign up my newsletter";
$PageKeywords = "newsletter,feed,rss";
$PageDescription = "";
$PageAuthor = "John";
$PageAuthorBio = "about.php";
$PageAuthorJob = "Boss";
$PageAuthorCompany = "JS Inc.";
$DatePub = "2019-12-03T16:49:05-03:00";
$Comments="off";
$ShowMeta="off";
$Image="android-chrome-512x512.png";
require_once __DIR__.'/001.php';
echo <<<HTML

<!-- BODY TEXT START -->
<h5>Ops!</h5>
<p>My blog have no feed/rss, please sign my newsletter or follow me on Mastodon: @john_the_blog_dude</p>
<!-- BODY TEXT END -->

HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
