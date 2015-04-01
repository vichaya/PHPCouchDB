<?php

require_once('./src/Sag.php');

date_default_timezone_set('Australia/Melbourne');
$dt = new DateTime();
$target_dir = "tmps/";
$target_file = $target_dir.$dt->getTimestamp();
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$allowed =  array('csv');
	$filename = $_FILES['fileToUpload']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$allowed) ) {
	    echo 'error';
	}else{
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
			if (($handle = fopen($target_file, "r")) !== FALSE) {
				//Create Connection to CouchDB
				$sag = new Sag('127.0.0.1', '5984');

				// Select the database that holds our blog's data.
				$sag->setDatabase('phptest');
				$counter = $sag->getAllDocs()->body->total_rows;
				//Create Header of column 1st line
				$key = explode(',',fgets($handle));
				while(!feof($handle)) {
					  //Create data array
					  $data = explode(',',fgets($handle));
					  //Create an array by using one array for keys and another for its value
					  $anzdata = array_combine($key, $data);
					  $sag->put('anz'.($counter++),$anzdata);
					}
				/*
					$headTable = fgetcsv($handle,100, ",");
				    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				        $num = count($data);
				        echo "<p> $num fields in line $row: <br /></p>\n";
				        $row++;
				        for ($c=0; $c < $num; $c++) {
				            echo $data[$c] . "<br />\n";
				        }
				    }
				    fclose($handle);
				
				*/
			}
			echo 'upload successfully.';
			if(unlink($target_file)){
				echo 'File is deleted';
			}else{
				echo 'Can not delete file';
			}
		}
	}
	
}
?>