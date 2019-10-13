<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo '<h3>Successfully logged in</h1>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/testlogin.css" rel="stylesheet">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
	</head>
	<body>

			<div class="container-fluid">
		<div class="second">
			<div class="inside">
				
						<table class="table1">
<tr>
<td><h2>Write Something</h2></td>
</tr>
</text></legend></br>

                      <form action="home.php" method="post">
                          		 <tr>
	<td><label for="uname">Write - </label></td> 
								 <td>
									 <input class="uname" name="updatepost" placeholder="&#xf089  Update Post" id="username" type="text">
									</td>
									</tr>
                           <td>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="token_to_be_added"/>
					        </div>
                         </td>
							<tr>	
	<td><button class="login" type="submit" value="updatepost">Update</button></td>
	<td><button class="cancel" type="reset">Reset</button></td>
</form>	
</tr>

</table>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body> 
</html>
