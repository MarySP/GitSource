<?php

$databaseUserName = "root";
$databasePassword = "";
$databaseHost = "localhost";
$databaseName= "todoList";
$conn = mysqli_connect($databaseHost, $databaseUserName, $databasePassword);
if($conn)
{
    print ("Connected to Database");
}
else {
    die("<strong>Error:</strong>Could not connected");
}

?>

