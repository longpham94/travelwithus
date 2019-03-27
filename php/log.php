
<?php
session_start();
require_once('readData.php');

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	//connect to FireBase Service
	$url = 'http://localhost:3000/user/signin';
	$data = array('email' => $username, 'password' => $password);	
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/json",
			'method'  => 'POST',
			'content' => json_encode($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { 
		echo '<script type="text/javascript"> alert("Unable to login, please try again later!");
		window.location.href = "../index.php";
		</script>';
	 }
	 else {
		$extract_data = json_decode($result, true);
		$return_code = $extract_data['returnCode'];
		$message = $extract_data['message'];
		if ($return_code == 'OK'){
			$password=md5($password);
			
			$dbc=mysqli_connect(readData("host"),readData("username"),readData("password"),readData("table")) or die("Cannot connect to Database ");
			$query="SELECT * FROM users WHERE email='".$username."' AND password='".$password."' LIMIT 1";
			$result=mysqli_query($dbc,$query);
			if(mysqli_num_rows($result)==1)                         
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['username']=$username;
				$_SESSION['uid']=$row['id'];	
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid Credential, please check!");
				window.location.href = "../index.php";
				</script>';
			}
		}
		else {
			echo '<script type="text/javascript"> alert("'.$message.'");
			window.location.href = "../index.php";
			</script>';
		}
	 }
	//end connect to FireBase Service

}

if(isset($_SESSION['username'])){

	$uname=$_SESSION['username'];
	header("Location: ../index.php");
	// if($uname=='admin@example.com'){
	// 	header("Location: admin.php");
	// }
	// else{
	// 	header("Location: fandom.php");
	// }
}
function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>