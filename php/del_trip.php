<?php
session_start();
require_once('readData.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$uid = $_SESSION['uid'];
		$id = filter($_POST['tripID']);


		$dbc=mysqli_connect(readData("host"),readData("username"),readData("password"),readData("table")) or die("Cannot connect to Database ");
		$query = "DELETE FROM trips WHERE id='" . $id . "'";
		$result = mysqli_query($dbc, $query);
		echo mysqli_errno($dbc) . ": " . mysqli_error($dbc) . "\n";
		echo '<script type="text/javascript"> alert("The trip has been deleted!");
    window.location.href = "../index.php";
    </script>';
	}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);

	return ($str);
}
 