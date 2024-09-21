<head>
    <html>
        <style>
                *
            {
                padding: 0px;
                margin: 0px;
            }
            .b
            {
                width: 65%;
                height: 50px;
                background-color:red;
                float: left;
                color: white;
            }
            .b1
            {
                margin-top: -2px;
                margin-left: 20px;
            }
            .b2
            {
                float: right;
                margin-top: -18px;
                margin-right: 200px;
            }
            .c
            {
                width: 35%;
                height: 50px;
                background-color: red;
                float: left; 
            }

            .menu
            {
                display: inline-block;
                padding: 20px 25px 0px 2px;
                
            }
            
            .menu a
            {
                color: white;
                text-decoration: none;
            }
            .menu a:hover
            {
                text-decoration: underline;
            }
            .d1
            {
                width: 18%;
                height: 150px;
                background:transparent;
                border: solid black;
                border-radius: 10px;
                margin-top: 50px;
                margin-left: 20px;
            
                float: left;
            }
            .d2
            {
                color:red;
                margin-top: 15px;
                margin-left: 20px;
            }
            .d3
            {
                
                margin-left: 20px;
            }
            
        </style>
         <body>
            <div class="a">
                <div class="b"><br><div class="b1"><h3>BLOOD BANK MANAGMENT SYSTEM</h3><h4 class="b2">Admin User</h4></div></div>
                <div class="c"><ul class="nav">
                    <li class="menu"><a href="#">Dashboard</a></li>
                    <li class="menu"><a href="#">Donor</a></li>
                    <li class="menu"><a href="#">Patient</a></li>
                    <li class="menu"><a href="#">Donate</a></li>
                    <li class="menu"><a href="admin request page.php">Request</a></li>
                    <li class="menu"><a href="blood bank.php">logout</a></li>
                </ul></div>
                <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='A'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $a=$row['x1'];
                }
                ?>
                 <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='O-'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $b=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='A+'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $c=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='A-'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $d=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='B'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $e=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='B+'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $f=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='B-'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $g=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='AB'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $h=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='AB-'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $i=$row['x1'];
                }
                ?>
             <?php
                $connect=mysqli_connect('localhost','root','seedit','blood');
                $q="select sum(quantity) as x1 from blood_group where bloodgroup='O+'";
                $rs=mysqli_query($connect,$q);
                while($row=mysqli_fetch_array($rs))
                {
                    $j=$row['x1'];
                }
                ?>
            
            
                

                <div class="d"><br><div class="d1"><h2 class="d2">A</h2><br><p class="d3">blood Available<br>total: <?php echo $a; ?> unit</p></div>
                <div class="d1"><h2 class="d2">O-</h2><br><p class="d3">blood Available<br>total: <?php echo $b; ?>  unit</p></div>
                <div class="d1"><h2 class="d2">A+</h2><br><p class="d3">blood Available<br>total: <?php echo $c; ?> unit</p></div>
                <div class="d1"><h2 class="d2">A-</h2><br><p class="d3">blood Available<br>total: <?php echo $d; ?> unit</p></div>
                <div class="d1"><h2 class="d2">B</h2><br><p class="d3">blood Available<br>total: <?php echo $e; ?> unit</p></div>
                <div class="d1"><h2 class="d2">B+</h2><br><p class="d3">blood Available<br>total:  <?php echo $f; ?> unit</p></div>
                <div class="d1"><h2 class="d2">B-</h2><br><p class="d3">blood Available<br>total: <?php echo $g; ?> unit</p></div>
                <div class="d1"><h2 class="d2">AB</h2><br><p class="d3">blood Available<br>total: <?php echo $h; ?>unit</p></div>
                <div class="d1"><h2 class="d2">AB-</h2><br><p class="d3">blood Available<br>total: <?php echo $i; ?> unit</p></div>
                <div class="d1"><h2 class="d2">O+</h2><br><p class="d3">blood Available<br>total: <?php echo $j; ?> unit</p></div>
                }
                </div>
            
             </div>
         </body>
    </html>
</head>