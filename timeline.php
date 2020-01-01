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

// PAGE TYPE - "timeline" ONLY FOR POSTS LIST. "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "timeline";

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "All Posts";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$pgChaves = "posts,timeline,texts,list";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "This is a list of all blog posts";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE - NOT NECESSARY HERE
$AutorPostBio = "about.php";

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "boss";

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-03T16:49:05-03:00";

require_once __DIR__.'/001.php';

$conteudot1 = '<table class="timeline"><thead><tr><td>Article</td><td>Year Month Day</td></tr></thead>';
echo html_entity_decode($conteudot1, ENT_HTML5);

foreach(array_reverse(glob('2*.php')) as $NomedoArquivo) {
$divisao = explode('.', $NomedoArquivo);
$parte = explode('_', $divisao[0]);
$titulo = $parte[1];
$data = $parte[0];
$titulo = str_replace('-',' ',$titulo);
$data = str_replace('-',' ',$data);
$conteudot2 = '<tr><td><a href='. htmlentities($NomedoArquivo, ENT_QUOTES, "utf-8") . '>' . htmlentities($titulo, ENT_QUOTES, "utf-8") . '</a></td><td>' . htmlentities($data, ENT_QUOTES, "utf-8") . '</td></tr>';
echo html_entity_decode($conteudot2, ENT_HTML5);
 }
$conteudot3 = '<tfoot><tr><td>Tip: You can place a link here pointing to a zip archive with old posts if the list gets too long. Or delete it</td><td>ARCHIVE.ZIP</td></tr></tfoot></table>';

echo html_entity_decode($conteudot3, ENT_HTML5);
define('rodape', true);
require_once __DIR__.'/003.php';?>
