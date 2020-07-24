<?php

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");



if(isset($_GET['edit']))
{
	if(isset($_GET['edit1']))
	{
		$e=$_GET['edit'];
		$e1=$_GET['edit1'];
	    $sql="select * from works_on where mov_id='$e' and w_id='$e1'" ;
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
	}
}
if(isset($_POST['btn_update']))
{
	
	$t=$_POST['type'];
	
	$update="UPDATE works_on set type='$t' where mov_id='$e' and w_id='$e1'";
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:wo.php");
	}
	
}
?>
<!doctype html>
<html>

<body>
<form method="post">
<h1>EDIT WORKS_ON INFORMATION</h1>
WORKER_TYPE:<input type="text"name="type" value="<?php echo $row['type']; ?>"><br><br>

<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="wo.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

