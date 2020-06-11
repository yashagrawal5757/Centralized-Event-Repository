<?php  
session_start(); 
$dept = $_SESSION['dept'];
$uname = $_SESSION['user']; 

  
?> 

<!DOCTYPE html>
<html>
<head>
	<title>User Log</title>
          <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
        <!--Menu CSS IMPORT-->
      
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- MAIN PROGRAM-->
</head>
<body>
  
 
<center>
 <div >

                     <img src="logo.png" width="120" height="105" align="left" alt="college logo" >

                        <h1>Dayananda Sagar College Of Engineering </h1>

     </div>  
 <div>
        <div class="table100 ver3 m-b-110">
          <table data-vertable="ver3">
            <thead>
              <tr class="row100 head">
                  <th class="column100 column2" data-column="column2">Username</th>
                  <th class="column100 column3" data-column="column3">Department</th>
                  <th class="column100 column4" data-column="column4">Date</th>
              </tr>
              </thead>
              <tbody>
 
       <?php
       include "config.php";
       
       $emp_query = "SELECT * FROM log WHERE 1 ORDER BY date DESC";

        $dataRecords = mysqli_query($con,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($dataRecords) > 0)
        {
          while($record = mysqli_fetch_assoc($dataRecords))
          {
            $department = $record['department'];
            $date = $record['date'];
            $user = $record['username'];
               

             echo "<tr class='row100'>";
            echo "<td class='column100 column2' data-column='column2'>". $user ."</td>";
            echo "<td class='column100 column3' data-column='column3'>". $department ."</td>";
            echo "<td class='column100 column4' data-column='column4'>". $date ."</td>";
            echo "</tr>"; 
          }
        }
        else{
          echo "<tr class='row100'>";
          echo "<td class='column100 column1' colspan='5'>No record found.</td>";
          echo "</tr>";
        }
        ?>
     </tbody>
  </table>
</div>
</div>
</center>

</body>
</html>