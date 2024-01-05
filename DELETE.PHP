<?php

$con = mysqli_connect('localhost','root','','create t');


if(mysqli_connect_error())
{
    echo"ERROR <br>";
}


if(isset($_POST['delete']))
{

$id=$_POST['id'];

$sql="DELETE FROM ratata WHERE id='$id'  ";

if($con->query($sql)===TRUE)
{
    echo'<script> alert(" DATA DELETED") </script>';
    header("location:Table.php");
   
}
else
{
    echo'<script> alert(" DATA NOT DELETED") </script>'.$con->error;
}

}

?>