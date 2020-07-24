<html>
<?php

$asdfg=$_GET["mov"];
echo "<style>";

echo "body{";
echo "background-image:url($asdfg.gif);";
echo "background-repeat:no-repeat;";
echo "background-size:cover;";
echo "</style>";


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

$val=mysqli_query($con,"select * from movie where mov_name='$asdfg'");
echo "</br></br></br></br></br></br></br>";
echo "<center>";
echo "<table border=1  bgcolor=\"#FFFFFF\">";
echo "<font color=\"white\">";
echo "<tr><td>"."MOV_ID"."</td><td>"."MOV_NAME"."</td><td>"."YEAR"."</td><td>"."LANGUAGE"."</td><td>"."GENERE"."</td><td>"."AVERAGE_RATING"."</td></tr>";
while($row=mysqli_fetch_array($val))
{
$aaa=$row['mov_id'];

$the=$row['mov_name'];	
echo "<tr><td>".$row['mov_id']."</td><td>".$row['mov_name']."</td><td>".$row['year']."</td><td>".$row['language']."</td><td>".$row['genere']."</td><td>".$row['avg_stars']."</td></tr>";
}
echo "</font>";
echo "</table>";


echo "</br>";
echo "<form action=\"http://localhost/lidi.php\">";
echo "<input type=\"submit\" name=\"button\" value=\"like\" style=\"height: 40px; width: 100px\">";
echo "                                 ";
 echo "<input type=\"submit\" name=\"button\" value=\"dislike\" style=\"height: 40px; width: 100px\">";
echo "<input type=\"hidden\" name=\"hname6\" value=\"$asdfg\">";
echo "</form>";
echo "</br>";




echo "<form action=\"http://localhost/trailer.php\">";
echo "<input type=\"hidden\" name=\"hname7\" value=\"$asdfg\">";
echo "<input type=\"submit\" name=\"button\"  value=\"TRAILER\"  style=\"height: 50px; width: 300px\">";
echo "</form>";

echo "</br>";


echo "<form action=\"http://localhost/com.php\">";
echo "<input type=\"text\" name=\"com\" placeholder=\"enter your comments\">";
echo "<input type=\"hidden\" name=\"hname8\" value=\"$asdfg\">";
echo "<input type=\"submit\" name=\"button\"  value=\"submit\">";
echo "</form>";
echo "</center>";
echo "</br>";
?>

<form action="http://localhost/rating.php">
	<center>
<table  border=1 width=200px bgcolor=#FFFFFF cellpadding="5" cellspacing="5">
	<tr><th>SELECT RATING</th></tr>
	<input type="hidden" name="rat" value="<?php echo $asdfg ; ?>">

<tr><td><input type="radio" name="camp" value="1" checked>1
<input type="radio" name="camp" value="2">2 
<input type="radio" name="camp" value="3">3 
<input type="radio" name="camp" value="4">4 
<input type="radio" name="camp" value="5">5 </td></tr><br></table>
<input type="submit" name="button"  value="submit" style="height:30px; width:200px">

</form>
</center>

<?php
$niki=mysqli_query($con,"select * from statistics where mov_id='$aaa'");
echo "</br>";
echo "<center>";
echo "<table border=1  bgcolor=\"#FFFFFF\">";
echo "<font color=\"white\">";
echo "<tr><td>"."LIKES"."</td><td>"."COMMENTS"."</td></tr>";
while($row=mysqli_fetch_array($niki))
{
echo "<tr><td>".$row['likes']."</td><td>".$row['comment']."</td></tr>";
}
echo "</table>";
echo "</center>";




echo "<form action=\"http://localhost/menu1.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\"  style=\"height: 30px; width: 80px\">";
echo "</form>";
//break;
//}

?>
</html>
