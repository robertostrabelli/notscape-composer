<?php
define('cabeca', true);
$canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());

// CONTENT RATING
// Safe For Kids               -CONTENT FOR CHILDREN ONLY
// 14 Years                    -FOR MINIMUM AGE
// General                     -FOR EVERYBODY
// Mature                      -ADULTS ONLY
// Restricted
// RTA-5042-1996-1400-1577-RTA -RESTRICTED TO ADULTS
$Classifica = "General";

// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$pgRobos = "noindex,follow";

// INSTRUCTION FOR GOOGLEBOT ONLY
$pgRoboGoogle = "";

// PAGE TYPE - "texto" FOR REGULAR POSTS WITH AUTHOR INFO FOOTER, "textofixo" FOR PAGES WITHOUT FOOTER
$pgModelo = "textofixo";

// TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$pgTitulo = "Portfolio";

// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$pgChaves = "portfolio";

// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$pgDescricao = "works I doing";

// PAGE AUTHOR'S NAME
$AutorPost = "John";

// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$AutorPostBio = "about.php";

// AUTHOR'S JOB - NOT MANDATORY
$AutorPostJob = "boss";

// AUTHOR'S COMPANY - NOT MANDATORY
$AutorPostCompany = "JS Inc.";

// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$datapub = "2019-12-07T08:20:00-03:00";

require_once __DIR__.'/001.php';
echo <<<HTML


<!-- BODY TEXT START -->
<p>Sample portfolio content with css class table</p>

<div class="tabport">
<div class="tabport-txt"><h5>One of my jobs</h5><h6>2007 - 2009</h6>
<p>You can use this format style for your portfolio or make your own css.</p>
</div>
<div class="tabport-img">
<figure><img src="assets/img/2019/sample.jpg" alt="Image sample" /><figcaption>http://mrg.bz/f44d4a</figcaption></figure>
</div>
</div>
<div class="tabport">
<div class="tabport-txt"><h5>Another one of my jobs</h5><h6>2010 - 2011</h6>
<p>The base code is:</p>
<pre><small><code>
&lt;div class="tabport"&gt;
&lt;div class="tabport-txt"&gt;
TEXT HERE
&lt;/div&gt;
&lt;div class="tabport-img"&gt;
IMAGE HERE
&lt;/div&gt;
&lt;/div&gt;
</code></small></pre>
</div>
<div class="tabport-img">
<figure><img src="assets/img/2019/sample.jpg" alt="Image sample" /><figcaption>http://mrg.bz/f44d4a</figcaption></figure>
</div>
</div>
<!-- BODY TEXT END -->


HTML;
define('rodape', true);
require_once __DIR__.'/003.php'; ?>
