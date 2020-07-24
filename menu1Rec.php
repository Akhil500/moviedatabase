<html>
<head>
<style type=\"text/css\">
li{liststyle-type: none; display: inline; padding: 7px; tex-allign: center;}
li:hover {background-color:yellow}
</style>
</head>
<?php



$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

switch($_REQUEST['button'])
{
	
case 'QUERY':
include('query.php');
break;


case 'view Movie':

echo "<style >";

echo "body{";
echo "background-image:url( 36.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "h1{
color=#000000;
}";
echo "</style>";
$qry5=mysqli_query($con,"select * from movie");
echo "<center>";
echo "</br></br></br></br></br></br></br></br></br></br><h1><font size=40><b>MOVIE LIST</b></h1></font>";
echo "<table>";
while($row=mysqli_fetch_array($qry5))
{
$mov=$row['mov_name'];
echo "<tr><td><a href=\"./disp.php ?mov=".$row['mov_name']."\">".$mov."</a></td></tr>";
echo "</form>";
echo "   ";
}
echo "<form action=\"http://localhost/movie/menu1.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" style=\"float: right;\" >";
echo "</form>";
break;
echo "</br>";
echo "</table>";
echo "</center>";



case 'Find Movie':
echo "<style>";
echo "body{";
echo "background-image:url(34.gif);";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";
echo "<form action=\"http://localhost/movie/findm.php\">";

$qry=mysqli_query($con,"select distinct(w_name) from lead_cast w,works_on wo where wo.type='hero' and w.w_id=wo.w_id");
echo "<center>";
echo "</br></br><h1>MOVIE SELECTION</h1></br></br>";
echo "by hero:";
echo "<select name=\"hero\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($qry))
{
$hname=$row['w_name'];
echo "<option value=\"$hname\">$hname</option>";
}
echo "</select>";

$qry1=mysqli_query($con,"select distinct(year) from movie");
echo "<center>";
echo "by year:   ";
echo "<select name=\"year\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($qry1))
{
$hname1=$row['year'];
echo "<option value=\"$hname1\">$hname1</option>";
}
echo "</select>";

$qry2=mysqli_query($con,"select distinct(genere) from movie");
echo "<center>";
echo "by genere:   ";
echo "<select name=\"genere\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($qry2))
{
$hname2=$row['genere'];
echo "<option value=\"$hname2\">$hname2</option>";
}
echo "</select>";


$qry4=mysqli_query($con,"select distinct(language) from movie");
echo "<center>";
echo "by language:   ";
echo "<select name=\"lang\">";
echo "<option value=\"select\"> </option>";
while($row=mysqli_fetch_array($qry4))
{
$hname4=$row['language'];
echo "<option value=\"$hname4\">$hname4</option>";
}
echo "</select>";
echo "</br><input type=\"submit\" name=\"button\"  value=\"submit\">";
echo"</form>";
echo "<form action=\"http://localhost/movie/menu1.html\">";
echo "</br><input type=\"submit\" name=\"button\"  value=\"back\">";
echo "</form>";
echo "</center>";
break;


case 'view Theatre':
echo "<style>";
echo "body{";
echo "background-image:url( 18.gif    );";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "h1{
color=#000000;
}";
echo "</style>";
echo "<form action=\"http://localhost/movie/findt.php\">";
$qry10=mysqli_query($con,"select distinct(t_area) from theatre");
echo "<center>";
echo "</br></br></br></br></br></br></br>";
echo "<b>enter area: </b>  ";
echo "<select name=\"are\">";
echo "<option value=\"  \"> </option>";
while($row=mysqli_fetch_array($qry10))
{
$hname10=$row['t_area'];
echo "<option value=\"$hname10\">$hname10</option>";
}
echo "</select>";
echo "</br></br>";
echo "</br><input type=\"submit\" name=\"button\"  value=\"submit\" style=\"height: 40px; width: 100px\">";
echo "</center>";
echo "</form>";
echo "</br>";
echo "<center>";
echo "<form action=\"http://localhost/movie/menu1.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
break;

case 'back':
include('front.html');
break;
}
?>
</html>