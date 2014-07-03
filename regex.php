<?php

if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
	$regex = $_POST['regex'];
	$content = $_POST['content'];
	preg_match_all($regex, $content, $matches);
	$res = print_r($matches, true);
}

$regex = htmlentities($regex);
$content = htmlentities($content);
$res = htmlentities($res);

echo <<<END_OF_HTML
<html>
<body>
<form action="" method="post">
	<div><input name="regex" value="$regex" placeholder="Regular expression..." style="width: 100%"></div>
	<div><textarea rows="20" name="content" style="width: 100%" placeholder="Content...">$content</textarea></div>
	<div style="background-color: #efefef; min-height:10em">$res</div>
</form>
</body>
</html>
END_OF_HTML;
