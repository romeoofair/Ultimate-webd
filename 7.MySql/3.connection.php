<?php 

$server     = "shareddb1a.hosting.stackcp.net";
$username   = "cl18-22";
$password   = "7CE/be6tG";
$db         = "cl18-22";


// Create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// Check connection
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
}

//echo "Connected successfully";

?>