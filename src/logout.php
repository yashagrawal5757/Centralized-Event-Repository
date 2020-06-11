<?php  
/** 
 
 * User: Ankit Sinha

 */  
  
session_start();//session is a way to store information (in variables) to be used across multiple pages.  
session_destroy();  
header("Location: http://172.25.4.213/index.php");//use for the redirection to some page  
?>  
