<?php
function readData($str)
{
    // New readData config: START
    $myObj->host = "localhost";
    $myObj->username = "root";
    $myObj->password = "hitachi";
    $myObj->table = "online";

    $myJSON = json_encode($myObj);

    $obj = json_decode($myJSON);
    return $obj->{$str};
    // New readData config: END
    
    // $strJsonFileContents = file_get_contents("./config.json");
    // $array = json_decode($strJsonFileContents, true);

    // return ($array[$str]);
}
 
