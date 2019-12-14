<?php
define('cabeca', TRUE); 
define('configura', TRUE); 
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "noindex,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = "";

// PAGE TYPE - "timeline" ONLY FOR POSTS LIST. "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "timeline";

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "All Posts";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE
$pgChaves = "posts, timeline, texts, list";

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

require ('001.php'); ?>
<?php // CONTENT START  ?>

<?php // DONT MESS WITH THIS ?>

<?php echo ('<table class="timeline">
<thead><tr><td>Article</td><td>YEAR-MONTH-DAY</td></tr></thead>'); ?>
<?php
foreach(array_reverse(glob('2*.php')) as $NomedoArquivo) {
    $divisao = explode('.', $NomedoArquivo);
    $parte = explode('_', $divisao[0]);
    $titulo = $parte[1];
    $data = $parte[0];
    echo "<tr><td><a href='$NomedoArquivo'>" . $titulo . "</a></td><td>" . $data . "</td></tr>";
 }
?>
<?php echo ('<tfoot><tr><td>Tip: You can place a link here pointing to a zip archive with old posts if the list gets too long. Or delete it</td><td>ARCHIVE.ZIP</td></tr></tfood>
</table>'); ?>


<?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
