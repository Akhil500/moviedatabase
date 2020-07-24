<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"movie");
switch($_REQUEST['button'])
{
case 'Add Movie':
include('addmv.html');
break;
case 'Add Lead_cast':
include('addwor.html');
break;
case 'Add Theatre':
include('addthe.html');
break;
case 'add works_on details':
include('work.html');
break;
case 'view movie details':
include('movie.php');
break;
case 'view theatre details':
include('the.php');
break;
case 'view Lead_cast details':
include('w.php');
break;
case 'view works_on details':
include('wo.php');
break;
case 'view':
include('menu1.html');
break;
case 'back':
include('front.html');
}
?>
</html>