<?php
define('cabeca', true);
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "noindex,nofollow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = "";

// PAGE TYPE - RECOMMENDED "entrada" FOR SEARCH PAGE. "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "entrada";

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "DO A SEARCH IN MY BLOG";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE
$pgChaves = "search";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE - NOT NECESSARY HERE
$AutorPostBio = "about.php";

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "Boss";

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-03T16:49:05-03:00";

require_once __DIR__.'/001.php';

$conteudo = '

<script src="assets/js/search.js"></script>
<form method="GET" action="https://www.qwant.com" id="form" onsubmit="addSiteSearch()">
<input type="text" name="q" id="query" size="31" minlength="3" maxlength="40" value="" aria-label="Search through site content" required>
<input type="hidden" name="l" value="pt">
<input type="submit" name="btnG" value="Go!">
</form>
<p><small>Powered by <a href="https://www.qwant.com" target="_blank">Qwant</a></small></p>

';

echo html_entity_decode($conteudo, ENT_HTML5);
define('rodape', true);
require_once __DIR__.'/003.php';?>
