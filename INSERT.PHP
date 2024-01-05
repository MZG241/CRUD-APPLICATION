<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row ">
<h1>ADD DATA</h1>
<hr>
<form action="" method="post">
<div class="form-group">
    <label for="">First Name</label>
    <input type="text" name="fname" class="form-control"  placeholder="Enter your first name"required>
</div>
<div class="form-group">
    <label for="">Last Name</label>
    <input type="text" name="lname" class="form-control"  placeholder="Enter your last name" required>
</div>
<div class="form-group">
    <label for="">Contact</label>
    <input type="text" name="contact" class="form-control"  placeholder="Enter your contact" required>
</div>
<br>
<br>
<button type="submit" name="insert" class="btn btn-primary">Save Data</button>


<a href="Table.php" class="btn btn-danger text-white">Back</a>

</form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
<?php

$con = mysqli_connect('localhost','root','','create t');

if(mysqli_connect_error())
{
 echo"ERROR <br>";
}


if(isset($_POST['insert']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];


$sql="INSERT INTO `ratata`(`fname`,`lname`,`contact`) VALUES ('$fname','$lname','$contact')";

if($con->query($sql)===TRUE)
{
    echo'<script> alert(" Data Saved "); </script>';
    header("location:Table.php");
}
else
{
    echo'<script> alert(" Data Saved "); </script>'.$con->error;
}
$con->close();
}
?>