<?php

include("config.php");

$name=$_POST["name"];
$phonenum=$_POST["phonenum"];
$idnum=$_POST["idnum"];
$email=$_POST["email"];
$dos=$_POST["dos"];

$query="insert into users
(name , phone_number , id_number , email , duration_of_stay)
        values('" . $name . "','" . $phonenum . "','" . $idnum . "','" . $email . "','" . $dos . "')";

$result= mysqli_query($connect , $query); 

        if ($result) {
            header('location:show.php');
        }
        else {
            echo "no";
        }