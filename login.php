<?php
function redirect($DoDie = true) {
    header('Location: idcat.php');
    if ($DoDie)
        die();
}
session_start();
if(isset($_SESSION['username'])) {
    redirect();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID-CARD MAKER</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />

</head>
<body class="login">

<!-- heading -->
<section>
    <h1 align="center" style="margin-top:5%; color:BROWN; font-family:arial; font-size:58px; font-weight:bold;">ANN COLLEGE</h1>
</section>
<!--  -->
    <section>
        
        <form action="logindb.php" class="login-fm" method="post">
            <p>ADMIN</p><br><br>
            <span class="material-symbols-outlined">
            input
            <input class="login-input" type="text"  name="username" placeholder="Enter Username*"  required><br><br>
            </span>
            <span class="material-symbols-outlined">
            key
            <input  class="login-input" type="password"  name="password" placeholder="Enter Password*" required><br><br>
            </span><br>
            <span class="material-symbols-outlined">
            login
            <input type="submit" name="submit" class="login-btn" value="Login">
            </span>
        </form>
        
    </section>
    <script src="login.js"></script>
</body>
</html>