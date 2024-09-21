<html>
    <head>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $connect=mysqli_connect('localhost','root','seedit','blood');
        $q="select * from adminlogin where email='$a' and password='$b'";
        $rs=mysqli_query($connect,$q);
        if($row=mysqli_fetch_array($rs))
        {
            echo"<script>window.location='admin dashboard page.php'</script>";
        }
        else
        {
            echo"<script>window.location='admin login.html'</script>";
        }