<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,follow"; 
$pgRoboGoogle="";

$pgModelo="textofixo"; // PAGE TYPE - textofixo FOR PRIVACY PAGE

$pgTitulo="Privacy policy of this site"; 

$pgChaves="privacy, data, policy, cookies";

$pgDescricao="how we do about privacy"; 

$AutorPost="John";

$AutorPostBio="about.php"; - NOT MANDATORY

$AutorPostJob="boss";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-03T16:49:05-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<h4>Who we are?</h4>
<p>John Smith Inc.</p>
<h4>What we collect about you</h4>
<p>IP, location, maybe some cookies?</p>
<h4>How long will the data be stored?</h4>
<p>Forever.</p>
<h4>What rights do you have to the data recorded here</h4>
<p>...</p>


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
