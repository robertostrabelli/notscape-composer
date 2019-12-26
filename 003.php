<?php defined('rodape') or die(' ');
echo('
</div>
<footer class="metapost">
<p class="momento"><small><time datetime="' . $datapub . '" itemprop="datePublished">' . $datapub . '</time>
<meta itemprop="dateModified" content="' . $datamod . '">
<meta itemprop="description" content="' . $pgDescricao . '">
<span role="separator">|</span>
<span itemprop="author" itemscope itemtype="https://schema.org/Person">
<a rel="author" itemprop="url" href="' . $AutorPostBio . '" title="View author biography"><span itemprop="name">' . $AutorPost . '</span></a>
<meta itemprop="jobTitle" content="' . $AutorPostJob . '">
<meta itemprop="worksFor" content="' . $AutorPostCompany . '">
</span>
<span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<meta itemprop="name" content="' . $PublisherSite . '">
<span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
<meta itemprop="url" content="android-chrome-512x512.png">
<meta itemprop="width" content="512">
<meta itemprop="height" content="512">
</span>
</span>
<span role="separator">|</span>
Tags: <span itemprop="keywords">'); ?>
<?php // divisao palavras chave ?>
<?php $pgChaves = explode(',', $pgChaves);
foreach($pgChaves as $link) { // if the site was installed in a directory and not in the domain or subdomain root, put the folder name like this /mysite/ after ' sign in the line below right after $EnderecoSite
echo '<a rel="category tag" href="https://www.qwant.com/?q='.$link.'+site:' . $EnderecoSite . '" title="tag search" target="_blank">'.$link.'</a>';
}?>
<?php // divisao palavras chave ?>
<?php
echo('</span>
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
' . $FooterInfo . '
</footer>
</body>
</html>
'); ?>
