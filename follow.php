<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,follow";
$pgRoboGoogle="";

$pgModelo="textofixo"; // PAGE TYPE - textofixo FOR FOLLOW PAGE

$pgTitulo="Sign my newsletter";

$pgChaves="newsletter, feed, rss";

$pgDescricao="be advice about news from me";

$AutorPost="John";

$AutorPostBio="about.php";

$AutorPostJob="boss";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-03T16:49:05-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<h5>Ops!</h5>
<p>My blog have no automatic feed/rss, please sign my newsletter or follow me on Mastodon: @john_the_dude</p>



'); ?><?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
