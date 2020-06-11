<?php  
session_start();  
 $dept = $_SESSION['dept'];
  $uname = $_SESSION['user']; 

    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'dsce');
      
      date_default_timezone_set('Asia/Kolkata');
      date_default_timezone_get();
      
      $date1 = date('d-m-Y h:i:sa');
      $txt = "successful";      



$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$sql = "INSERT INTO log (username, department, date, status) VALUES ('$uname','$dept','$date1','$txt')";
 $conn->query($sql);
?>   
<!DOCTYPE html>
<html>
<!--Menu CSS IMPORT-->

<!-- MAIN PROGRAM-->
<head>
    <title><?php echo $uname; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">


    <script>



function myFunction() {
  
  x.setAttribute("type", "file");
  document.body.appendChild(x);
}
</script>
    


</head>
<body>
  <div class="mydiv">
    <!--MENU Creation-->
<div class="icon-bar">
    <a class="active" href=""><i class="fa fa-home"> Home</i></a>
    <a class="active" href="logout.php" ><i class="fas fa-sign-out-alt"> Sign Out</i></a>
</div>
 <!--Program -->
 <div >

                     <img src="logo.png" width="100" height="105" align="left" alt="college logo">

                        <h1>Dayananda Sagar College Of Engineering </h1>
</div>  

         <center>
                        <h2>
                                    <?php  
                                  $dept = $_SESSION['dept'];
                                 
                                  echo "<br>";
                                  echo "Department Of ";
                                  echo $dept;                
                                  


                                  ?></h2>
                        <h2><?php  
                              $uname = $_SESSION['user'];
                             
                              echo "<br>";
                              echo "Welcome User :";
                              echo $uname;                
              


                                ?></h2>
                            
        </center>
                <div id="frm">
                    <form action="p1.php" method="POST" enctype="multipart/form-data">
                       
                        <label>Deparment : <?php echo $dept; ?></label>
                        <input type="hidden" name="dept" value="<?php echo $dept; ?>"/>
                                            
                        <p>
                            <label>Title</label>
                            <input type="text" id="tittle" name="tittle" required />
                        </p>
                        
                        
                        <p>
                            <label>Event</label>
                            <select id="drop" name="drop" required>
                                <option value="tutorial">Tutorial</option>
                                 <option value="hackathons">Hackathons</option>
                                 <option value="workshop">WORKSHOP</option>
                                 <option value="mini_project">MINI PROJECTS</option>
                                 <option value="aat">AAT</option>
                                 <option value="seminar">SEMINARS</option>
                                 <option value="newsletter">NEWSLETTER</option>
                                 <option value="others">OTHERS</option>
                            </select><br/><br/>

                        </p>
                            <label>
                                
                                    Date: <input type="date" name="date" id="date" required />
                                
                           </label>
                        
                           
                           <br/><br/>
                           <p>
                              <label>File Upload </label><br>
                               <label> (Allowed Format: pdf. Max File Size :2MB)
                                <input type="file"  name="list"></label><br/></p>
                                
                                <a href="sample.docx">Get Sample Format</a>
                                
                                <br/><br/>
                            <input type="submit" id="btn" value="SUBMIT" />
                           </p>
                    </form>


                </div>
              </div>
          

 </body>


</html>
