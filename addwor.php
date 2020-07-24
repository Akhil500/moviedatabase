<html>
<?php
echo "<style>";

echo "body{";
echo "background-image:url( 52.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";

$wid=$_GET["w_id"];
$wna=$_GET["w_name"];
$s=$_GET["sex"];
$ag=$_GET["age"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

switch($_REQUEST['button'])
{
case 'submit':
$h=mysqli_query($con,"select * from lead_cast");
$i=mysqli_num_rows($h);
mysqli_query($con,"insert into lead_cast values('$wid','$wna','$s','$ag')");
$j=$i+1;
$hh=mysqli_query($con,"select * from lead_cast");
$ii=mysqli_num_rows($hh);
if( $ii==$j)
{
echo "</br></br></br></br></br></br></br></br></br></br></br>";
//echo "<font face=\"verdana\" color=\"blue\">INSERTED SUCCESSFULY</font>";
echo "<center>";

echo "</br></br></br></br></br></br></br></br></br>";
echo "<font size=\"30\" color=\"black\"><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/1234.php\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" style=\"height: 40px; width: 100px\" >";
echo "</form>";
echo "</center>";
//echo "INSERTED SUCCESSFULY";
}
else
{
echo "<style>";

echo "body{";
echo "background-image:url( 54.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";
echo "<center>";
echo "</br></br></br></br></br></br>";

echo "</br></br></br></br>";
echo "<font size=\"30\" color=\"black\"><b>MOVIE_ID DOES NOT EXIST</b></font>";
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