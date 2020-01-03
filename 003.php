<?php
defined('rodape') or die ("Erro" . htmlentities($Erro2, ENT_QUOTES, "utf-8"));
$Erro2 = 'Erro';
$conteudor1 = '
</div>
<footer class="metapost">
<p class="momento' . htmlentities($ShowMeta, ENT_QUOTES, "utf-8") . '"><small><time datetime="' . htmlentities($DatePub, ENT_QUOTES, "utf-8") . '" itemprop="datePublished">' . htmlentities($DatePub, ENT_QUOTES, "utf-8") . '</time>
<meta itemprop="dateModified" content="' . htmlentities($datamod, ENT_QUOTES, "utf-8") . '">
<meta itemprop="description" content="' . htmlentities($PageDescription, ENT_QUOTES, "utf-8") . '">
<span role="separator">&bull;</span>
<span itemprop="author" itemscope itemtype="https://schema.org/Person">
<a rel="author" itemprop="url" href="' . htmlentities($PageAuthorBio, ENT_QUOTES, "utf-8") . '" title="View author biography"><span itemprop="name">' . htmlentities($PageAuthor, ENT_QUOTES, "utf-8") . '</span></a>
<meta itemprop="jobTitle" content="' . htmlentities($PageAuthorJob, ENT_QUOTES, "utf-8") . '">
<meta itemprop="worksFor" content="' . htmlentities($PageAuthorCompany, ENT_QUOTES, "utf-8") . '">
</span>
<span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<meta itemprop="name" content="' . htmlentities($PublisherSite, ENT_QUOTES, "utf-8") . '">
<span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="android-chrome-512x512.png">
<meta itemprop="width" content="512">
<meta itemprop="height" content="512">
</span>
</span>
<span role="separator">&bull;</span>
Tags: <span itemprop="keywords">';
echo html_entity_decode($conteudor1, ENT_HTML5, "utf-8");
$PageKeywords = explode(',', $PageKeywords);
foreach($PageKeywords as $link) { // if the site was installed in a directory and not in the domain or subdomain root, put the folder name like this /mysite/ between ' and " signs in the line below after $UrlSite
echo '<span class="palavrachave"><a rel="category tag" href="https://www.qwant.com/?q='.htmlentities($link, ENT_QUOTES, "utf-8").'+site:' . htmlentities($UrlSite, ENT_QUOTES, "utf-8") . '" title="tag search" target="_blank">'.htmlentities($link, ENT_QUOTES, "utf-8").'</a></span>';
}
$conteudor3 = '
</span>
</small></p>
<span class="comentarios' . htmlentities($Comments, ENT_QUOTES, "utf-8") . '"><small>Comments:</small><br />
<script async src="https://comments.app/js/widget.js?2" data-comments-app-website="' . htmlentities($ComTelegram, ENT_QUOTES, "utf-8") . '" data-limit="5" data-color="CA9C0E" data-dislikes="1"></script></span>
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
</footer>
</body>
</html>
';
echo html_entity_decode($conteudor3, ENT_HTML5, "utf-8");
?>
