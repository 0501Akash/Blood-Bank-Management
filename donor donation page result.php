<html>
    <head>
        <?php
        session_start();
        $a=$_SESSION['x'];
        $b=$_GET['t1'];
        $c=$_GET['t2'];
        $d=$_GET['t3'];
        $e='No Action';

        $connect=mysqli_connect('localhost','root','seedit','blood');
        $q="insert into donor_donation_page values('$a','$b','$c','$d','$e')";
        $rs=mysqli_query($connect,$q);
        if($rs)
        {
            echo"<script>window.location='donor dashboard.html'</script>";
        }
        else
        {
             echo"error";
        }
        ?>
        </head>
        </html>
        