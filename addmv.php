<html>
<?php
echo "<style>";

echo "body{";
echo "background-image:url( 52.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "}</style>";

$mid=$_GET["mov_id"];
$mna=$_GET["mov_name"];
$myea=$_GET["year"];
$lang=$_GET["language"];
$gene=$_GET["genere"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

switch($_REQUEST['button'])
{
case 'submit':
$B=mysqli_query($con,"select * from movie");
$count1=mysqli_num_rows($B);
$val1=mysqli_query($con,"insert into movie(mov_id,mov_name,year,language,genere)values('$mid','$mna','$myea','$lang','$gene')");
$a=mysqli_query($con,"select * from movie");
$count2=mysqli_num_rows($a);
if($count2==$count1+1)
{
$val2=mysqli_query($con,"insert into statistics values('$mid',0,'')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "</br></br></br></br></br></br></br></br>";
echo "<font size=\"25\"  style=\"height: 40px; width: 100px\" color=\"black\"><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/123.php\">";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
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
echo "</br></br></br></br></br></br></br></br></br>";

echo "</br></br></br></br></br></br></br></br>";
echo "<font size=\"25\"  style=\"height: 40px; width: 100px\" color=\"black\"><b> MOVIE_ID ALREADY EXISTS<b></font>";
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