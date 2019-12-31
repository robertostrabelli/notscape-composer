<?php
defined('rodape') or die ("Erro" . htmlentities($Erro2, ENT_QUOTES, "utf-8"));
$Erro2 = 'Erro';
$conteudor1 = '
</div>
<footer class="metapost">
<p class="momento"><small><time datetime="' . htmlentities($datapub, ENT_QUOTES, "utf-8") . '" itemprop="datePublished">' . htmlentities($datapub, ENT_QUOTES, "utf-8") . '</time>
<meta itemprop="dateModified" content="' . htmlentities($datamod, ENT_QUOTES, "utf-8") . '">
<meta itemprop="description" content="' . htmlentities($pgDescricao, ENT_QUOTES, "utf-8") . '">
<span role="separator">|</span>
<span itemprop="author" itemscope itemtype="https://schema.org/Person">
<a rel="author" itemprop="url" href="' . htmlentities($AutorPostBio, ENT_QUOTES, "utf-8") . '" title="View author biography"><span itemprop="name">' . htmlentities($AutorPost, ENT_QUOTES, "utf-8") . '</span></a>
<meta itemprop="jobTitle" content="' . htmlentities($AutorPostJob, ENT_QUOTES, "utf-8") . '">
<meta itemprop="worksFor" content="' . htmlentities($AutorPostCompany, ENT_QUOTES, "utf-8") . '">
</span>
<span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<meta itemprop="name" content="' . htmlentities($PublisherSite, ENT_QUOTES, "utf-8") . '">
<span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="android-chrome-512x512.png">
<meta itemprop="width" content="512">
<meta itemprop="height" content="512">
</span>
</span>
<span role="separator">|</span>
Tags: <span itemprop="keywords">';

echo html_entity_decode($conteudor1, ENT_HTML5, "utf-8");

$pgChaves = explode(',', $pgChaves);
foreach($pgChaves as $link) { // if the site was installed in a directory and not in the domain or subdomain root, put the folder name like this /mysite/ between ' and " signs in the line below after $EnderecoSite
echo '<span class="palavrachave"><a rel="category tag" href="https://www.qwant.com/?q='.htmlentities($link, ENT_QUOTES, "utf-8").'+site:' . htmlentities($EnderecoSite, ENT_QUOTES, "utf-8") . '" title="tag search" target="_blank">'.htmlentities($link, ENT_QUOTES, "utf-8").'</a></span>';
}

$conteudor3 = '
</span>
</small></p>
</footer>
<span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="android-chrome-512x512.png">
<meta itemprop="width" content="512">
<meta itemprop="height" content="512">
</span>
</article>
</section>
</main>
<footer class="roda">
<p><a href="#top">[Top]</a></p>
' . htmlentities($FooterInfo, ENT_HTML5, "utf-8") . '
<p><small><a href="https://validator.w3.org/checklink?uri=' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . '" rel="nofollow" title="W3C Validator link test">W3C Link Check</a> <a href="https://validator.w3.org/unicorn/check?ucn_uri=' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . '" rel="nofollow" title="W3C Validator test">W3C Validator</a> <a href="https://github.com/robertostrabelli/notscape-composer" target="_blank" title="Github project">Github</a></small></p>
</footer>
</body>
</html>
';
echo html_entity_decode($conteudor3, ENT_HTML5, "utf-8");
?>
