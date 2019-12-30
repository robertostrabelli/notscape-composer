<?php
define('cabeca', true);
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "noindex,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = "";

// PAGE TYPE - "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "textofixo";

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "Privacy policy of this site";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$pgChaves = "privacy,data,policy,cookies";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "how we do about privacy";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$AutorPostBio = "about.php"; // NOT MANDATORY

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "boss";

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-03T16:49:05-03:00";

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
