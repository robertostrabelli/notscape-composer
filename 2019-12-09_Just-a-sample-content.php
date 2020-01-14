<?php
define('cabeca', true);
$Uri = ($_SERVER['REQUEST_URI']);
$datamod = date ("c", getlastmod());
// CONTENT RATING
// Safe For Kids               -CONTENT FOR CHILDREN ONLY
// 14 Years                    -FOR MINIMUM AGE
// General                     -FOR EVERYBODY
// Mature                      -ADULTS ONLY
// Restricted
// RTA-5042-1996-1400-1577-RTA -RESTRICTED TO ADULTS
$PageRating = "General";
// SEARCH BOTS INSTRUCTION - SEE https://developers.google.com/search/reference/robots_meta_tag#directives_1
$RobotsParameters = "index,follow";
// INSTRUCTION FOR GOOGLEBOT ONLY
$GoogleBotDirectives = "";
// PAGE TEMPLATE - "post" FOR REGULAR POSTS WITH META INFO FOOTER, "pagina" FOR PAGES WITHOUT FOOTER
$PageTemplate = "post";
// POST TITLE - RECOMMENDED TO USE SAME OR SIMILAR AS FILENAME
$PageTitle="Just a sample content";
// META TAGS - 3 OR 4 STRONG KEYWORDS WILL SUFFICE - NO SPACE BETWEEN WORDS
$PageKeywords="sample,content,post";
// SUMMARY OR DESCRIPTION - IT IS RECOMMENDED TO USE A SHORT PHRASE
$PageDescription="This is my second post on my new blog and it is just sample content.";
// POST AUTHOR'S NAME
$PageAuthor="John";
// AUTHOR BIO PAGE - USE ABOUT.PHP FOR UNIQUE AUTHOR SITE
$PageAuthorBio="about.php";
// AUTHOR'S JOB - NOT MANDATORY
$PageAuthorJob="Boss";
// AUTHOR'S COMPANY - NOT MANDATORY
$PageAuthorCompany="JS Inc.";
// PUB DATE - MANDATORY IN THIS FORMAT 2019-12-31T23:59:59-01:00 - SEE README.MD FOR INSTRUCTIONS
$DatePub="2019-12-09T00:02:00-01:00";
// SHOW COMMENTS - on OR off
$Comments="off";
// SHOW META DATA (AUTHOR, DATE, TAGS) - on OR off
$ShowMeta="on";
// FEATURED IMAGE (IF NONE, LEAVE DEFAULT (LOGO ICON) OR BLANK

$Image="android-chrome-512x512.png";


require_once __DIR__.'/001.php';
echo <<<HTML
<!-- BODY TEXT START -->

<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<p>A paragraph (from the Greek paragraphos, “to write beside” or “written beside”) is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
<blockquote>
<p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.</p>
<p>It is typically distinguished visually using indentation and a different typeface or smaller size quotation. It may or may not include a citation, usually placed at the bottom.</p>
<cite><a href="#!">Said no one, ever.</a></cite>
</blockquote>
<dl>
<dt>Definition List Title</dt>
<dd>This is a definition list division.</dd>
</dl>
<ol>
<li>List Item 1</li>
<li>List Item 2</li>
<li>List Item 3</li>
</ol>
<ul>
<li>List Item 1</li>
<li>List Item 2</li>
<li>List Item 3</li>
</ul>

