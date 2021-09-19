<?php
session_start();

if(!isset($_SESSION['use']))
{
    header("Location:Login.php"); 
}

?>
<html>
<head>

<title> Home Page </title>
<style>body{background-color:Yellow;position:relative;}
table{border:3px solid;text-align:center;border-color:lightblue;font-size:+20;}
div{background-color:lightyellow;margin:auto;}
h1{color:Blue;}
a{font-size:30px;}
</style>

</head>

<body>
<div>
    <h1>Welcome <?php echo $_SESSION['use']; ?>!</h1>
    <h3>Successfull Login </h3><br>
    <h2>To Logout Your Account Click on Logout.</h2>
    <a href="./Logout.php">Logout</a>
</div>
</body>
</html>