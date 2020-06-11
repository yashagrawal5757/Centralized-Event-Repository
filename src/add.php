<?php  
session_start();  

  


$uadd = $_POST['uadd'];
$padd = $_POST['padd'];
$pradd = $_POST['pradd'];
$dept = $_POST['dept'];



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dsce');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$sql = "INSERT INTO users (username, password, priority, department) VALUES ('$uadd','$padd','$pradd','$dept')";
if ($conn->query($sql) === TRUE)
  { 	 	
	 		echo "<!DOCTYPE html> 
 					 <html> 
 					 <head>
                      <script type='text/javascript'>
   					  function load()
   						 {
    						window.location.href = 'last.php';

    					 }
    				  </script>
   					 </head>

    				<body onload='load()'>
    				</body>
 					 </html>";
    			
			}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>