<p>Horizontal rules</p>
<hr>
<table>
<caption>Table Caption</caption>
<thead>
<tr>
<th>Table Heading 1</th>
<th>Table Heading 2</th>
<th>Table Heading 3</th>
<th>Table Heading 4</th>
<th>Table Heading 5</th>
</tr>
</thead>
<tbody>
<tr>
<td>Table Cell 1</td>
<td>Table Cell 2</td>
<td>Table Cell 3</td>
<td>Table Cell 4</td>
<td>Table Cell 5</td>
</tr>
<tr>
<td>Table Cell 1</td>
<td>Table Cell 2</td>
<td>Table Cell 3</td>
<td>Table Cell 4</td>
<td>Table Cell 5</td>
</tr>
<tr>
<td>Table Cell 1</td>
<td>Table Cell 2</td>
<td>Table Cell 3</td>
<td>Table Cell 4</td>
<td>Table Cell 5</td>
</tr>
<tr>
<td>Table Cell 1</td>
<td>Table Cell 2</td>
<td>Table Cell 3</td>
<td>Table Cell 4</td>
<td>Table Cell 5</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Table Footer 1</th>
<th>Table Footer 2</th>
<th>Table Footer 3</th>
<th>Table Footer 4</th>
<th>Table Footer 5</th>
</tr>
</tfoot>
</table>
<p><strong>Keyboard input:</strong> <kbd>Cmd</kbd></p>
<p><strong>Inline code:</strong> <code>&lt;div&gt;code&lt;/div&gt;</code></p>
<p><strong>Sample output:</strong> <samp>This is sample output from a computer program.</samp></p>
<h2>Pre-formatted text</h2>
<pre>P R E F O R M A T T E D T E X T
! " # $ % &amp; &apos; ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~ </pre>
<p><a href="#!">This is a text link</a>.</p>
<p><strong>Strong is used to indicate strong importance.</strong></p>
<p><em>This text has added emphasis.</em></p>
<p>The <b>b element</b> is stylistically different text from normal text, without any special importance.</p>
<p>The <i>i element</i> is text that is offset from the normal text.</p>
<p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>
<p><del>This text is deleted</del> and <ins>This text is inserted</ins>.</p>
<p><s>This text has a strikethrough</s>.</p>
<p>Superscript<sup>®</sup>.</p>
<p>Subscript for things like H<sub>2</sub>O.</p>
<p><small>This small text is small for for fine print, etc.</small></p>
<p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>
<p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation.</q></p>
<p><cite>This is a citation.</cite></p>
<p>The <dfn>dfn element</dfn> indicates a definition.</p>
<p>The <mark>mark element</mark> indicates a highlight.</p>
<p>The <var>variable element</var>, such as <var>x</var> = <var>y</var>.</p>
<p>The time element: <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time></p>
<p>There is comment here: <!--This comment should not be displayed--></p>
<p>There is a comment spanning multiple tags and lines below here.</p>
<!--<p><a href="#!">This is a text link. But it should not be displayed in a comment</a>.</p>
<p><strong>Strong is used to indicate strong importance. But, it should not be displayed in a comment</strong></p>
<p><em>This text has added emphasis. But, it should not be displayed in a comment</em></p>-->
<h3>Image with no <code>&lt;figure&gt;</code> element</h3>
<p><img src="http://placekitten.com/480/480" alt="Image alt text"></p>
<h3>Image wrapped in a <code>&lt;figure&gt;</code> element, no <code>&lt;figcaption&gt;</code></h3>
<figure><img src="http://placekitten.com/420/420" alt="Image alt text"></figure>
<h3>Image wrapped in a <code>&lt;figure&gt;</code> element, with a <code>&lt;figcaption&gt;</code></h3>
<figure>
<img src="http://placekitten.com/420/420" alt="Image alt text">
<figcaption>Here is a caption for this image.</figcaption>
</figure>
<h2>Audio</h2>
<audio controls="">audio</audio>
<h2>Video</h2>
<video controls="">video</video>
<h2>Canvas</h2>
<canvas>canvas</canvas>
<h2>Meter</h2>
<meter value="2" min="0" max="10">2 out of 10</meter>
<h2>Progress</h2>
<progress>progress</progress>
<h2>Inline SVG</h2>
<svg width="100px" height="100px"><circle cx="100" cy="100" r="100" fill="#1fa3ec"></circle></svg>
<h2>IFrame</h2>
<iframe src="indextest.html" height="300"></iframe>
<form>
<fieldset id="forms__input">
<legend>Input fields</legend>
<p>
<label for="input__text">Text Input</label>
<input id="input__text" type="text" placeholder="Text Input">
</p>
<p>
<label for="input__password">Password</label>
<input id="input__password" type="password" placeholder="Type your Password">
</p>
<p>
<label for="input__webaddress">Web Address</label>
<input id="input__webaddress" type="url" placeholder="http://yoursite.com">
</p>
<p>
<label for="input__emailaddress">Email Address</label>
<input id="input__emailaddress" type="email" placeholder="name@email.com">
</p>
<p>
<label for="input__phone">Phone Number</label>
<input id="input__phone" type="tel" placeholder="(999) 999-9999">
</p>
<p>
<label for="input__search">Search</label>
<input id="input__search" type="search" placeholder="Enter Search Term">
</p>
<p>
<label for="input__text2">Number Input</label>
<input id="input__text2" type="number" placeholder="Enter a Number">
</p>
<p>
<label for="input__text3" class="error">Error</label>
<input id="input__text3" class="is-error" type="text" placeholder="Text Input">
</p>
<p>
<label for="input__text4" class="valid">Valid</label>
<input id="input__text4" class="is-valid" type="text" placeholder="Text Input">
</p>
</fieldset>
<fieldset id="forms__select">
<legend>Select menus</legend>
<p>
<label for="select">Select</label>
<select id="select">
<optgroup label="Option Group">
<option>Option One</option>
<option>Option Two</option>
<option>Option Three</option>
</optgroup>
</select>
</p>
</fieldset>
<fieldset id="forms__checkbox">
<legend>Checkboxes</legend>
<ul class="list list--bare">
<li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
<li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
<li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
</ul>
</fieldset>
<fieldset id="forms__radio">
<legend>Radio buttons</legend>
<ul class="list list--bare">
<li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
<li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
<li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
</ul>
</fieldset>
<fieldset id="forms__textareas">
<legend>Textareas</legend>
<p>
<label for="textarea">Textarea</label>
<textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
</p>
</fieldset>
<fieldset id="forms__html5">
<legend>HTML5 inputs</legend>
<p>
<label for="ic">Color input</label>
<input type="color" id="ic" value="#000000">
</p>
<p>
<label for="in">Number input</label>
<input type="number" id="in" min="0" max="10" value="5">
</p>
<p>
<label for="ir">Range input</label>
<input type="range" id="ir" value="10">
</p>
<p>
<label for="idd">Date input</label>
<input type="date" id="idd" value="1970-01-01">
</p>
<p>
<label for="idm">Month input</label>
<input type="month" id="idm" value="1970-01">
</p>
<p>
<label for="idw">Week input</label>
<input type="week" id="idw" value="1970-W01">
</p>
<p>
<label for="idt">Datetime input</label>
<input type="datetime" id="idt" value="2019-12-09T00:02:00-01:00">
</p>
<p>
<label for="idtl">Datetime-local input</label>
<input type="datetime-local" id="idtl" value="2019-12-09T00:02:00-01:00">
</p>
</fieldset>
<fieldset id="forms__action">
<legend>Action buttons</legend>
<p>
<input type="submit" value="<input type=submit>">
<input type="button" value="<input type=button>">
<input type="reset" value="<input type=reset>">
<input type="submit" value="<input disabled>" disabled>
</p>
<p>
<button type="submit">&lt;button type=submit&gt;</button>
<button type="button">&lt;button type=button&gt;</button>
<button type="reset">&lt;button type=reset&gt;</button>
<button type="button" disabled>&lt;button disabled&gt;</button>
</p>
</fieldset>
</form>
<p>Made by <a href="https://github.com/cbracco/html5-test-page" target="_blank">@cbracco</a></p>

<!-- BODY TEXT END -->
HTML;
define('rodape', true);
require_once __DIR__.'/003.php';?>
