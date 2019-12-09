<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,follow";
$pgRoboGoogle="";

$pgModelo="textofixo"; // PAGE TYPE - textofixo FOR PORTFOLIO

$pgTitulo="Portfolio";

$pgChaves="portfolio";

$pgDescricao="works I doing";

$AutorPost="John";

$AutorPostBio="about.php";

$AutorPostJob="boss";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-07T08:20:00-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?><?php echo ('


<p>Sample portfolio content with css class table</p>

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


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
