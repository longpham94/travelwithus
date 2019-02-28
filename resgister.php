
<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['email']);
    $password=filter($_POST['password']);
    $fname=filter($_POST['fname']);
    $lname=filter($_POST['lname']);
    $phone=filter($_POST['phone']);
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
        echo '<script type="text/javascript"> alert("User has been added into the system, please login and enjoy!");
        //window.location.href = "index.php";
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