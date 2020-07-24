<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

if(isset($_GET['delete']))
{
	$del=$_GET['delete'];
	$sql="delete from movie where mov_id='$del'";
	$res=mysqli_query($con,$sql)  or die("FAILED".mysqli_error());
	echo "<meta http-equiv='refresh' content='0;url=movie.php'>";
}
?>
</html>
