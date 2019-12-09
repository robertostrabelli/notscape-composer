<?php

// GENERAL CONFIG

$AutorSite="John Smith"; // OWNER, ORGANIZATION OR UNIQUE SITE'S AUTHOR NAME

$PublisherSite="Smith Inc."; // ORGANIZATION NAME OR SAME AS ABOVE

$TituloSite="JS Inc. site"; // SITE NAME

$DescricaoSite="Our site is awesome!"; // VERY SHORT SITE DESCRIPTION

$Direitos="2019 (C) John Smith"; // SHORT COPYRIGHT OR COPYLEFT ADVICE

$IdiomaSite="en-us"; // LANGUAGE (SAMPLE: PT, PT-BR, EN, EN-US)

$CharsetSite="utf-8"; // BE CAREFULL, CHANGE ONLY IF NECESSARY - DEFAULT utf-8

$EnderecoSite="https://johnsmithincsite.com"; // ONLY URL BASE ( EXAMPLE: http://johnsmithincsite.com or http://john.jsinc.com )

$Classifica="general"; // SITE RATING
// general  - FOR EVERYBODY
// XX years - FOR SPECIFIC AGE
// mature - FOR +18 YEARS

$GeradorSite="Notscape Composer 1.0"; // NO POURPOSE, JUST FOR FUN. LEAVE IT, CHANGE OR DELETE


// BROWSER AND SERVER CACHE

$NavegadorCache="no-cache";
// cache site access files
    // public: for all same browser users.
    // private: only for the actual user.
    // no-cache: no cache the site files.
    // no-store: cache only for one session.


$Revisit="10 days"; // TIME FOR REBUILD SERVER PROXY CACHE


// MENU CONFIG

// Default:
// <li><a itemprop='url' href='index.php'>home</a></li>
// <li><a itemprop='url' href='timeline.php'>timeline</a></li>
// <li><a itemprop='url' href='portfolio.php'>portfolio</a></li>
// <li><a itemprop='url' href='copyright.php'>copyright</a></li>
// <li><a itemprop='url' href='search.php'>search</a></li>
// <li><a itemprop='url' href='privacy.php'>privacy</a></li>
// <li><a itemprop='url' href='follow.php'>follow me</a></li>
//<li><a itemprop='url' href='about.php'>about</a></li>


$MeuMenu="
<li><a itemprop='url' href='index.php'>home</a></li>
<li><a itemprop='url' href='timeline.php'>timeline</a></li>
<li><a itemprop='url' href='portfolio.php'>portfolio</a></li>
<li><a itemprop='url' href='copyright.php'>copyright</a></li>
<li><a itemprop='url' href='search.php'>search</a></li>
<li><a itemprop='url' href='privacy.php'>privacy</a></li>
<li><a itemprop='url' href='follow.php'>follow me</a></li>
<li><a itemprop='url' href='about.php'>about</a></li>
";

// FOOTER INFO
// inside p tag
$FooterInfo="
<small>2019 (c) John Smith <a href='copyright.php'>All rights reserved</a></small>
";

 ?>
