<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="back.css">
	<title>My lovely title</title>
</head>
<body>
	<h1>Hello Kitty Url</h1>
           <form id="checkFile" action="/" method="POST">
                <input type="text" name="addr" value="">
		<button type="submit" class="button">Check URL</button>
           </form>
     <br>
<?php
    $cURL = curl_init();
    curl_setopt($cURL, CURLOPT_PROTOCOLS,  CURLPROTO_HTTP);
    curl_setopt($cURL, CURLOPT_URL, $_POST['addr']);
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($cURL);
    curl_close($cURL);
    echo $data;
?>
</body>
</html>
