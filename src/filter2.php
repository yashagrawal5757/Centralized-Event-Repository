<?php  
session_start(); 
$dept = $_SESSION['dept'];
$uname = $_SESSION['user']; 

  
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Filter By Event</title>
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
   
       <?php
       include "config.php";
       

        if($_POST['value'] != 'ALL')
        {
            $ValueSearch = $_POST['value'];

            $query = "SELECT * FROM data WHERE event like '$ValueSearch' ";
            $SearchResult = filterTable($query);
        }
        else
        {
            $query = "SELECT * FROM data ";
            $SearchResult = filterTable($query);
        }
        function filterTable($query)
        {
            $username="root";
            $password=null;
            $database="dsce";
            $connect = mysqli_connect("localhost",$username,$password,$database);
            $filter_Result = mysqli_query($connect, $query);
            return $filter_Result;
        }

   
        ?>
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
        <?php while ($row = mysqli_fetch_array($SearchResult)):?>

            <tr class="row100">

                <td class="column100 column2" data-column="column2"><?php echo $row['department'];?></td>

                 <td class="column100 column2" data-column="column2"><?php echo $row['tittle'];?></td>

                <td class="column100 column3" data-column="column3"><?php echo $row['date'];?></td>

                 <td class="column100 column4" data-column="column4"><?php echo $row['event'];?></td>

                 <td class="column100 column5" data-column="column5"><a href="uploads/<?php echo $row['list'] ?>"><?php echo $row['list'];?></td></a>

            </tr>

        <?php endwhile; ?>
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