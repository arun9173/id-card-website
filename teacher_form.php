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
    <title>TEACHER FORM</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #teacher-designation{
            padding:8px;
            background-color:whitesmoke;
            color:black;
            font-weight:bold;
            width:22%;
            border-radius:4px;
            font-size:15px;
        }
    </style>
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
    <a href="teacher.php"> BACK</a>
    <a href="logout.php" >LOGOUT</a> 

   </div>
</section>
   <section class="abc">
    <div class="reg-teach">
        <h1 align="center" style="margin-top:2px;">REGISTER TEACHER</h1>

    <form action="teacher_formdb.php" method="post" class="teach-form" enctype="multipart/form-data">

        <input type="text" name="name" id="" placeholder="ENTER FULL NAME" class="teach-in" required><br>

        <b>DATE OF BIRTH:<b><input type="date"  name="dob" id="" placeholder="ENTER DOB" class="teach-in" required><br>

            <!-- <input type="text" name="designation" id="" placeholder="ENTER DESIGNATION" class="teach-in" required><br> -->
        <b>SELECT DESIGNATION:</b><br>
        <select name="designation" id="teacher-designation">
            <option value="Lecturer">Lecturer</option>
            <option value="Professor">Professor</option>
            <option value="Assistent Professor">Assistent Professor</option>

        </select><br><br>
        <input type="text" name="address" id="" placeholder="ENTER ADDRESS" class="teach-in" required><br>

        <input type="tel" name="phone" id="" placeholder="ENTER PHONE NUMBER" pattern="[0-9]{10}" class="teach-in" required><br>

        <b>DATE OF JOINING:<b><input type="date"  name="doj" id="" placeholder="DATE OF JOINING" class="teach-in" required><br>

        <label class="teach-photo">UPLOAD PHOTO :</label> <br>

        <input type="file" name="photo" id="" placeholder="UPLOAD PHOTO" required> <br><br>

       <input type="submit"  class="form-submit" name="submit" id="" style="margin-left:40%">
        
    </form>
</div>
   </section>
    
   
    
</body>
</html>