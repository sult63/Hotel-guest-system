<?php
include("config.php");

$query="select * from users";
$result= mysqli_query($connect, $query);
if(! $result){
    die("Error in query");
}
else {
?>
<html>
    <head> <link rel="stylesheet" href="form.css">
        <body>
        <table>
            <th> id
                <td> name </td>
                <td> phone number </td>
                <td> id number </td>
                <td> email </td>
                <td> duration of stay </td>
                <td> Update </td>
                <td> Delete </td>
            </th>
       
<?php
    while($row= mysqli_fetch_assoc($result)){

        echo "<tr>";

        echo "<td>";
        echo $row['id'];
        echo "</td>";

        echo "<td>";
        echo $row['name'];
        echo "</td>";

        echo "<td>";
        echo $row['phone_number'];
        echo "</td>";

        echo "<td>";
        echo $row['id_number'];
        echo "</td>"; 

        echo "<td>";
        echo $row['email'];
        echo "</td>";

        echo "<td>";
        echo $row['duration_of_stay'];
        echo "</td>";
        
        echo "<td>";
        echo "<a href='formupdate.php?id=".$row['id'] . "'>تعديل</a>";
        echo "</td>";

        echo "<td>";
        echo "<a href='delete.php?id=".$row['id'] . "'>حذف</a>";
        echo "</td>";

        echo "</tr>";
    }
}
    ?>
    </table>
    </body>
</html>
<?php

