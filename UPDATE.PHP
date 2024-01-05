<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
$con = mysqli_connect('localhost','root','','create t');

if(mysqli_connect_error())
{
    echo"ERROR <br>";
}

$id = $_POST['id'];

$sql="SELECT * FROM `ratata` WHERE `id` = '$id' ";

if($result = mysqli_query($con,"SELECT * FROM `ratata` WHERE `id` = '$id' "))
{
    while($row = mysqli_fetch_assoc($result))
    {

        ?>
       <div class="container">
        <div class="alibaba">
            <h2>UPDATE DATA</h2>
            <hr>
            <form action="" method="post">
<div class="form-group">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label for="">First Name</label>
    <input type="text" name="fname"  value="<?php echo $row['fname']; ?>"  class="form-control"  placeholder="Enter your first name"required>
</div>
<div class="form-group">
    <label for="">Last Name</label>
    <input type="text" name="lname"  value="<?php echo $row['lname']; ?>"   class="form-control"  placeholder="Enter your last name" required>
</div>
<div class="form-group">
    <label for="">Contact</label>
    <input type="text" name="contact"  value="<?php echo $row['contact']; ?>"  class="form-control"  placeholder="Enter your contact" required>
</div>
<br>
<br>
<button type="submit" name="update" class="btn btn-primary">Update Data</button>


<a href="Table.php" class="btn btn-danger text-white">Cancel</a>

</form>
<?php

if(isset($_POST['update']))
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];


$sql="UPDATE `ratata` SET `fname` ='$fname', `lname` ='$lname', `contact` ='$contact' WHERE `id`='$id'";

if($con->query($sql)===TRUE)
{
    echo '<script> alert("Updated Data Successfully"); </script>';
  header("location:Table.php");
}
else
{
    echo '<script> alert("No Record found"); </script>';
   
}


}



?>

        </div>
       </div>

        <?php
    }
}
else
{
    echo '<script> alert("No Record found") </script>'.$con->error;
}

?>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>