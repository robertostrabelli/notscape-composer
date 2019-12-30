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
$pgTitulo = "About";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$pgChaves = "about,info,contact";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "About me and my awesome tiny blog.";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE - NOT NECESSARY ON about.php
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
<h3>This is about me!</h3>
<p>My bio here.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna etiam tempor orci eu lobortis. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Tincidunt dui ut ornare lectus sit amet est placerat in. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Imperdiet proin fermentum leo vel orci. Amet consectetur adipiscing elit ut aliquam. Mauris augue neque gravida in fermentum. Porttitor leo a diam sollicitudin tempor id eu.</p>
<p>Massa eget egestas purus viverra accumsan in nisl. Eu non diam phasellus vestibulum. A condimentum vitae sapien pellentesque habitant. Dolor sit amet consectetur adipiscing elit. Sem fringilla ut morbi tincidunt augue interdum velit euismod in. Sit amet mauris commodo quis imperdiet. Lorem ipsum dolor sit amet consectetur adipiscing. Tincidunt arcu non sodales neque sodales ut etiam sit. Donec et odio pellentesque diam volutpat commodo sed egestas. Neque ornare aenean euismod elementum nisi quis eleifend. Ut eu sem integer vitae justo eget magna fermentum iaculis. Ultricies mi eget mauris pharetra et ultrices. Ac turpis egestas maecenas pharetra convallis posuere. Bibendum enim facilisis gravida neque convallis a. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris.</p>
<!-- BODY TEXT END -->


HTML;
define('rodape', true);
require_once __DIR__.'/003.php'; ?>
