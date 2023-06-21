<?php
include 'connection.php';

$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM class WHERE id = '$id'");
$data = mysqli_fetch_assoc($sql);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $rollno = $_POST['rollno'];
    $sql = mysqli_query($conn,"UPDATE class SET name = '$name', age='$age', rollno = '$rollno' WHERE id = '$id'");
    if($sql)
    {
        echo'<script>alert("updated successfully");window.location.href="read.php";</script>';
    }
    else
    {
        echo'<script>alert("something went wrong");</script>';
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
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mt-5" style="background-color: blueviolet">
            <h5>Edit your details here </h5>
                 <form method="POST">
                    <div class="form-group mt-5">

                        <input type="text" class="form-control mt-2" name="name" value="<?php echo $data['name']; ?>"><br>
                        <input type="number" class="form-control mt-2" name="age" value="<?php echo $data['age']; ?>"><br>
                        <input type="number" class="form-control mt-2" name="rollno" value="<?php echo $data['rollno']; ?>"><br>

                        <center> <input type="submit" class="btn btn-success mt-2" name="update" value="update"></center>
                    </div>
                 </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>