<html>
<?php

echo "<style>";

echo "body{";
echo "background-image:url( 55.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";


$a=$_GET["are"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

$val=mysqli_query($con,"select distinct(t_name) from theatre where t_area='$a' ");
echo "<center>";
echo "<table>";
echo "</br></br></br></br>";
echo "</br></br></br></br>";echo "</br></br></br></br>";echo "</br></br></br></br>";
echo "<tr><td><font size=15\" color=\"black\">THEATRE LIST</font>"."</td></tr>";
while($row=mysqli_fetch_array($val))
{
$the=$row['t_name'];
echo "<tr><td>
<a href=\"./theatre.php?theatre=".$row['t_name']."\">".$the."</a></td></tr>";
}

echo "</center>";
echo "</table>";
echo "</br>";
echo "<center>";
echo "<form action=\"http://localhost/menu1.html\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";


?>
</html>