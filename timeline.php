<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "noindex,follow";
$GoogleBotDirectives = "";
$PageTemplate = "timeline";
$PageTitle = "All posts";
$PageKeywords = "posts,timeline,texts,list";
$PageDescription = "";
$PageAuthor = "John";
$PageAuthorBio = "about.php";
$PageAuthorJob = "Boss";
$PageAuthorCompany = "JS Inc.";
$DatePub = "2019-12-03T16:49:05-03:00";
$Comments="off";
$ShowMeta="off";
$Image="android-chrome-512x512.png";
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
$conteudot2 = '<tr><td><a href="'. htmlentities($NomedoArquivo, ENT_QUOTES, "utf-8") . '">' . htmlentities($titulo, ENT_QUOTES, "utf-8") . '</a></td><td>' . htmlentities($data, ENT_QUOTES, "utf-8") . '</td></tr>';
echo html_entity_decode($conteudot2, ENT_HTML5);
 }
$conteudot3 = '<tfoot><tr><td>Tip: You can place a link here pointing to a zip archive with old posts if the list gets too long. Or delete it</td><td>ARCHIVE.ZIP</td></tr></tfoot></table>';

echo html_entity_decode($conteudot3, ENT_HTML5);
define('rodape', true);
require_once __DIR__.'/003.php';?>
