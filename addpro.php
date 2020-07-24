<html>
<?php
echo "<style>";

echo "body{";
echo "background-image:url( 52.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "}</style>";

$cid=$_GET["cid"];
$nam=$_GET["name"];
$mid=$_GET["mov_id"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");


switch($_REQUEST['button'])
{
case 'submit':
$q=mysqli_query($con,"select * from movie where mov_id='$mid'");
while($row=mysqli_fetch_array($q))
{
		//$mna=$row['mov_name'];
}
$mna=$row['mov_name'];
$h=mysqli_query($con,"select * from production_company");
$i=mysqli_num_rows($h);
mysqli_query($con,"insert into production_company values('$cid','$nam','$mid','$mna')");

$j=$i+1;
$hh=mysqli_query($con,"select * from production_company");
$ii=mysqli_num_rows($hh);
if( $ii==$j)
{
echo "</br></br></br></br></br></br></br></br></br>";

echo "</br></br></br></br></br></br></br></br></br>";
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"30\" color=\"black\"><b>INSERTED SUCCESSFULLY</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/menu.html\">";

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

echo "</br></br></br></br></br></br></br></br></br>";
echo "<font size=\"30\" color=\"black\"><b>MOVIE_ID DOES NOT EXIST</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/menu.html\">";
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