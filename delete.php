<?php
include("config.php");

$id=$_GET["id"];
$query="delete from users where id='$id'";
$result=mysqli_query($connect, $query);
if($result)
{
    echo " تم الحذف بنجاح";
}else
{
    echo " فشل الحذف";
}
