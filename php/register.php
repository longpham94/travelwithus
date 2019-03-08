<?php
include 'api.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = filter($_POST['email']);
	$password = filter($_POST['password']);
	$fname = filter($_POST['fname']);
	$lname = filter($_POST['lname']);
	$phone = filter($_POST['phone']);
	$password = md5($password);


	$dbc = mysqli_connect('localhost', 'dmhuy', '123456', 'online') or die("Cannot connect to Database ");
	$query = "SELECT * FROM users WHERE email='" . $username . "'";
	$result = mysqli_query($dbc, $query);
	if (mysqli_num_rows($result) == 1) {
		//Method: GET start
		// $get_data = callAPI('GET', 'https://reqres.in/api/users/2', false);
		// $response = json_decode($get_data, true);
		// //$errors = $response['response']['errors'];
		// $data = $response['data'];
		// echo json_encode($data);
		// Method: GET end

		// Method: POST start
		$data_array =  array(
			"name"        => "morpheus",
			"job123123123123"     => "leader",
		);
		$make_call = callAPI('POST', 'https://reqres.in/api/users', json_encode($data_array));
		$response = json_decode($make_call, true);
		//$errors   = $response['response']['errors'];
		$data = $response;
		echo json_encode($data);
		// Method: POST end

		echo '<script type="text/javascript"> alert("User already existed");
		    window.location.href = "../index.php";
		</script>';
	} else {
		$query = "INSERT INTO users (fname,lname,phone,email,password) values ('" . $fname . "', '" . $lname . "','" . $phone . "','" . $username . "','" . $password . "')";
		$result = mysqli_query($dbc, $query);
		echo mysqli_errno($dbc) . ": " . mysqli_error($dbc) . "\n";
		echo '<script type="text/javascript"> alert("User has been added into the system, please login and enjoy!");
        window.location.href = "../index.php";
		</script>';
	}
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);

	return ($str);
}
 