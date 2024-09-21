<?php
$r=$_GET['i'];
$bg=$_GET['b'];
$u=$_GET['u'];
$d=$_GET['d'];
$connect=mysqli_connect('localhost','root','seedit','blood');
$q="update patient_request_blood set blood_group='$bg',no_of_unit='$u',reason='$d' where id='$r'";
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