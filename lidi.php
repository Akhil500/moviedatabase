<html>
<?php


$movie=$_GET["hname6"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
$qry=mysqli_query($con,"select * from movie where mov_name='$movie'");
while($row=mysqli_fetch_array($qry))
{
$mid=$row['mov_id'];
}
switch($_REQUEST['button'])
{
case 'like':
echo "<style>";

echo "body{";
echo "background-image:url( 53.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";
$asd=mysqli_query($con,"update statistics set likes=likes+1 where mov_id='$mid'");
echo "<center>";
echo "</br></br></br></br></br></br></br></br></br>";


echo "<font size=50><b>YOU LIKED</b></font>";
echo "</br></br>";
echo $movie;
echo "</br></br>";
echo "<form action=\"http://localhost/menu1.html\">";
echo "<input type=\"submit\" name=\"button\" value=\"BACK\">";
echo "</center>";
echo "</form>";
break;


case 'dislike':
echo "<style>";

echo "body{";
echo "background-image:url( 54.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";
$asdf=mysqli_query($con,"update statistics set likes=likes-1 where mov_id='$mid'");
echo "<center>";
echo "</br></br></br></br></br></br></br></br></br>";

echo "<font size=50><b>DISLIKED </b></font>";
echo "</br>";
echo $movie;
echo "</br></br>";
echo "<form action=\"http://localhost/menu1.html\">";
echo "<input type=\"submit\" name=\"button\" value=\"back\">";
echo "</center>";
echo "</form>";
break;



}

?>
</html>