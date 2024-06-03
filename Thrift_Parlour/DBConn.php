<?php

//server details
$server_name = (string) "localhost";
$username = (string) "root";
$password = (string) "";
$database = (string) "thriftparlour";
$port_number = (int) 3306;

// Establish connection to MySQL database
$connection = mysqli_connect( $server_name , $username, $password, $database, $port_number) or die("Couldn't connect ");

?>