<?php

$databaseUserName = "root";
$databasePassword = "";
$databaseHost = "localhost";
$databaseName= "todolist";
$conn = mysqli_connect($databaseHost, $databaseUserName, $databasePassword, $databaseName);

if($conn)
{}
else {
    die("<strong>Error:</strong>Could not connected");
}

?>

