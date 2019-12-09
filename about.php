<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,follow"; 
$pgRoboGoogle="";

$pgModelo="textofixo"; // PAGE TYPE - "textofixo" for pages (no footer), "texto" for posts (footer with author name, tags and date)

$pgTitulo="About"; 

$pgChaves="about, info, contact"; 

$pgDescricao="About me and my blog";

$AutorPost="John";

$AutorPostBio="about.php"; // NOT MANDATORY AND NOt RECOMMENDED IN UNIQUE AUTHOR'S BLOG

$AutorPostJob="boss";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-03T16:49:05-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<h3>This is about me!</h3>
<p>My bio here.</p>


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
