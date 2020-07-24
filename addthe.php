<html>
<?php
echo "<style>";

echo "body{";
echo "background-image:url( 52.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "}</style>";

$tid=$_GET["t_id"];
$tna=$_GET["t_name"];
$tar=$_GET["t_area"];
$mid=$_GET["mov_id"];
$tco=$_GET["t_cost"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

switch($_REQUEST['button'])
{
case 'submit':
$h=mysqli_query($con,"select * from theatre");
$i=mysqli_num_rows($h);
mysqli_query($con,"insert into theatre values('$tid','$tna','$tar','$tco',$mid)");

$j=$i+1;
$hh=mysqli_query($con,"select * from theatre");
$ii=mysqli_num_rows($hh);
if( $ii==$j)
{
echo "</br></br></br></br></br></br></br></br></br>";

echo "</br></br></br></br></br></br></br>";

echo "</br></br></br></br></br>";
echo "<center>";
echo "<font size=\"30\" color=\"black\"><b>INSERTED SUCCESSFULLY</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/12345.php\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\"  style=\"height: 40px; width: 200px\" >";
echo "</form>";
echo "</center>";
}
else
{
echo "<style>";

echo "body{";
echo "background-image:url( 54.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "}</style>";

echo "<center>";
echo "</br></br></br></br></br></br></br>";

echo "</br></br></br></br></br>";
echo "<font size=\"30\" color=\"black\"><b>WORKER_ID ALREADY EXIST</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/1234.php\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" style=\"height: 40px; width: 100px\" >";
echo "</form>";
echo "</center>";
}
break;


case 'back':
include('menu.html');
break;
}

?>
</html>