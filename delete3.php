<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

if(isset($_GET['delete']))
{
	if(isset($_GET['delete1']))
	{
	$del=$_GET['delete'];
	$del1=$_GET['delete1'];
	$sql="delete from works_on where mov_id='$del' and w_id='$del1'";
	$res=mysqli_query($con,$sql)  or die("FAILED".mysqli_error());
	echo "<meta http-equiv='refresh' content='0;url=wo.php'>";
	}
}
?>
</html>
