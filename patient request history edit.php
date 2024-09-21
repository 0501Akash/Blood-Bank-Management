<form action='patient request history edit result.php'>
    
    
    <?php
    $r=$_GET['id'];
    $connect=mysqli_connect('localhost','root','seedit','blood');
    $q="select * from patient_request_blood where id='$r'";
    $rs=mysqli_query($connect,$q);
    echo"<center><p><u>Edit donor</u></p>";
   while($row=mysqli_fetch_array($rs))
    {
        echo"<input value='$row[id]' type='text' name='i'><br>
        <input type='text' value='$row[blood_group]' name='b'><br>
        <input type='text' value='$row[no_of_unit]' name='u'><br>
        <input type='text' value='$row[reason]' name='d'><br>";
        
    }
    ?>
    <input type='submit' value='edit'></center>;
    </form>