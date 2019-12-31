<?php
define('cabeca', true);
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// CONTENT RATING
// Safe For Kids               -CONTENT FOR CHILDREN ONLY
// 14 Years                    -FOR MINIMUM AGE
// General                     -FOR EVERYBODY
// Mature                      -ADULTS ONLY
// Restricted
// RTA-5042-1996-1400-1577-RTA -RESTRICTED TO ADULTS
$Classifica = "General";

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "noindex,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = "";

// PAGE TYPE - "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "textofixo"; // PAGE TYPE - textofixo FOR FOLLOW PAGE

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "Sign up my newsletter";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$pgChaves = "newsletter,feed,rss";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "be advice about news from me";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$AutorPostBio = "about.php";

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "boss";

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-03T16:49:05-03:00";

require_once __DIR__.'/001.php';
echo <<<HTML


<!-- BODY TEXT START -->
<h5>Ops!</h5>
<p>My blog have no feed/rss, please sign my newsletter or follow me on Mastodon: @john_the_blog_dude</p>
<!-- BODY TEXT END -->


HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
