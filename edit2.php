<?php

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");



if(isset($_GET['edit']))
{
	$sql="select * from lead_cast where w_id=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	
	$w=$_POST['w_name'];
	$s=$_POST['sex'];
	$a=$_POST['age'];
	$update="UPDATE lead_cast set w_name='$w',sex='$s',age='$a' WHERE w_id=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:w.php");
	}
	
}
?>
<!doctype html>
<html>

<body>
<form method="post">
<h1>EDIT LEAD_CAST INFORMATION</h1>
CAST_NAME:<input type="text"name="w_name" value="<?php echo $row['w_name']; ?>"><br><br>
SEX:<input type="text"name="sex" value="<?php echo $row['sex']; ?>"><br><br>
AGE:<input type="text"name="age" value="<?php echo $row['age']; ?>"><br><br>

<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="w.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

