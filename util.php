<?php
function playerhead($name, $size) {
	echo '<img src="https://minotar.net/helm/' . $name . '/' . $size . '.png"/>';
}
function player($name, $desc, $blank = false, $nameOverride = "", $imageSize = 32) {
	echo '<tr><td>';
	if($blank) {
		echo '<img src="/censored.png"/>';
	} else {
		playerhead($name, $imageSize);
	}
	echo '</td><td><span style="font-size: 16pt; font-weight: bold;">' . ($nameOverride != "" ? $nameOverride : $name) . '</span> ' . $desc . '</td></tr>';
}
function linkbtn($pagename, $text) {
	echo '<a class="linkbtn" href="?p=' . $pagename . '">' . $text . '</a>';
}
?>
