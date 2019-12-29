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
$pgTitulo = "Portfolio";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE
$pgChaves = "portfolio";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "works I doing";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$AutorPostBio = "about.php";

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "boss";

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-07T08:20:00-03:00";

require_once __DIR__.'/001.php';

$conteudo = '

<p>Sample portfolio content with css class table</p>
<hr />
<div class="tabportifolio">
<div class="tabportifolioimg"><img src="assets/img/2019/sample-trees.jpg" alt="Trees" /></div>
<div class="tabportifoliodes"><h5>One of my jobs</h5><h6>2007 - 2009</h6>
<p>You can use this format style for your portfolio or make your own css.</p>
</div>
</div>
<hr />
<div class="tabportifolio">
<div class="tabportifolioimg"><img src="assets/img/2019/sample-trees.jpg" alt="Trees" /></div>
<div class="tabportifoliodes"><h5>Another one of my jobs</h5><h6>2010 - 2011</h6>
<p>You can use this format style for your portfolio or make your own css.</p>
</div>
</div>
<hr />

';

echo html_entity_decode($conteudo, ENT_HTML5);
define('rodape', true);
require_once __DIR__.'/003.php'; ?>
