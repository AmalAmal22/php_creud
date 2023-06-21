<?php
include 'connection.php';
 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $rollno = $_POST['rollno'];

    $sql = mysqli_query($conn,"INSERT INTO `class`(`name`, `age`, `rollno`) VALUES ('$name','$age','$rollno')");

    if($sql)
    {
        echo '<script>alert("registered succesfully"); header("location:create.php")</script>';
    }
    else
    {
        echo"error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 style="margin-left: 250px;">Student Registration</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4 mt-5">
              
            <form method="post">
                <label>Enter Name</label>
                <input type="text" class="form-control" name="name">
                <label>Enter Age</label>
                <input type="number" class="form-control" name="age">
                <label>Enter RollNumber</label>
                <input type="text" class="form-control" name="rollno">

                <input type="Submit" class="btn btn-primary mt-2 mx-5" name="submit">
               </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>