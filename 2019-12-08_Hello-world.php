<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="index,follow"; // SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRoboGoogle=""; // INSTRUCTION ONLY FOR GOOGLEBOT

$pgModelo="texto"; // PAGE TYPE - "texto" for regular post with author info on footer, "textofixo" for pages without footer

$pgTitulo="Hello World!"; // POST TITLE - recommended to use same as filename

$pgChaves="first, post, awsome, blog"; // META TAGS

$pgDescricao="This is my first post on my new blog"; // SUMMARY OR DESCRIPTION

$AutorPost="John Smith"; // POST AUTHOR'S NAME

$AutorPostBio="about.php"; // AUTHOR BIO PAGE

$AutorPostJob="Boss"; // AUTHOR'S JOB - NOT MANDATORY

$AutorPostCompany="Strabelli.com"; // AUTHOR'S COMPANY - NOT MANDATORY

$datapub="2019-12-03T00:00:00-03:00"; // PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-03:00


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<p>Hi, my name is John Smith and this is my first post on my new awesome personal blog.</p>

<img src="assets/img/2019/sample.png" alt="error test" />

<p>Don&apos;t worry, everything will be fine if you use <code>& a p o s ;</code> for apostrophe character!</p>


'); ?><?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
