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
	 <form class="form-signin"  action="checkLogin.php" method="post" ng-app="myApp"  ng-controller="formCtrl" name="myForm">
        <h2 class="form-signin-heading">Please Login</h2>
		<?php
			if(!empty($_GET['s']))
			{
				if($_GET['s'] == 1){
					echo '<span style="color:red" >Username or Password are invalid!</span>';
				}
			}
		?>
        <div width="20%">
        <label for="inputEmail" class="sr-only">User Name</label>
        <input type="text" name="usname" ng-model="usname" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
         <span style="color:red" ng-show="myForm.usname.$dirty">
  		<span ng-show="myForm.usname.$error.required">Username is required.</span>
  		</span>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="uspassword" ng-model="uspassword" id="inputPassword" class="form-control" placeholder="Password" required>
         <span style="color:red" ng-show="myForm.uspassword.$dirty">
  		<span ng-show="myForm.uspassword.$error.required">Passward is required.</span>
  		</span>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div>
        	
      </form>
	</div> <!-- containner -->
	<div>Our data</div>
    <pre>
</pre>
<?php

//echo  "Name = ".$db;
?>
<script>
var app = angular.module('myApp', []);
app.controller('formCtrl', function($scope) {
});
</script>
</body>
</html>
