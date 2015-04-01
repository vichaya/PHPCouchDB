<?php
	if(!empty($_POST['usname']) && !empty($_POST['uspassword'])){
		$usname = $_POST['usname'];
		$uspassword = $_POST['uspassword'];
		if(strcmp($usname, 'ANZ') != 0 && strcmp($uspassword, '1234') != 0){
			header("Location: http://www.khunwang.com/TestPHP/login.php?s=1");
			die();
		}else{

			/*
			 * A real quick example to get and update a doc.
			 */
			/*
			require_once('./src/Sag.php');
			$sag = new Sag('127.0.0.1', '5984');

			// Select the database that holds our blog's data.
			$sag->setDatabase('phptest');
			$customer = array(
					'firstname' => 'Branko',
					'lastname' => 'Ajzele',
					'username' => 'ajzele',
					'email' => 'branko.ajzele@example.com',
					'pass' => md5('myPass123')
				);
				 
				$payload = json_encode($customer);
			echo '<pre>';
			print_r($sag->getAllDocs()->body);
			$allDocs = $sag->getAllDocs()->body;
			print_r($sag->get($allDocs->rows[0]->id));
			print_r($sag->getAllDocs()->body->rows[0]->value->rev);
			echo '</pre>';
			//$sag->put("k1",$customer);
			
			try {
			  //Get a blog post (a StdClass)...
			  $post = $sag->get('postID')->body;

			  //...update its info...
			  $post->views++;

			  //..and send it back to the couch.
			  if(!$sag->put($post->_id, $post)->body->ok) {
			    error_log('Unable to log a view to CouchDB.');
			  }
			} 
			catch(SagCouchException $e) {
			  //The requested post doesn't exist - oh no!
			  if($e->getCode() == "404") {
			    $e = new Exception("That post doesn't exist.");
			  }

			  throw $e;
			}
			catch(SagException $e) {
			  //We sent something to Sag that it didn't expect.
			  error_log('Programmer error: '.$e->getMessage());
			}	
			*/
		}
	}

?>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<div><a href='showData.php'>Show Data in couchDB</a></div>
<div><a href='createAPI.php'>Show Data in couchDB</a></div>
</body>
</html>