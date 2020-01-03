<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "noindex,follow";
$GoogleBotDirectives = "";
$PageTemplate = "pagina";
$PageTitle = "Privacy policy";
$PageKeywords = "privacy,data,policy,cookies";
$PageDescription = "";
$PageAuthor = "John";
$PageAuthorBio = "about.php";
$PageAuthorJob = "Boss";
$PageAuthorCompany = "JS Inc.";
$DatePub = "2019-12-03T16:49:05-03:00";
$Comments="off";
$ShowMeta="off";
require_once __DIR__.'/001.php';
echo <<<HTML

<!-- BODY TEXT START -->
<h4>Who we are?</h4>
<p>John Smith Inc.</p>
<h4>What we collect about you</h4>
<p>IP, location, maybe some cookies?</p>
<h4>How long will the data be stored?</h4>
<p>Forever.</p>
<h4>What rights do you have to the data recorded here</h4>
<p>All!</p>
<!-- BODY TEXT END -->

HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
