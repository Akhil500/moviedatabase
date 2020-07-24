<?php

$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");



if(isset($_GET['edit']))
{
	$sql="select * from theatre where tid=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	
	$t=$_POST['t_name'];
	$a=$_POST['t_area'];
	$tc=$_POST['tic_cost'];
	$update="UPDATE theatre set t_name='$t',t_area='$a',tic_cost='$tc' WHERE tid=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:the.php");
	}
	
}
?>
<!doctype html>
<html>

<body>
<form method="post">
<h1>EDIT THEATRE INFORMATION</h1>
THEATRE_NAME:<input type="text"name="t_name" value="<?php echo $row['t_name']; ?>"><br><br>
THEATRE_AREA:<input type="text"name="t_area" value="<?php echo $row['t_area']; ?>"><br><br>
TICKET_COST:<input type="text"name="tic_cost" value="<?php echo $row['tic_cost']; ?>"><br><br>

<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="the.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

