<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "index,follow";
$GoogleBotDirectives = "";
$PageTemplate = "entrada";
$PageTitle = "Welcome!";
$PageKeywords = "blog,news,personal";
$PageDescription = "John Smith Blog";
$PageAuthor = "John";
$PageAuthorBio = "about.php";
$PageAuthorJob = "Boss";
$PageAuthorCompany = "JS Inc.";
$DatePub = "2019-12-03T21:50:00-03:00";
$Comments="off";
$ShowMeta="off";
require_once __DIR__.'/001.php';
echo <<<HTML

<!-- BODY TEXT START -->
<h6><i>Hi!</i></h6>
<p>Welcome to my site. Here I regularly post some thoughts and even cake recipes.</p>
<!-- BODY TEXT END -->

HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
