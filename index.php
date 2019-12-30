<?php
define('cabeca', true);
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "index,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY - NOT MANDATORY
$pgRoboGoogle = "";

// PAGE TYPE - "entrada" FOR INDEX WITHOUT ANY FOOTER, "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "entrada";

// TITLE - WELCOME TITLE
$pgTitulo = "Welcome to my site!";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$pgChaves = "blog,news,personal";

// GENERAL SITE SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "John Smith personal blog";

// COMPANY OR AUTHOR'S SITE NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE - NOT MANDATORY NOT SHOWN IN INDEX
$AutorPostBio = "about.php";

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "Boss";

// AUTHOR'S COMPANY - NOT MANDATORY OR SAME AS THE BLOG
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-03T21:50:00-03:00";

require_once __DIR__.'/001.php';

$conteudo = '

<h6><i>Hi!</i></h6>
<p>Welcome to my site. Here I regularly post some thoughts and even cake recipes.</p>

';

echo html_entity_decode($conteudo, ENT_HTML5);
define('rodape', true);
require_once __DIR__.'/003.php';?>
