<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
if(isset($_GET['edit']))
{
	$sql="select * from movie where mov_id=".$_GET['edit'];
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if(isset($_POST['btn_update']))
{
	$m=$_POST['mov_name'];
	$y=$_POST['year'];
	$l=$_POST['language'];
	$g=$_POST['genere'];
	$update="UPDATE movie SET mov_name='$m',year='$y',language='$l',genere='$g' WHERE mov_id=".$_GET['edit'];
	$up=mysqli_query($con,$update);
	if(!isset($sql))
	{
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location:movie.php");
	}
	
}
?>
<!doctype html>
<html>
<body>
<form method="post">
<h1>EDIT MOVIE INFORMATION</h1>
MOVIE_NAME:<input type="text"name="mov_name" value="<?php echo $row['mov_name']; ?>"><br><br>
YEAR:<input type="text"name="year" value="<?php echo $row['year']; ?>"><br><br>
LANGUAGE:<input type="text"name="language" value="<?php echo $row['language']; ?>"><br><br>
GENERE:<input type="text"name="genere" value="<?php echo $row['genere']; ?>"><br><br>
<br><br>
<button type="submit" name="btn_update" id="btn_update" onClick="update()"><strong>Update</strong></button>
<a href="movie.php"><button type="button" value="button">Cancel</button></a>
</form>
</body>
</html>

