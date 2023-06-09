<html>
    <head>
        <title>
            display records
</title>
<style>
#editbtn
{
    background-color: rgb(236, 180, 9);
    color:rgb(20, 2, 2);
    width:130px;
    font-size: 18px;
    height:35px;
    cursor:pointer;
}
#delbtn
{
    background-color: rgb(236, 180, 9);
    color:rgb(20, 2, 2);
    width:130px;
    font-size: 18px;
    height:35px;
    cursor:pointer;
}

.table
{
    margin:50px 400px 50px 400px;
}
</style>
</head>

<body>
    <table border="10" cellspacing="7" class='table'>

    <tr>
        <th>first name</th>
        <th>roll no</th>
        <th>department</th>
        <th>hostel</th>
        <th colspan="10" align="centre">operation</th>
    </tr>

<?php
include("connection.php");
error_reporting(0);
$query="select * from student";
$data=mysqli_query($conn,$query);

//echo"$total ";

$total=mysqli_num_rows($data);
//$result=mysqli_fetch_assoc($data);

if($total!=0)
{
    $result=mysqli_fetch_assoc($data);
     while($result=mysqli_fetch_assoc($data))
     {
        echo "
        <tr>
        <td>".$result['firstname']."</td>
        <td>".$result['rollno']."</td>
        <td>".$result['department']."</td>
        <td>".$result['hostel']."</td>
        <td><a href ='update.php?rn=$result[rollno]&fn=$result[firstname]&de=$result[department]&ho=$result[hostel]'><input type='submit' value='edit/update' id='editbtn'></a></td>
        <td><a href ='delete.php?rn=$result[rollno]'><input type='submit' value='delete' id='delbtn'></a></td>
    
        </tr>
        ";
    }
}
    else
    {
          echo "no records found";
    }

    ?>

</table>
</body>
</html>






        