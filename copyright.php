<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
$PageRating = "General";
$RobotsParameters = "noindex,follow";
$GoogleBotDirectives = "";
$PageTemplate = "pagina";
$PageTitle = "Copyright";
$PageKeywords = "copyright,license,rights";
$PageDescription = "User license";
$PageAuthor = "John";
$PageAuthorBio = "about.php";
$PageAuthorJob = "Boss";
$PageAuthorCompany = "JS Inc.";
$DatePub = "2019-12-03T16:49:05-03:00";
$Comments="off";
$ShowMeta="off";
require_once __DIR__.'/001.php';
echo <<<HTML

<!-- BODY TEXT START -->
<p><strong><em>Attention to my rules:</em></strong></p>
<p>Plagiarism is not cool</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna etiam tempor orci eu lobortis. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Tincidunt dui ut ornare lectus sit amet est placerat in. Tortor id aliquet lectus proin nibh nisl condimentum id venenatis. Quis ipsum suspendisse ultrices gravida dictum fusce ut placerat. Imperdiet proin fermentum leo vel orci. Amet consectetur adipiscing elit ut aliquam. Mauris augue neque gravida in fermentum. Porttitor leo a diam sollicitudin tempor id eu.</p>
<p>Massa eget egestas purus viverra accumsan in nisl. Eu non diam phasellus vestibulum. A condimentum vitae sapien pellentesque habitant. Dolor sit amet consectetur adipiscing elit. Sem fringilla ut morbi tincidunt augue interdum velit euismod in. Sit amet mauris commodo quis imperdiet. Lorem ipsum dolor sit amet consectetur adipiscing. Tincidunt arcu non sodales neque sodales ut etiam sit. Donec et odio pellentesque diam volutpat commodo sed egestas. Neque ornare aenean euismod elementum nisi quis eleifend. Ut eu sem integer vitae justo eget magna fermentum iaculis. Ultricies mi eget mauris pharetra et ultrices. Ac turpis egestas maecenas pharetra convallis posuere. Bibendum enim facilisis gravida neque convallis a. Penatibus et magnis dis parturient montes nascetur ridiculus mus mauris.</p>
<!-- BODY TEXT END -->

HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
