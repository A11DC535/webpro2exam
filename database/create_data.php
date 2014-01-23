<?php
$con=mysqli_connect("127.0.0.1","root","1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE webpro2exam";
if (mysqli_query($con,$sql))
  {
  echo "Database webpro2exam created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
?> 