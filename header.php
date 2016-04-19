<?php
function siteheader() {
	global $pageTitle;
	global $pageDesc;
	global $baumVersion;
	global $baumTitle;
	global $baumHTMLTitle;
	global $baumDescription; ?>
<html>
	<head>
		<title><?php if(isset($pageTitle)) echo $pageTitle . " - "; echo $baumTitle; ?></title>
		<meta name="description" content="<?php
if (!isset($pageDesc)) {
	echo $pageDesc;
} else {
	echo $baumDescription;
}?>"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="user.css"/>
	</head>
	<body>
		<div id="header">
			<span style="font-size: 18pt;"><?php if(isset($baumHTMLTitle)) echo $baumHTMLTitle; else echo $baumTitle; ?></span><br/>
			<?php if(file_exists("links.php")) include "links.php"; ?>
		</div>
		<div id="content">
<?php }

function sitefooter() {
	global $baumVersion; ?>
		</div>
		<div id="footer">
			BAUM <?php echo $baumVersion; ?>
		</div>
	</body>
</html><?php
}
?>
