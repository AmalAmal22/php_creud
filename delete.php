<?php
include 'connection.php';

$id = $_GET['id'];

$sql = mysqli_query($conn,"DELETE FROM class WHERE id='$id'");

if($sql)
{
    echo'<script>alert("Record Deleted Succesfully");window.location.href="read.php";</script>';

}
else
{
    echo "Something Went Wrong";
}

?>