<?php
session_start();
if(empty($_SESSION['username']) || $_SESSION['username'] == ''){
    header("Location: page_access_error.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT IDCARD</title>
    <link rel="stylesheet" href="style.css"  type="text/css" media="screen,print">
    <style>
@media print {
   #noprint {
      visibility: hidden;
   }
}
.button{
    margin-top:-10%;
    margin-left:70%;

}
#button{
    padding:8px;
    font-size:18px;
    position: fixed;
    bottom: 0px;
    margin-bottom:50px; 
}
</style>    
</head>
<body>
<section id="noprint">
    
    <div class="menu" >
        
    <div class="usermessage">
    <?php
    echo ucwords('Welcome: '.$_SESSION['user']);
    ?>
    </div>

    <a href="idcat.php"> HOME</a>
    <a href="student.php"> BACK</a>
    <a href="logout.php" >LOGOUT</a> 

   </div>
</section>
    <section >
    <?php
   $connection = mysqli_connect("localhost","root","","idcard");
   if(isset($_POST['submit']))
   {
    // $id=phone number

    $id= $_POST['get_id'];
    $query= "SELECT * FROM student WHERE phone='$id' ";
    $query_run= mysqli_query($connection, $query);

   ?>

<div>
    
  <?php
   if(mysqli_num_rows($query_run) > 0)
   {
          while ($row = mysqli_fetch_array($query_run)) 
          {
  ?>
  <div class="student-id-container">
  
     <h3>ANN COLLEGE</h3>  
   <img src="<?php echo "photo/".$row['photo']?>" width="100px" alt="image"> <br>
   <h2>ROLL:</h2>  <h2 style="border:none; width:75%;text-align:right;color:black;"><?php echo $row['roll']; ?></h2><br>
   <h2>NAME:</h2>  <h2 style="border:none; width:74%;text-align:right;color:black;"><?php echo $row['name']; ?></h2><br>
   <h2>DOB:         </h2><h2 style="border:none; width:78.5%;text-align:right;color:black;"><?php echo $row['dob']; ?> </h2><br>
   
   <h2>ADDRESS: </h2><h2 style="border:none; width:68%;text-align:right;color:black;"><?php echo $row['address']; ?></h2> <br> 
   
   <h2>PHONE:     </h2><h2 style="border:none; width:73%;text-align:right;color:black;"><?php echo $row['phone']; ?> </h2><br>
   <h2>COURSE:       </h2><h2 style="border:none; width:70.5%;text-align:right;color:black;"><?php echo $row['course']; ?></h2> <br>
   <h2>BATCH:         </h2><h2 style="border:none; width:73.5%;text-align:right;color:black;"><?php echo $row['batch']; ?></h2> <br>
    
  <div class="student-zoom ">

  </div>
    <!-- <hr> -->
   
    <!-- <td><?php echo '<img src=" data:photo;base64,'.base64_encode($row['photo']).' " alt="image" style="width=100px; height=100px">'; ?> </td> -->
   
    </div>

  <?php
    }
}
    else 
        {
            ?>
        
            <h1 align="center" style="">NO RECORD FOUND</h1>  
                  
           <?php
           header("refresh: 4; url=student.php");  
        }
    
  ?>
  
   </div>
<?php
 }
?>

    </section>
    <section class="button">
        <div id="noprint">
            <input  id="button" type="button" onclick="window.print()" value="PRINT ID CARD">
        </div>
    </section>

    
    
</body>
</html>