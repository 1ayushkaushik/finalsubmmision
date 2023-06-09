<?php
include("connection.php");
error_reporting(0);
$fn=$_GET['fn'];
$rn=$_GET['rn'];
$de=$_GET['de'];
$ho=$_GET['ho'];

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale=1">
        <title>responsive form</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <form action ="" method="get">
         <div class="container">
            <h2>Registration Form</h2>
            <div class="form-container">
                  <form>

                    <div class="input-name">
                        <i class="fa fa-user"></i>
                        <input type="text" value="<?php echo "$fn"?>" name="firstname" class="name">

                        <span>
                            <i class="fa fa-user"></i>
                            <input type="text" value="<?php echo "$rn"?>" name="rollno" class="name">

                        </span>
                    </div>

                    <div class="input-name">
                        <i class="fa fa-envelope email"></i>
                        <input type="text" value="<?php echo "$de"?>" name="department" class="text-name">

                    </div>

                    <div class="input-name">
                        <i class="fa fa-lock lock"></i>
                        <input type="text" value="<?php echo "$ho"?>" name="hostel" class="text-name">

                    </div>

                                    

                    <div class="input-name">
                        <input type="submit" class="button" name="submit" value="update">
                    </div>

                  
                
        
                       
                       
                     






                  </form>
            </div>
        
         </div>
    </body>
</html>

<?php

  if($_GET['submit'])
  {
    $firstname=$_GET['firstname'];
    $rollno=$_GET['rollno'];
    $department=$_GET['department'];
    $hostel=$_GET['hostel'];
    $query="UPDATE  student SET rollno='$rollno',firstname='$firstname',department='$department',hostel='$hostel' WHERE rollno='$rollno'";

    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"<script>alert('record updated')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/AYUSHKAUSHIK/navbar.php">
        <?php
    }

    else{
        echo "failed to update";
    }
}
    ?>

  