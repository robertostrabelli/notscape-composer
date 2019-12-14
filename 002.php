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
// <li><a itemprop='url' href='index.php'>home</a></li>
// <li><a itemprop='url' href='timeline.php'>timeline</a></li>
// <li><a itemprop='url' href='portfolio.php'>portfolio</a></li>
// <li><a itemprop='url' href='copyright.php'>copyright</a></li>
// <li><a itemprop='url' href='search.php'>search</a></li>
// <li><a itemprop='url' href='privacy.php'>privacy</a></li>
// <li><a itemprop='url' href='follow.php'>follow me</a></li>
// <li><a itemprop='url' href='about.php'>about</a></li>


$MeuMenu = "
<li><a itemprop='url' href='index.php'>home</a></li>
<li><a itemprop='url' href='timeline.php'>timeline</a></li>
<li><a itemprop='url' href='portfolio.php'>portfolio</a></li>
<li><a itemprop='url' href='copyright.php'>copyright</a></li>
<li><a itemprop='url' href='search.php'>search</a></li>
<li><a itemprop='url' href='privacy.php'>privacy</a></li>
<li><a itemprop='url' href='follow.php'>follow me</a></li>
<li><a itemprop='url' href='about.php'>about</a></li>
";

// ====== FOOTER INFO
// inside p tag
$FooterInfo = "<small>2019 &#x24B8; John Smith <a href='copyright.php'>All rights reserved</a></small>";

?>
