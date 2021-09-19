<?php  
session_start();

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"web1");
$flag=0;
$count=0;
if(isset($_POST['login']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql="SELECT * FROM login_info WHERE UserName='$user' and Password_='$pass'";
    $result=mysqli_query($con,$sql);
    while($data = mysqli_fetch_array($result))
    {
        if($user==$data['UserName'] && $pass==$data['Password_'])
        {
            $_SESSION['use']=$user;
            $flag=1;
            header("Location:index.php");
        }
    }
    if($flag==0)
    {
        echo "Invalid Username Or Password";
    }
    mysqli_close($con);

}
?>



<html>
<head>

<title> Login Page </title>
<style>body{background-color:Yellow;position:relative;}
table{border:3px solid;text-align:center;border-color:lightblue;font-size:+20;}
div{background-color:lightyellow;margin:auto;}
h1{color:Blue;}
</style>

</head>

<body>

<form action="" method="post">
<div>
    <h1>LOGIN PAGE</h1>
    <table>
    <tr>
        <td>  User Name : </td>
        <td> <input type="text" name="user" > </td>
    </tr>
    <tr>
        <td> PassWord : </td>
        <td><input type="password" name="pass"></td>
    </tr>
    <tr>
        <td> <input type="submit" name="login" value="LOGIN"></td>
        <td></td>
    </tr>
    </table>
</div>
</form>

</body>
</html>
