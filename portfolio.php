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


<p>SAMPLE CONTENT</p>

<div class="tabportifolio">
  <div class="tabportifolioimg">IMAGE HERE - LINKED IF YOU WANT</div>
  <div class="tabportifoliodes"><h5>One of my jobs</h5><h6>2007 - 2009</h6>
  <p>description</p>
  </div>
</div>

<hr />

<div class="tabportifolio">
  <div class="tabportifolioimg">IMAGE HERE - LINKED IF YOU WANT</div>
  <div class="tabportifoliodes"><h5>Another of my jobs</h5><h6>2008 - 2010</h6>
  <p>description</p>
  </div>
</div>


'); ?> <?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
