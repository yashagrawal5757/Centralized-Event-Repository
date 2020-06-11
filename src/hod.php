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
  

<html>
<!--Menu CSS IMPORT-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- MAIN PROGRAM-->
<head>
  <title>HOD-<?php echo $dept; ?> </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript">
        function show1(){
                         document.getElementById('div1').style.display ='block';
                         }
       
        function show2()
        {
          document.getElementById('div2').style.display = 'block';
        }
         function show3()
        {
          document.getElementById('div3').style.display = 'block';
        }
         function show4()
        {
          document.getElementById('div4').style.display = 'block';
        }



    </script>
</head>
 <body >
 <ul> <li style="float:right"><a class="active1" href="logout.php"><i class="fas fa-sign-out-alt"> Sign Out</i></a></li></ul>   <!-- CSS -->
 <!--Program -->
 <div >

                     <img src="logo.png" width="100" height="105" align="left" alt="college logo">

                        <h1>Dayananda Sagar College Of Engineering </h1>
</div>  
    <center>
     <h2>
                <?php  
                 
                 
                  echo "<br>";
                  echo "Department Of ";
                  echo $dept;                
                  


                  ?>
                    
     </h2>
     <h3><?php  
              
             
              echo "<br>";
              echo "Welcome User:";
              echo $uname;                
              


              ?></h3>
     <ul>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Filters</a>
    <div class="dropdown-content">
      <a onclick="show1();">By Date</a>
      <a onclick="show2();">By Event</a>
      <a onclick="show3();">By Search</a>
      <a href="hod.php">Reset</a>
    </div>
  </li>
  <li ><a href="hod.php">Reset</a></li>
  <li><a onclick="show4();">Add User</a></li>
  
   
 
</ul>
      </center>        
              
   
  
</br></br>

    <center>
                 <div id="frm" class="hide">
                      <h2 align="center">Filter Files To Download (Department : <?php echo $dept ?> )</h2>
                      <label><input type="radio" name="filter" value="date"  onclick="show1();" > By Date</label>
                      <label><input type="radio" name="filter" value="event" onclick="show2();"> By Event</label>
                      <label><input type="radio" name="filter" value="search" onclick="show3();"> By Search</label>  </br>
                      <a href="hod.php"><i > Reset </i></a>
                  </div>
           
     <!-- Search filter -->
           <div id="div1" class="hide" >
                <form action='filter.php' method='POST' id="frm">
                         <label class="label">Filter By Date</label>
                         </br></br>
                         Start Date <input type='date' class='dateFilter' name='fromDate' value='fromDate'>
                         End Date <input type='date' class='dateFilter' name='endDate' value='endDate'>
                         <input type='submit' name='search' value='Search' >
                </form>
                    
          </div>
          <div id="div2" class="hide"  >
                  <form action='filter2.php' method='POST'id="frm">
                        <label class="label">Filter By Event </label>
                       </br><br>
                        Please Select Event:
                        <select name="value" required>
                                <option value="ALL" >All</option>
                                <option value="tutorial">Tutorial</option>
                                 <option value="hackathons">Hackathons</option>
                                 <option value="workshop">WORKSHOP</option>
                                 <option value="mini_project">MINI PROJECTS</option>
                                 <option value="aat">AAT</option>
                                 <option value="seminar">SEMINARS</option>
                                 <option value="newsletter">NEWSLETTER</option>
                                 <option value="others">OTHERS</option>
                         </select><br><br>
                         <input type='submit' name='search' id='search' value='Search' >
                     
                     </form>
            </div>
            <div id="div3" class="hide" >
                <form action='filter3.php' method='POST' id="frm">
                         <label class="label">Filter By Tittle Search</label>
                         </br></br>
                         Enter tittle <input type='text' name="value">
                         
                         <input type='submit' name='search' value='Search' >
                </form>
                    
          </div>

          </center>
    <div id="div4" class="hide">
           <form action='add.php' method='POST' id="frm">
          <h2 align="center">Add New User (Faculty) </h2>
         
            <label >User Id : </label><input type="text" name="uadd" id="uadd" />
            <br>

            <label>Password : </label><input type="Password" name="padd" id="padd"  />
             </br>
            <label>Deparment : <?php echo $dept; ?></label>
            <input type="hidden" name="dept" value="<?php echo $dept; ?>"/>
          </br>
          </br>
            <label>Access : Faculty Access Only</label>
            <input type="hidden" name="pradd" value="3"/>
                                    
              </br>
            <input type='submit' name='search' value='ADD USER' >
             </form>
    </div>
 </body>
</html>