<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,follow";
$pgRoboGoogle="";

$pgModelo="textofixo"; // PAGE TYPE - "textofixo" FOR COPYRIGHT PAGE

$pgTitulo="Copyright";

$pgChaves="copyright, use license";

$pgDescricao="USE LICENSE FOR MY MATERIAL";

$AutorPost="John";

$AutorPostBio="about.php";

$AutorPostJob="boss";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-03T16:49:05-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<p><strong><em>Attention to my rules:</em></strong></p>

<p>Plagiarism is not cool</p>


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
