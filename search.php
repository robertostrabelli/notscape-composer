<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "noindex,nofollow";
$GoogleBotDirectives = "";
$PageTemplate = "entrada";
$PageTitle = "Do a search";
$PageKeywords = "search";
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
<script src="assets/js/search.js"></script>
<form method="GET" action="https://www.qwant.com" id="form" onsubmit="addSiteSearch()">
<input type="text" name="q" id="query" size="31" minlength="3" maxlength="40" value="" aria-label="Search through site content" required>
<input type="hidden" name="l" value="en">
<input type="submit" name="btnG" value="Go!">
</form>
<p><small>Powered by <a href="https://www.qwant.com" target="_blank">Qwant</a></small></p>
<!-- BODY TEXT END -->

HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
