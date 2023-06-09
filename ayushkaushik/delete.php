<?php
include("connection.php");
error_reporting(0);

$rollno=$_GET['rn'];
$query="DELETE FROM student WHERE rollno='$rollno' ";

$data=mysqli_query($conn,$query);

if($data)
   {
    echo "<font color='green'> Record Deleted From Database";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/AYUSHKAUSHIK/navbar.php">
    <?php
   }

else
{
    echo"<font color='red'>Failed To Delete";
}
?>