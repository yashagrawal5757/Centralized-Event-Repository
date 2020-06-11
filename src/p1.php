<?php
			
			session_start();  

   

			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_NAME', 'dsce');


			$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

			$dept = $_POST['dept'];
			$tittle = $_POST['tittle'];
			$drop = $_POST['drop'];
			$date = $_POST['date'];
			$file=$_FILES["list"]["name"];
			$tmp_name=$_FILES["list"]["tmp_name"];
			$path="uploads/".$file;
			$file1=explode(".", $file);
			$ext=$file1[1];
			$allowed=array("pdf","docx");
			if (in_array($ext, $allowed))
            {
	
			   move_uploaded_file($tmp_name,$path);



					$sql = "INSERT INTO data (department, tittle,date,event,list) VALUES ('$dept','$tittle','$date','$drop','$file')";
					if ($conn->query($sql) === TRUE)
					 {  
					 	header("Location: last.php");
					   
					}
			 

            }
            else
            {
            	header("Location: failed.php");
            }

?>