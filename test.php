<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=yes, minimum-scale=1.0">
		<title>And your phone number is...</title>
		<style>
			body {
				font: 17px sans-serif;
				color: #444;
				margin: 20px;
			}
			
		</style>
	</head>
	<body>
<?php
$headers = apache_request_headers();        
foreach ($headers as $header => $value) {
 echo "<pre>";
 echo "$header : $value";
 echo "</pre>";
}
?>
