
<!doctype html>
<html>
	<head>
		<title>HTML5 Form With Server Side Validation</title>
	</head>
	<body>
		<?php
			//Variables for error Messages
			$errName=$errEmail=$errDegree="";
			
			//take the form data
			if(isset($_POST['submit'])){
				
				//declare variables for from controls data
				$name=$gender=$email=$degree="";
				
				//Clear the Form data from injections/attacks
				$name=check_input($_POST['txtName']);
				$gender=check_input($_POST['rdGender']);
				$email=check_input($_POST['txtEmail']);
				$degree=check_input($_POST['slDegree']);
				
				//validate the data
				if(empty($name) || !preg_match("/^[a-zA-Z ]*$/",$name)){
					$errName="Please Enter the Name";
				}
				if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){ //if email is not empty then validate the email
						$errEmail="Please Enter Valid Email";
				}
			
				if($degree=="--select--"){
					
					$errDegree="Please Select the Degree";
				}
			}
			
			function check_input($value){
				$value=trim($value); //remove the unwanted spaces
				$value=stripslashes($value); //remove the slashes
				$value=htmlspecialchars($value); //convert tags into special character format like from  < tag to < 
				return $value;
			}
		?>
		<h1>Student Form</h1>
		<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
			Name*:<input type="text" name="txtName" required maxlength="15" />
			<p style="color:red"><?php echo $errName;?></p>
			Gender*:<input type="radio" value="Male" name="rdGender" checked /> Male
				    <input type="radio" value="FeMale" name="rdGender" /> Female
			<br /><br />
			Email:<input type="email" name="txtEmail" />
			<p style="color:red"><?php echo $errEmail;?></p>
			Degree:<select name="slDegree">
						<option value="--select--">----Select----</option>
						<option value="BSIT">BSIT</option>
						<option value="BSCS">BSCS</option>
						<option value="MIT">MIT</option>
						<option value="MS">MS.IT/CS</option>
						<option value="PHD">PHD</option>
					</select>
			<p style="color:red"><?php echo $errDegree;?></p>
			<input type="submit" value="Send" name="submit" />
		</form>
	</body>
</html>
