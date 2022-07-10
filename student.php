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
    <title>STUDENT</title>
    <link rel="stylesheet" href="style.css"  type="text/css">
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
    
    <a href="idcat.php"> BACK</a>
    
    <a href="logout.php" >LOGOUT</a> 
    
   </div>
</section>

<!-- heading -->
<section>
    <h1 align="center" style="margin-top:-10px;margin-bottom:-20px; color:blue; font-family:arial;">STUDENT</h1>
</section>
<!--  -->
    <section class="teach-icons">
        
        <div class="teach-id-icon">
            <a href="student_form.php">
                <img src="icons/addteacher.svg">
            </a>
            <h4 style="color:blue;font-size:30px;">REGISTER STUDENT</h4>
        </div>
        <div class="teach-id-icon">
            
                <img src="icons/idcard.svg">
           
            
            <h4 style="color:blue;font-size:30px;">ID CARD</h4>
    
            <form action="student_idcard.php" method="POST">
            
            <input type="tel" name="get_id" id="" placeholder="ENTER PHONE NUMBER" pattern="[0-9]{10}" class="teach-in" required ><br>
           <a href="staff_idcard.php"> <input type="submit" class="gr-btn" value="GENERATE ID" name="submit" ></a>
           </form>
        </div>
       
    </section>

</body>
</html>