<?php

$host="localhost";
$username="root";
$password="";
$database="course";

// $conn= mysqli_connect("localhost", "root", "", "course");
$conn=mysqli_connect($host, $username, $password, $database);

if(!$conn)
{
  echo "Connection Failed";
}
?>