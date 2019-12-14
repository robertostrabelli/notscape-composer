<?php
define('cabeca', TRUE); 
define('configura', TRUE); 
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "noindex,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = "";

// PAGE TYPE - "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "textofixo"; 

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "Copyright";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE
$pgChaves = "copyright, license use";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "How you can use this content";

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

require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<p><strong><em>Attention to my rules:</em></strong></p>
<p>Plagiarism is not cool</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna etiam tempor orci eu lobortis. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Tincidunt dui ut ornare lectus sit amet est placerat in. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Imperdiet proin fermentum leo vel orci. Amet consectetur adipiscing elit ut aliquam. Mauris augue neque gravida in fermentum. Porttitor leo a diam sollicitudin tempor id eu.</p>
<p>Massa eget egestas purus viverra accumsan in nisl. Eu non diam phasellus vestibulum. A condimentum vitae sapien pellentesque habitant. Dolor sit amet consectetur adipiscing elit. Sem fringilla ut morbi tincidunt augue interdum velit euismod in. Sit amet mauris commodo quis imperdiet. Lorem ipsum dolor sit amet consectetur adipiscing. Tincidunt arcu non sodales neque sodales ut etiam sit. Donec et odio pellentesque diam volutpat commodo sed egestas. Neque ornare aenean euismod elementum nisi quis eleifend. Ut eu sem integer vitae justo eget magna fermentum iaculis. Ultricies mi eget mauris pharetra et ultrices. Ac turpis egestas maecenas pharetra convallis posuere. Bibendum enim facilisis gravida neque convallis a. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris.</p>


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
