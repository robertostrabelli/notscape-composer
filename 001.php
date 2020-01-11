<?php
$AuthorSite = "John Smith"; // Company, organization or unique author
$PublisherSite = "Smith Inc."; // Organization name or same as above
$TitleSite = "JS Inc. site"; // Site name
$TaglineSite = "Our site is awesome!"; // Very short site description
$CopyrightSite = "2019 (C) John Smith"; // Short copyright advice
$LangSite = "en-us"; // Language (pt, pt-br, en, en-us)
$UrlSite = "http://johnsmithincsite.com"; // URL base only (without directory if exist)

$Menu = '
<li><a itemprop="url" href="index.php">Home</a></li>
<li><a itemprop="url" href="timeline.php">Timeline</a></li>
<li><a itemprop="url" href="portfolio.php">Portfolio</a></li>
<li><a itemprop="url" href="copyright.php">Copyright</a></li>
<li><a itemprop="url" href="search.php">Search</a></li>
<li><a itemprop="url" href="privacy.php">Privacy</a></li>
<li><a itemprop="url" href="follow.php">Follow us</a></li>
<li><a itemprop="url" href="about.php">About</a></li>
';

$ComTelegram = "CODEHERE"; // Comments Telegram app - Folow instructions in https://comments.app/ - Comments for websites - Connect website - Remember to use the full address website

$FooterInfo = '
<p><small>2019 &#x24B8; John Smith <a href="copyright.php">All rights reserved</a></small></p>
';

$Estilo = "default.css"; // Desgin style CSS Options: default.css - dark-default.css - minimal.css

// ========= STOP CONFIG CUSTOMIZATION HERE

defined('cabeca') or die ("Erro" . htmlentities($Erro1, ENT_QUOTES, "utf-8"));
$Erro1 = 'Erro';
$conteudo1 = '<!doctype html>
<html lang="' . htmlentities($LangSite, ENT_QUOTES, "utf-8") . '">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . htmlentities($PageTitle, ENT_QUOTES, "utf-8") . ' &bull; ' . htmlentities($TitleSite, ENT_QUOTES, "utf-8") . '</title>
<link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="assets/css/' . htmlentities($Estilo, ENT_QUOTES, "utf-8") . '" type="text/css" />
<link rel="stylesheet" href="assets/css/mystyle.css" type="text/css" />
<meta name="keywords" content="' . htmlentities($PageKeywords, ENT_QUOTES, "utf-8") . '">
<meta name="description" content="' . htmlentities($PageDescription, ENT_QUOTES, "utf-8") . '">
<meta name="robots" content="' . htmlentities($RobotsParameters, ENT_QUOTES, "utf-8") . '">
<meta name="googlebot" content="' . htmlentities($GoogleBotDirectives, ENT_QUOTES, "utf-8") . '">
<link rel="canonical" href="' . htmlentities($UrlSite, ENT_QUOTES, "utf-8") . htmlentities($Uri, ENT_QUOTES, "utf-8") . '" />
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
<link rel="manifest" href="site.webmanifest" />
<meta name="author" content="' . htmlentities($AuthorSite, ENT_QUOTES, "utf-8") . '">
<meta name="copyright" content="' . htmlentities($CopyrightSite, ENT_QUOTES, "utf-8") . '">
<meta name="rating" content="' . htmlentities($PageRating, ENT_QUOTES, "utf-8") . '">
</head>
<body itemscope itemtype="https://schema.org/WebPage" class="' . htmlentities($PageTemplate, ENT_QUOTES, "utf-8") . '">
<meta itemprop="accessibilityControl" content="fullKeyboardControl">
<meta itemprop="accessibilityControl" content="fullMouseControl">
<meta itemprop="accessibilityHazard" content="noFlashingHazard">
<meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
<meta itemprop="accessibilityHazard" content="noSoundHazard">
<meta itemprop="accessibilityAPI" content="ARIA">
<header id="top" itemscope itemtype="https://schema.org/Organization">
<div class="tit">
<h1 itemprop="name"><a rel="home" itemprop="url" href="index.php">' . htmlentities($TitleSite, ENT_QUOTES, "utf-8") . '</a></h1>
<meta itemprop="logo" content="android-chrome-512x512.png">
<p>' . htmlentities($TaglineSite, ENT_QUOTES, "utf-8") . '</p>
</div>
</header>
<nav aria-label="Navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<ul>
' . htmlentities($Menu, ENT_HTML5, "utf-8") . '
</ul>
</nav>
<main aria-label="Main content" itemscope itemtype="https://schema.org/Blog">
<section>
<h6 style="display:none;visibility:hidden;">' . htmlentities($PageTitle, ENT_QUOTES, "utf-8") . '</h6>
<article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
<meta itemprop="mainEntityOfPage" content="' . htmlentities($UrlSite, ENT_QUOTES, "utf-8") . htmlentities($Uri, ENT_QUOTES, "utf-8") . '">
<header><h2 itemprop="name headline">' . htmlentities($PageTitle, ENT_QUOTES, "utf-8") . '</h2>
</header>
<div itemprop="articleBody">
';
echo html_entity_decode($conteudo1, ENT_HTML5, "utf-8");
?>
