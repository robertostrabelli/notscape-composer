<?php
define('cabeca', TRUE); define('configura', TRUE); $canonico = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());


$pgRobos="noindex,nofollow"; 
$pgRoboGoogle="";

$pgModelo="entrada"; // PAGE TYPE - RECOMMENDED "entrada" FOR SEARCH PAGE

$pgTitulo="DO A SEARCH IN MY BLOG";

$pgChaves="search";

$pgDescricao="";

$AutorPost="John";

$AutorPostBio="about.php"; // NOT MANDATORY

$AutorPostJob="chefe";

$AutorPostCompany="JS Inc.";

$datapub="2019-12-03T16:49:05-03:00";


require ('001.php'); ?>
<?php // CONTENT START  ?>

<!-- SEARCH INTERNAL SITE PROVIDE BY QWANT.COM - you may change if dont work for you -->

<!-- SEARCH ENGINE SCRIPT -->
<script type="text/javascript">
function encodeHTML(s) {
return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}
function addSiteSearch() {
document.getElementById('query').value = encodeHTML(document.getElementById('query').value) + " site:MYAWSOMESITE.COM";
}
</script>

<!-- SEARCH ENGINE FORM -->
<?php echo ('

<p>PUT SOME EXPLANATION HERE OR DELETE THIS LINE</p>

<form method="GET" action="https://www.qwant.com" id="form" onsubmit="addSiteSearch()">
<div align="left">
<table bgcolor="#FFFFFF">
 <tbody>
 <tr>
 <td>
<a href="https://www.qwant.com"> <img src="https://www.qwant.com/img/logo/q-48.png" border="0" alt="Qwant" align="absmiddle"></a>
<input type="text" name="q" id="query" size="31" maxlength="255" value="">
<input type="hidden" name="l" value="fr">
<input type="submit" name="btnG" value="go">
</td>
</tr>
</tbody>
</table>
</div>
</form>

'); ?>

<?php // CONTENT END  ?>
<?php define('rodape', TRUE); require ('003.php'); ?>
