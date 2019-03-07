
<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$uid=$_SESSION['uid'];
    $id=filter($_POST['tripID']);
	

	$dbc=mysqli_connect('localhost','dmhuy','123456','online') or die("Cannot connect to Database ");
	$query="DELETE FROM trips WHERE id='".$id."'";
	$result=mysqli_query($dbc,$query);
    echo mysqli_errno($dbc) . ": " . mysqli_error($dbc). "\n";
    echo '<script type="text/javascript"> alert("The trip has been deleted!");
    window.location.href = "../index.php";
    </script>';	
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>