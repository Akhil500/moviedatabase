<html>
<?php
echo "<style>";
echo "body{";
echo "background-image:url(77.gif);";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";
$h=$_GET["hero"];
$y=$_GET["year"];
$g=$_GET["genere"];
//$d=$_GET["dir"];
$l=$_GET["lang"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
$query="select m.mov_name  from movie m,lead_cast w,works_on wo where m.mov_id=wo.mov_id and w.w_id=wo.w_id  ";
if($y==null||$y=="select")
{
	 $query=$query." and m.year LIKE '%' ";
}
else
{
	$query=$query." and m.year=".$y ;
}
if($l==null||$l=="select")
{
	$query=$query." and m.language LIKE '%' ";
}
else
{
	$query=$query." and m.language='".$l."' ";
}
if($g==null||$g=="select")
{
	$query=$query." and m.genere LIKE '%' ";
}
else
{
	$query=$query." and m.genere='".$g."' ";
}
if($h==null||$h=="select")
{
	$query=$query." and w.w_name LIKE '%'   ";
}
else
{
	$query=$query." and w.w_name='".$h."' and wo.type='hero' ";
}
//echo $query;
echo "<center>";
echo "<table>";
echo "</br></br>";
echo "<tr><td><font size=30\" color=\"black\"><b>MOVIE LIST</b></font>"."</td></tr>";
$niki=mysqli_query($con,$query." group by m.mov_name");
while($row=mysqli_fetch_array($niki))
{
$a=$row['mov_name'];
echo "<tr><td><a href=\"./disp.php?mov=".$row['mov_name']."\">".$a."</a></td></tr>";
}
echo "</table>";
echo "</br>";
echo "<form action=\"http://localhost/menu1.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</html>