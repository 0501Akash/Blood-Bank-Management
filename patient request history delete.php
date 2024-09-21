<?php
$r=$_GET['id'];
$connect=mysqli_connect('localhost','root','seedit','blood');
$q="delete from patient_request_blood where id='$r'";
$rs=mysqli_query($connect,$q);
if($rs)
{
    echo"<script>window.location='patient request history.php'</script>";
}
else
{
    echo"error";
}
?>