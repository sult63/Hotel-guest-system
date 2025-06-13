<?php

$id=$_POST["id"];
$name=$_POST["name"];
$phonenum=$_POST["phonenum"];
$idnum=$_POST["idnum"];
$email=$_POST["email"];
$dos=$_POST["dos"];


include("config.php");

$query = " UPDATE users
            SET   name='$name', phone_number='$phonenum' , id_number='$idnum' , email='$email' , duration_of_stay='$dos'
            WHERE id='$id'";

$result= mysqli_query($connect, $query);
if($result)
{
    header('location:show.php');
}
else {
    echo "حدث خطأ";
}
?>