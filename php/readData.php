<?php
function readData($str)
{
    $strJsonFileContents = file_get_contents("config.json");
    $array = json_decode($strJsonFileContents, true);

    return ($array[$str]);
}
?>