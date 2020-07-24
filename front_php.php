<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");

switch($_REQUEST['button'])
{
case 'LOGIN AS ADMIN':
include('adminLogin.html');
break;
case 'LOGIN AS USER':
include('userLogin.html');
break;
}
?>
</html>