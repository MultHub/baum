<?php $baumVersion = "3.141592";
if(!file_exists("config.php")) {
	$baumTitle = "Unconfigured";
	$baumDescription = "";
	$_GET["p"] = "unconfigured";
} else include "config.php";
include "util.php";
include "header.php";
if(!array_key_exists("p", $_GET)) $_GET["p"] = "home";
if(!file_exists("pages/" . $_GET["p"] . ".php")) {
	if($_GET["p"] == "unconfigured") {
		$pageTitle = "Unconfigured baum!";
		function pagebody() {
			global $pageTitle; ?>
			<h1 align="center"><?php echo $pageTitle; ?></h1>
			<h2>config.php</h2><pre>
&lt;?php
$baumTitle = "...";
$baumHTMLTitle = "..."; // use if you need colors in the header
$baumDescription = "...";
</pre><h2>Any page (pages/&lt;page&gt;.php, 404.php)</h2><pre>
&lt;?php
$pageTitle = "..."; // optional
$pageDesc  = "..."; // optional, only used in &lt;meta&gt;
function pagebody() { ?&gt;
... HTML here ...
&lt;?php } ?&gt;
</pre><h2>Link bar (links.php)</h2><pre>
&lt;?php
linkbtn("pagename", "display name");
// ...
?&gt;
</pre>
		<?php }
	} else if(!file_exists("404.php")) {
		$pageTitle = "404 Not Found";
		$pageDesc  = "NOTICE: add a 404.php using the same format as regular pages";
		function pagebody() {
			global $pageTitle;
			global $pageDesc;
			echo "<h1 align=\"center\">$pageTitle;</h1><h2 align=\"center\">$pageDesc;</h2>";
		}
	} else include "404.php";
} else {
	include "pages/" . $_GET["p"] . ".php";
}
siteheader();
pagebody();
sitefooter();
?>
