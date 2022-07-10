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
    <title>STUDENT FORM</title>
    <link rel="stylesheet" href="style.css"  type="text/css">
    <style>
        #student-select{
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
    <a href="student.php"> BACK</a>
    <a href="logout.php" >LOGOUT</a> 

   </div>
</section>
   <section class="abc">
    <div class="reg-teach">
        <h1 align="center" style="margin-top:2px;">REGISTER STUDENT</h1>

    <form action="student_form_db.php" method="post" class="teach-form" enctype="multipart/form-data">
    
       <input type="number" name="roll" id="" placeholder="ENTER ROLL NUMBER" class="teach-in" required><br>

        <input type="text" name="name" id="" placeholder="ENTER FULL NAME" class="teach-in" required><br>

        <b>DATE OF BIRTH:<b><input type="date"  name="dob" id="" placeholder="ENTER DOB" class="teach-in" required><br>

        <input type="text" name="address" id="" placeholder="ENTER ADDRESS" class="teach-in" required><br>

        
        <input type="tel"  name="phone" id="" placeholder="ENTER 10 DIGIT PHONE NUMBER" pattern="[0-9]{10}" class="teach-in" required><br>

        <!-- <input type="text" name="course" id="" placeholder="ENTER COURSE" class="teach-in" required><br> -->
        <b>SELECT COURSE:</b><br>
        <select name="course" id="student-select">
            <option value="MCA">MCA</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="B.COM">B.COM</option>
        </select><br><br>
        <!-- <input type="number" name="batch" id="" placeholder="ENTER BATCH" class="teach-in" required><br> -->
        <b>CHOOSE BATCH</b><br>
        <select name="batch" style="font-size:15px;width:22%;background-color:wihtesmoke;color:black;padding:8px;font-weight:bold;border-radius:4px" >
            <option  value="2018">2018</option>
            <option  value="2019">2019</option>
            <option  value="2020">2020</option>
            <option  value="2021">2021</option>
            <option  value="2022">2022</option>
        </select><br><br>
        <label class="teach-photo">UPLOAD PHOTO :</label> <br>

        <input type="file" name="photo" id="" placeholder="UPLOAD PHOTO" required> <br><br>

       <input type="submit" name="submit" id=""  class="form-submit" style="margin-left:40%">
        
    </form>
</div>
   </section>
   
</body>
</html>