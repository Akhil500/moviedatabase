<html>

<body bgcolor="CD853F">
<?php



$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
$mov=$_GET['hname8'];
$qry5=mysqli_query($con,"select * from movie where mov_name='$mov'");
while($row=mysqli_fetch_array($qry5))
{
$mid=$row['mov_id'];
}
$c=$_GET["com"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
$val=mysqli_query($con,"update statistics set comment='$c' where mov_id='$mid'");

echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"15\"  style=\"height: 40px; width: 100px\" color=\"black\">THANKS FOR YOUR COMMENT</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/menu1.html\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";

?>
</html>