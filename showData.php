<?php
	require_once('./src/Sag.php');
	$sag = new Sag('127.0.0.1', '5984');

	// Select the database that holds our blog's data.
	$sag->setDatabase('phptest');
	$allDocs = $sag->getAllDocs()->body;
	$totalData = $allDocs->total_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecosystem PHP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--  <link rel="stylesheet" href="style.css" />  -->
	<link rel="stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container" >
	<?php 
		for($i=0;$i<$totalData;$i++){
	?>
		<pre>
			<?php print_r(json_encode($sag->get($allDocs->rows[$i]->id)->body)); ?>
		</pre>
	<?php } ?>
	</div>
</body>
</html>