// SEARCH INTERNAL SITE PROVIDE BY QWANT.COM - you may change it if dont work for you. See readme.md for instructions.

// SCRIPT -  PUT THE WHOLE URL SITE (WITH SUBDIRECTORY IF IT IS CASE) ON LINE 9 RIGHT AFTER site: WITHOUT HTTP OR WWW

function encodeHTML(s) {
return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}
function addSiteSearch() {
document.getElementById('query').value = encodeHTML(document.getElementById('query').value) + " site:MYAWSOMESITE.COM";
}
