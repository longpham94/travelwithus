<?php
session_start();
require_once('readData.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $uid = $_SESSION['uid'];
        $title = filter($_POST['title']);
        $tripID = filter($_POST['tripID1']);
        echo "TRIP ID ---- " . $tripID . "\n";
        $start_date = filter($_POST['start_date']);
        $end_date = filter($_POST['end_date']);
        $place = filter($_POST['place']);
        $members = filter($_POST['members']);


        $dbc=mysqli_connect(readData("host"),readData("username"),readData("password"),readData("table")) or die("Cannot connect to Database ");
        if ($tripID == 'NONE') {
            $query = "INSERT INTO trips (uid,title,start_date,end_date,place,members) values ('" . $uid . "', '" . $title . "', '" . $start_date . "', '" . $end_date . "','" . $place . "', '" . $members . "')";
            $result = mysqli_query($dbc, $query);
            echo mysqli_errno($dbc) . ": " . mysqli_error($dbc) . "\n";
            echo '<script type="text/javascript"> alert("A new trip has been created!");
    window.location.href = "../index.php";
    </script>';
        } else {
            $query = "UPDATE trips SET title = '" . $title . "', place = '" . $place . "', start_date = '" . $start_date . "', end_date = '" . $end_date . "', members = '" . $members . "' WHERE id = " . $tripID;
            echo $query . "\n";
            $result = mysqli_query($dbc, $query);
            echo mysqli_errno($dbc) . ": " . mysqli_error($dbc) . "\n";
            echo '<script type="text/javascript"> alert("The trip has been updated!");
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
 