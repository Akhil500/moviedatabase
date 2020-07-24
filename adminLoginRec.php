<html>
<?php
echo "<style>
body{
background-image:url( 11.gif    );
background-repeat:no-repeat;
background-size:cover;
}</style>";
$user=$_GET["uname"];
$pass=$_GET["psw"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
$val =mysqli_query($con,"select * from loginadmin where username='$user' and password='$pass'");
if(mysqli_num_rows($val)==1)
{
include('menu.html');
}
else
{
echo "<center>";
echo" </br></br></br></br></br></br></br></br></br></br></br></br>";
echo "<font color=black size='100'>INVALID USER</font>";
echo "</br></br>";
echo "<form action=\"http://localhost/adminLogin.html\">";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
?>
</html>