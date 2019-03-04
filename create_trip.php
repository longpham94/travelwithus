
<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$uid=$_SESSION['uid'];
    $title=filter($_POST['title']);
    $start_date=filter($_POST['start_date']);
    $end_date=filter($_POST['end_date']);
    $place=filter($_POST['place']);
	$members=filter($_POST['members']);
	

	$dbc=mysqli_connect('localhost','dmhuy','123456','online') or die("Cannot connect to Database ");
	$query="INSERT INTO trips (uid,title,start_date,end_date,place,members) values ('".$uid."', '".$title."', '".$start_date."', '".$end_date."','".$place."', '".$members."')";
	$result=mysqli_query($dbc,$query);
    echo mysqli_errno($dbc) . ": " . mysqli_error($dbc). "\n";
    echo '<script type="text/javascript"> alert("A new trip has been created!");
    window.location.href = "index.php";
    </script>';	
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>