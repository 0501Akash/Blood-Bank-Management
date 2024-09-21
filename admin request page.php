<html>
    <head>
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
            .d
            {
                width: 100%;
                height: 150px;
            }
            .d1
            {
                margin-top: 60px;
                margin-left: 500px;
            
            }
            .e
            {
                width: 100%;
                height: 100%;
                
            }
            .e1
            {
                margin-left:350px
            }
            .e2
            {
                width:70%;
                align:center;
            }

</style>
<body>
    <div class="a">
        <div class="b"><br><div class="b1"><h3>BLOOD BANK MANAGMENT SYSTEM</h3><h4 class="b2">Admin User</h4></div></div>
        <div class="c"><ul class="nav">
            <li class="menu"><a href="patient dashboard.html">Dashboard</a></li>
            <li class="menu"><a href="patient request blood.php">Request blood</a></li>
            <li class="menu"><a href="patient request history.php">Request History</a></li>
            <li class="menu"><a href="blood bank.php">logout</a></li>
        </ul></div>
        <div class="d"><br><div class="d1"><a href=""><h1>Manage Blood Request</h1></a></div></div>
        <div class="e"><div class="e1">

            <?php
            
            $connect=mysqli_connect('localhost','root','seedit','blood');
            $q="select * from  patient_request_blood";
            $rs=mysqli_query($connect,$q);
            echo"<table class='e2'><tr><td>S.No</td><td>blood_group</td><td>unit</td><td>disease</td><td>status</td><td>action</td></tr>";
            echo"<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>";
            while($row=mysqli_fetch_array($rs))
            {
                 echo"<tr><td>$row[id]</td><td>$row[blood_group]</td><td>$row[no_of_unit]</td><td>$row[reason]</td><td>$row[status]</td>
                 <td><a href='patient request history edit.php?id=$row[id]'>Approved</a>|
                 <a href='patient request history delete.php?id=$row[id]'>Reject</a><br></td></tr>";
    
            }
            echo"</table>";
            ?>
        </div></div>
    </body>
    </head>
</html>