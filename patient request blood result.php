<?php
session_start();
$a=$_SESSION['x'];
$b=$_GET['t1'];
$c=$_GET['t2'];
$d=$_GET['t3'];
$e='No action';
$connect=mysqli_connect('localhost','root','seedit','blood');
$q="insert into patient_request_blood values('$a','$b','$c','$d','$e')";
$rs=mysqli_query($connect,$q);
if($rs)
{
    echo"<script>window.location='patient dashboard.html'</script>";
}
else
{
     echo"error";
}
?>

