<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

$val=mysqli_query($con,"select * from movie ");
echo "</br></br>";
echo "<center>";

echo "<tr><td><font size=30\" color=\"black\"><b> LIST OF MOVIES</b></font>"."</td></tr>";


echo "<table border=10 bgcolor=\"#98FB98\" cellpadding=\"20\" cellspacing=\"10\">";
echo "<font color=\"white\">";
echo "<tr><td>"."MOV_ID"."</td><td>"."MOV_NAME"."</td><td>"."YEAR"."</td><td>"."LANGUAGE"."</td><td>"."GENERE"."</td></tr>";


while($row=mysqli_fetch_array($val))
{
echo "<tr><td>".$row['mov_id']."</td><td>".$row['mov_name']."</td><td>".$row['year']."</td><td>".$row['language']."</td><td>".$row['genere']."</td>";
?>
<td><a href="edit.php?edit=<?php echo $row['mov_id'];?>"alt="edit"><b>EDIT</b></a></td>
<td><a href="delete.php?delete=<?php echo $row['mov_id'];?>"alt="delete"><b>DELETE</b></a></td>
</tr>
<?php
}


echo "</font>";
echo "</table>";
echo "<form action=\"http://localhost/menu.html\">";
echo "<input type=\"submit\" name=\"button\" value=\"back\" style=\"height: 40px; width: 100px\">";
echo "</form>";
echo "</center>";
echo "</br></br>";

?>
</html>