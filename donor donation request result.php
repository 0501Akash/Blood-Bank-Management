<html>
    <head>
        <?php
        $e=1;
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $d='no action';

        $connect=mysqli_connect('localhost','root','seedit','blood');
        $q="insert into donor_donation_page4 values('$e','$a','$b','$c','$d')";
        $rs=mysqli_query($connect,$q);
        if($rs)
        {
            e++;
            echo"<script>window.location='donor dashboard.html'</script>";
        }
        else
        {
             echo"error";
        }
        ?>
        </head>
        </html>
        