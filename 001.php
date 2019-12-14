<?php defined('cabeca') or die(' '); defined('configura') or die(' '); require ('002.php'); echo('<!doctype html>
<html lang="'. $IdiomaSite . '">
<head>
<meta charset="'. $CharsetSite . '">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . $pgTitulo . ' | ' . $TituloSite . '</title>
<link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />
<link rel="stylesheet" href="assets/css/estilos.css" type="text/css" />
<link rel="stylesheet" href="assets/css/mystyle.css" type="text/css" />
<meta name="keywords" content="' . $pgChaves . '">
<meta name="description" content="' . $pgDescricao . '">
<meta name="robots" content="' . $pgRobos . '">
<meta name="googlebot" content="' . $pgRoboGoogle . '">
<link rel="canonical" href="' . $EnderecoSite . $canonico . '" />
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<meta name="revisit-after" content="'. $Revisit . '">
<meta name="author" content="' . $AutorSite . '">
<meta name="copyright" content="' . $Direitos . '">
<meta name="generator" content="' . $GeradorSite . '">
<meta http-equiv="pragma" content="' . $NavegadorCache . '">
<meta http-equiv="cache-control" content="' . $NavegadorCache . '">
<meta name="rating" content="' . $Classifica . '">
</head>
<body itemscope itemtype="https://schema.org/WebPage" class="' . $pgModelo . '">
<meta itemprop="accessibilityControl" content="fullKeyboardControl">
<meta itemprop="accessibilityControl" content="fullMouseControl">
<meta itemprop="accessibilityHazard" content="noFlashingHazard">
<meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
<meta itemprop="accessibilityHazard" content="noSoundHazard">
<meta itemprop="accessibilityAPI" content="ARIA">
<header id="top" itemscope itemtype="https://schema.org/Organization">
<div class="tit">
<h1 itemprop="name"><a rel="home" itemprop="url" href="index.php">' . $TituloSite . '</a></h1>
<meta itemprop="logo" content="android-chrome-512x512.png">
<p>' . $DescricaoSite . '</p>
</div>
</header>
<nav aria-label="Navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<ul>
' . $MeuMenu . '
</ul>
</nav>
<main aria-label="Main content" itemscope itemtype="https://schema.org/Blog">
<section>
<article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
<meta itemprop="mainEntityOfPage" content="' . $EnderecoSite . $canonico . '">
<header><h2 itemprop="name headline">' . $pgTitulo . '</h2>
</header>
<div itemprop="articleBody">
'); ?>
