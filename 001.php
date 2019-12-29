<?php

// ======== GENERAL CONFIG

// NAME OF COMPANY, ORGANIZATION OR UNIQUE AUTHOR
$AutorSite = "John Smith";

// ORGANIZATION NAME - OR SAME AS ABOVE
$PublisherSite = "Smith Inc.";

// SITE NAME
$TituloSite = "JS Inc. site";

// VERY SHORT SITE DESCRIPTION
$DescricaoSite = "Our site is awesome!";

// SHORT COPYRIGHT ADVICE
$Direitos = "2019 (C) John Smith";

// LANGUAGE (SAMPLE: pt, pt-br, en, en-us)
$IdiomaSite = "en-us";

// BE CAREFULL, CHANGE ONLY IF NECESSARY - DEFAULT utf-8
$CharsetSite = "utf-8";

// ONLY URL BASE ( EXAMPLE: http://johnsmithincsite.com or http://john.jsinc.com )
$EnderecoSite = "https://johnsmithincsite.com";

// CONTENT SITE RATING
// general FOR EVERYBODY, XX years FOR SPECIFIC AGE, mature FOR +18 YEARS
$Classifica = "general";

// GENERATOR - NO POURPOSE, JUST FOR FUN. LEAVE IT, CHANGE OR LEAVE IN BLANK
$GeradorSite = "Notscape Composer 1.0";


// ====== BROWSER AND SERVER CACHE

// CACHE SITE ACCESS FILES
// public: for all same browser users.
// private: only for the actual user.
// no-cache: no cache the site files.
// no-store: cache only for one session.
$NavegadorCache = "no-cache";

// TIME FOR REBUILD SERVER PROXY CACHE
$Revisit = "10 days";

// ======= MENU CONFIG

// Default:
// <li><a itemprop="url" href="index.php">home</a></li>
// <li><a itemprop="url" href="timeline.php">timeline</a></li>
// <li><a itemprop="url" href="portfolio.php">portfolio</a></li>
// <li><a itemprop="url" href="copyright.php">copyright</a></li>
// <li><a itemprop="url" href="search.php">search</a></li>
// <li><a itemprop="url" href="privacy.php">privacy</a></li>
// <li><a itemprop="url" href="follow.php">follow me</a></li>
// <li><a itemprop="url" href="about.php">about</a></li>


$MeuMenu = '
<li><a itemprop="url" href="index.php">home</a></li>
<li><a itemprop="url" href="timeline.php">timeline</a></li>
<li><a itemprop="url" href="portfolio.php">portfolio</a></li>
<li><a itemprop="url" href="copyright.php">copyright</a></li>
<li><a itemprop="url" href="search.php">search</a></li>
<li><a itemprop="url" href="privacy.php">privacy</a></li>
<li><a itemprop="url" href="follow.php">follow me</a></li>
<li><a itemprop="url" href="about.php">about</a></li>
';

// ====== FOOTER INFO
// content inside p tag is recommended
$FooterInfo = "<p><small>2019 &#x24B8; John Smith <a href='copyright.php'>All rights reserved</a></small></p>";

// STOP CUSTOMIZATION HERE

defined('cabeca') or die ("Erro" . htmlentities($Erro1, ENT_QUOTES, "utf-8"));
$Erro1 = 'Erro';
$conteudo1 = '<!doctype html>
<html lang="'. htmlentities($IdiomaSite, ENT_QUOTES, "utf-8") . '">
<head>
<meta charset="'. htmlentities($CharsetSite, ENT_QUOTES, "utf-8") . '">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . htmlentities($pgTitulo, ENT_QUOTES, "utf-8") . ' | ' . htmlentities($TituloSite, ENT_QUOTES, "utf-8") . '</title>
<link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="assets/css/estilos.css" type="text/css" />
<link rel="stylesheet" href="assets/css/mystyle.css" type="text/css" />
<meta name="keywords" content="' . htmlentities($pgChaves, ENT_QUOTES, "utf-8") . '">
<meta name="description" content="' . htmlentities($pgDescricao, ENT_QUOTES, "utf-8") . '">
<meta name="robots" content="' . htmlentities($pgRobos, ENT_QUOTES, "utf-8") . '">
<meta name="googlebot" content="' . htmlentities($pgRoboGoogle, ENT_QUOTES, "utf-8") . '">
<link rel="canonical" href="' . htmlentities($EnderecoSite, ENT_QUOTES, "utf-8") . htmlentities($canonico, ENT_QUOTES, "utf-8") . '" />
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<meta name="revisit-after" content="'. htmlentities($Revisit, ENT_QUOTES, "utf-8") . '">
<meta name="author" content="' . htmlentities($AutorSite, ENT_QUOTES, "utf-8") . '">
<meta name="copyright" content="' . htmlentities($Direitos, ENT_QUOTES, "utf-8") . '">
<meta name="generator" content="' . htmlentities($GeradorSite, ENT_QUOTES, "utf-8") . '">
<meta http-equiv="pragma" content="' . htmlentities($NavegadorCache, ENT_QUOTES, "utf-8") . '">
<meta http-equiv="cache-control" content="' . htmlentities($NavegadorCache, ENT_QUOTES, "utf-8") . '">
<meta name="rating" content="' . htmlentities($Classifica, ENT_QUOTES, "utf-8") . '">
</head>
<body itemscope itemtype="https://schema.org/WebPage" class="' . htmlentities($pgModelo, ENT_QUOTES, "utf-8") . '">
<meta itemprop="accessibilityControl" content="fullKeyboardControl">
<meta itemprop="accessibilityControl" content="fullMouseControl">
<meta itemprop="accessibilityHazard" content="noFlashingHazard">
<meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
<meta itemprop="accessibilityHazard" content="noSoundHazard">
<meta itemprop="accessibilityAPI" content="ARIA">
<header id="top" itemscope itemtype="https://schema.org/Organization">
<div class="tit">
<h1 itemprop="name"><a rel="home" itemprop="url" href="index.php">' . htmlentities($TituloSite, ENT_QUOTES, "utf-8") . '</a></h1>
<meta itemprop="logo" content="android-chrome-512x512.png">
<p>' . htmlentities($DescricaoSite, ENT_QUOTES, "utf-8") . '</p>
</div>
</header>
<nav aria-label="Navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<ul>
' . htmlentities($MeuMenu, ENT_HTML5, "utf-8") . '
</ul>
</nav>
<main aria-label="Main content" itemscope itemtype="https://schema.org/Blog">
<section>
<article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
<meta itemprop="mainEntityOfPage" content="' . htmlentities($EnderecoSite, ENT_QUOTES, "utf-8") . htmlentities($canonico, ENT_QUOTES, "utf-8") . '">
<header><h2 itemprop="name headline">' . htmlentities($pgTitulo, ENT_QUOTES, "utf-8") . '</h2>
</header>
<div itemprop="articleBody">
';

echo html_entity_decode($conteudo1, ENT_HTML5, "utf-8");
?>
