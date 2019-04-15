<?php

include("connect.php"); 

$name=$_POST['name']; // password sent from form 
$username=$_POST['username']; // username sent from form 
$ic_no=$_POST['ic_no']; // password sent from form 
$email=$_POST['email']; // password sent from form 
$user_level=$_POST['user_level']; // password sent from form 

$date = date('Y-m-d H:i:s');	

$sql = "INSERT INTO users (name, username, ic_no, email, password, created, user_level) 
		VALUES ('$name', '$username', '$ic_no','$email', '12345', '$date', '2')";

if(mysqli_query($dbhandle, $sql)){
    echo "Records added successfully.";
    header('Location: http://localhost/mynet/');
} else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($dbhandle);;
}

?>