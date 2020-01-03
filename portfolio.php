<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "noindex,follow";
$GoogleBotDirectives = "";
$PageTemplate = "pagina";
$PageTitle = "Portfolio";
$PageKeywords = "portfolio";
$PageDescription = "";
$PageAuthor = "John";
$PageAuthorBio = "about.php";
$PageAuthorJob = "Boss";
$PageAuthorCompany = "JS Inc.";
$DatePub = "2019-12-07T08:20:00-03:00";
$Comments="off";
$ShowMeta="off";
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
