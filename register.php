
<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['email']);
    $password=filter($_POST['password']);
    $fname=filter($_POST['fname']);
    $lname=filter($_POST['lname']);
	$phone=filter($_POST['phone']);
	$firebase_password=$password;
	$password=md5($password);
	

	$dbc=mysqli_connect('localhost','dmhuy','123456','online') or die("Cannot connect to Database ");
	$query="SELECT * FROM users WHERE email='".$username."'";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)                         
	{
        echo '<script type="text/javascript"> alert("User already existed");
        window.location.href = "index.php";
		</script>';	
	}
	else
	{
        $query="INSERT INTO users (fname,lname,phone,email,password) values ('".$fname."', '".$lname."','".$phone."','".$username."','".$password."')";
        $result=mysqli_query($dbc,$query);
		echo mysqli_errno($dbc) . ": " . mysqli_error($dbc). "\n";
		$url = 'http://localhost:3000/user/create';
		$data = array('email' => $username, 'password' => $firebase_password);	
		$options = array(
			'http' => array(
				'header'  => "Content-type: application/json",
				'method'  => 'POST',
				'content' => json_encode($data)
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }
        echo '<script type="text/javascript"> alert("Congratulations! Welcome to our trips. A Validation email has been sent to '.$username.', please check your inbox.");
        window.location.href = "index.php";
		</script>';	
        
	}
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>
