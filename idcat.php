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
    <title>MENU</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
</head>

<body>
<section>
    
    <div class="menu" >
        
    <div class="usermessage">
    <?php
    echo ucwords('Welcome: '.$_SESSION['user']);
    ?>
    </div>

    <a href="idcat.php"> HOME</a>
    <a href="logout.php" >LOGOUT</a> 

   </div>
</section>
<!-- heading -->
<section>
    <h1 align="center" style="margin-top:-10px;margin-bottom:-20px; color:BROWN; font-family:arial; font-size:42px; font-weight:bold;">ANN COLLEGE</h1>
</section>
<!--  -->
    <section class="icons-cat">
    
        <div class="id-icon">
            <a href="teacher.php">
                <img src="icons/teacher.svg">
            </a>
            <h4  style="color:red;font-size:30px;">TEACHER</h4>
        </div>
        <div class="id-icon">
            <a href="staff.php">
                <img src="icons/staff.svg">
            </a>
            <h4 style="color:green;font-size:30px;">STAFF</h4>
        </div>
        <div class="id-icon">
            <a href="student.php">
                <img src="icons/student.svg">
            </a>
            <h4 style="color:blue;font-size:30px;">STUDENT</h4>
        </div>
        
    </section>
    
   
   
</body>

</html>