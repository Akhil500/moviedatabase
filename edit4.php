<?php

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");



if(isset($_GET['edit']))
{
	$sql="select * from production_company where cid=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	
	$n=$_POST['name'];
	
	$update="UPDATE production_company set name='$n' WHERE cid=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:pc.php");
	}
	
}
?>
<!doctype html>
<html>

<body>
<form method="post">
<h1>EDIT PRODUCTION_COMPANY INFORMATION</h1>
PRODUCTION_COMPANY_NAME:<input type="text"name="name" value="<?php echo $row['name']; ?>"><br><br>

<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="pc.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

