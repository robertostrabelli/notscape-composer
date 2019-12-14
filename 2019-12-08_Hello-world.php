<?php
define('cabeca', TRUE); 
define('configura', TRUE); 
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "index,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = ""; 

// PAGE TYPE - "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "texto";

// POST TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "Hello World!"; 

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE
$pgChaves = "first, post, awsome, blog"; 

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "This is my first post on my new blog"; 

// POST AUTHOR'S NAME
$AutorPost = "John"; 

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$AutorPostBio = "about.php"; 

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "Boss"; 

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc."; 

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-08T00:01:00-03:00"; 

require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<p>Hi, my name is John Smith and this is my first post on my new awesome personal blog.</p>
<img src="assets/img/2019/sample.png" alt="error test" />
<p>Don&apos;t worry, everything will be fine if you use <code>& a p o s ;</code> for apostrophe character!</p>


'); ?><?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
