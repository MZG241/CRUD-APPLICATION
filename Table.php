<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container p-5">

<div class="row ">


<h1 class="text-center mb-5">CRUD APPLICATION</h1>
<hr>


<div class="row mb-3">
<div class="col-lg-12 text-end">
<a href="INSERT.PHP" style="padding:10px;margin:10px 12px; border:1px solid white;text-decoration:none;background-color:green;color:white;">ADD DATA</a>
  
</div>
</div>

<?php   
    

    $con=mysqli_connect('localhost','root','','create t');

    if(mysqli_connect_error())
    {
        echo"ERROR <br> .";
    }





    $sql = "SELECT * FROM `ratata`";
if($result = mysqli_query($con,"SELECT * FROM `ratata`"))

    ?>
    <table class="table table-hover table-bordered table-striped text-center">
        <thead>

            <tr>
            <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>CONTACT</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
<?php

 $sql = "SELECT * FROM `ratata`";
if($result = mysqli_query($con,"SELECT * FROM `ratata`"))

{
    while($row = mysqli_fetch_assoc($result))
    {
        ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['contact']; ?></td>

            <form action="UPDATE.PHP" method="post">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <td><input name="edit" type="submit" class="btn btn-success" value="EDIT"></td>

           </form>
          
            <form action="DELETE.PHP" method="post">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <td><input type="submit"  name="delete" class="btn btn-danger"     value="DELETE"></td>

           </form>
        </tr>
    </tbody>
    <?php
    }
 
}
else
{
    echo "0 result <br>";
}
?>
    </table>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>