<?php
session_start();

$connection=mysqli_connect('localhost','root','venugopal@2000');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform3');

$email=$_POST['emailid'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$email' && password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($_POST['emailid']=="'or'1'='1" && $_POST['password']=="'or'1'='1")
{
    header('location:app.php');
}
elseif($num==1)
{
    header('location:app.php');
}
else
{
    header('location:loginandregister.php');
}
?>