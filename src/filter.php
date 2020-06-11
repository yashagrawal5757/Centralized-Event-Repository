<?php  
session_start(); 
$dept = $_SESSION['dept'];
$uname = $_SESSION['user']; 

  
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Filter By Date</title>
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

                     <img src="logo.png" width="120" height="105" align="left" alt="college logo">

                        <h2 height="105">Dayananda Sagar College Of Engineering </h2>

     </div>  
     <h3>
                <?php  
                 
                 
                  echo "<br>";
                  echo "Department Of ";
                  echo $dept;                
                  


                  ?>
                    
     </h3>
</center>

   <!-- Script -->
  
   <script type='text/javascript'>
   $(document).ready(function()
   {
     $('.dateFilter').datepicker({
        dateFormat: "yy-mm-dd"
     });
   });
   </script>
<div>
        <div class="table100 ver3 m-b-110">
          <table data-vertable="ver3">
            <thead>
              <tr class="row100 head">
                  <th class="column100 column2" data-column="column2">DEPARTMENT</th>
                  <th class="column100 column2" data-column="column2">TITTLE</th>
                  <th class="column100 column3" data-column="column3">DATE</th>
                  <th class="column100 column4" data-column="column4">EVENT</th>
                  <th class="column100 column5" data-column="column5">FILES</th>
                </tr>
              </thead>
              <tbody>
       <?php
       include "config.php";
       
       $emp_query = "SELECT * FROM data WHERE 1 ";

       // Date filter
       if(isset($_POST['search']))
       {
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate))
          {
             $emp_query .= " and date 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
        $emp_query .= " ORDER BY date DESC";
        $dataRecords = mysqli_query($con,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($dataRecords) > 0)
        {
          while($record = mysqli_fetch_assoc($dataRecords))
          {
            $department = $record['department'];
            $date = $record['date'];
            $tittle = $record['tittle'];
            $event = $record['event'];
            $file = $record['list'];
         

            echo "<tr class='row100'>";
            echo "<td class='column100 column2' data-column='column2'>". $department ."</td>";
            echo "<td class='column100 column2' data-column='column2'>". $tittle ."</td>";
            echo "<td class='column100 column3' data-column='column3'>". $date ."</td>";
            echo "<td class='column100 column4' data-column='column4'>". $event ."</td>";
            echo "<td class='column100 column5' data-column='column5'><a href=uploads/".$record['list'].">".$file."</a></td>";


           
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

<p align="right">(Seal with Sign)</p>
<center>

<button onclick="printa()" class="btn1">Print this page</button>

<script>
function printa() {
  window.print();
}

</script>
</center>

</body>
</html>