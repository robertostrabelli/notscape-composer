<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,follow";
$pgRoboGoogle="";

$pgModelo="timeline"; // PAGE TYPE - "timeline" for blog posts list

$pgTitulo="TITLE OF MY POSTS LIST";

$pgChaves="posts, timeline, texts, list";

$pgDescricao="THIS IS A LIST OF ALL MY BLOG POSTS";

$AutorPost="John";

$AutorPostBio="about.php";

$AutorPostJob="boss";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-03T16:49:05-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('

<p>NOT RECOMMENDED PUT ANY ADDICTIONAL TEXT HERE - DELETE THIS LINE</p>

<table class="timeline">
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
<?php echo ('
<tfoot><tr><td>ONLY USE THIS IF YOU NEED OR LEAVE IT BLANK</td><td>SAME HERE</td></tr></tfood>
</table>

<p>NOT RECOMMENDED PUT ANYTHING HERE - DELETE THIS LINE</p>

'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
