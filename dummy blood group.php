<html>
    <head>
        <?php
        $connect=mysqli_connect('localhost','root','seedit','dummy');
        $q="select sum(quantity) as x1 from bloodquantity where blooddrp='a+'";
        $rs=mysqli_query($connect,$q);
        while($row=mysqli_fetch_array($rs))
        {
            echo"total blood $row[x1]";
        }
        ?>
        </head>
        </html>