<?php

$hostname="localhost";
$dbname="registration";
$db_uname="root";
$db_pass="";

// $hostname = "https://localhost/news-site";
$conn =mysqli_connect($hostname,$db_uname,$db_pass,$dbname);

if($conn)
{
    // echo "Connection Succesful";
}
else
{
    echo "Connection Failed";
    die();
}

// session_start();

?>