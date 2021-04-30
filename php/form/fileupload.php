
<!doctype html>
<html>
	<head>
		<title>File Upload</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data" >
			Picture<input type="file" name="fiPicture" />
			<br />
			<input type="submit" value="Upload" name="btnUpload" />
		</form>
		
		
		<?php
			if(isset($_POST['btnUpload'])){
				$name=$_FILES['fiPicture']['name'];
				if(move_uploaded_file($_FILES['fiPicture']['tmp_name'],$name)){
					echo "<p>file has been Uploaded Successfully</p>";
				}else{
					echo "<p>Unable to upload file please try again.</p>";
				}
				
			}
		?>
	</body>
</html>