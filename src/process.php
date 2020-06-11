
<?php
//get values pass from form in login.php file
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];


		
	define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'dsce');

      

	//to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	

	//connect to server and selecting database to be used
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	



	//Query the database for user
$sql = "select * from users where username = '$username' and password = '$password' " ;

$result = mysqli_query($db,$sql)
			     or die("Failed to query database" .mysqli_error());
	$row = mysqli_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password && $row['priority'] == 1 )
	 { 		
	 	    $dept = $row['department'];
			 echo "<script>window.open('admin.php','_self')</script>";
			 $_SESSION['user'] = $username;	
			  $url = "admin.php" ;
 			 header('location: ' .$url);
			 $_SESSION['dept'] = $dept;	
 			 $url = "admin.php" ;
 			 header('location: ' .$url);
 			 exit();
  
	
			}
	elseif ($row['username'] == $username && $row['password'] == $password && $row['priority'] == 2 )
			{  $dept = $row['department'];
			 echo "<script>window.open('hod.php','_self')</script>";
			 $_SESSION['user'] = $username;	 	
 			 $url = "hod.php" ;
 			 header('location: ' .$url);
 			 $_SESSION['dept'] = $dept;	
 			 $url = "hod.php" ;
 			 header('location: ' .$url);
 			 exit();
 			}
  
    else if ($row['username'] == $username && $row['password'] == $password && $row['priority'] == 3 )
			 {  $dept = $row['department'];
			 echo "<script>window.open('faculty.php','_self')</script>";
			 $_SESSION['user'] = $username;	 	
 			 $url = "faculty.php" ;
 			 header('location: ' .$url);
 			 $_SESSION['dept'] = $dept;	
 			 $url = "faculty.php" ;
 			 header('location: ' .$url);
 			 exit();
 			}
 		else
 		{
			  
			  date_default_timezone_set('Asia/Kolkata');
			  date_default_timezone_get();
			  
			  $date1 = date('d-m-Y h:i:sa');
			  $txt = "Invalid Details";      
				$sql1 = "INSERT INTO log (username, date, status) VALUES ('$username','$date1','$txt')";
				 $db->query($sql1);
 			$url = "failed.php" ;
 			 header('location: ' .$url);
 		}
  	
	
					




?>