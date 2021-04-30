
<!doctype html>
<html>
	<head>
		<title>File Upload</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data" >
			Picture<input type="file" name="fiPicture" />
			<br />
			<input type="submit" value="Upload" name="Upload" />
		</form>
		
		
		<?php
			if(isset($_POST['Upload'])){
				$name=$_FILES['fiPicture']['name'];
				$type=$_FILES['fiPicture']['type'];
				$size=$_FILES['fiPicture']['size']; //size will come in bytes
				
				echo "Name=".$name."<br />";
				echo "Type=".$type."<br />";
				echo "Size=".(($size/1024))." KB<br />";
                if(($type=="image/jpeg" || $type=="image/png" || $type=="image/gif") && ($size/1024)<900){
                    echo "We are good to go";
                }else{
                    echo "Please Upload PNG Image file with the size of less then 900 KB";
                }
			}
		?>
	</body>
</html>