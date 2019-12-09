<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="index,follow"; // SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRoboGoogle=""; // INSTRUCTION ONLY FOR GOOGLEBOT - NOT MANDATORY

$pgModelo="entrada"; // PAGE TYPE - "entrada" for index.php

$pgTitulo="Welcome to my site!"; // WELCOME TITLE

$pgChaves="blog, news, personal"; // GENERAL SITE META TAGS

$pgDescricao="John Smith personal blog"; // GENERAL SITE DESCRIPTION

$AutorPost="John"; // PAGE AUTHOR'S NAME

$AutorPostBio="about.php"; // PAGE AUTHOR BIO - NOT MANDATORY NOT SHOWN

$AutorPostJob="Boss"; // PAGE AUTHOR'S JOB

$AutorPostCompany="JS Inc."; // PAGE AUTHOR'S COMPANY - NOT MANDATORY OR SAME AS THE BLOG

$datapub="2019-12-03T21:50:00-03:00"; // PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-03:00


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<h6><i>Hi!</i></h6>
<p>Welcome to my site. Here I regularly post some thoughts and even cake recipes.</p>


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
