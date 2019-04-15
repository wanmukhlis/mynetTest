<?php

include("connect.php"); 

$name=$_POST['name']; 
$username=$_POST['username']; 
$ic_no=$_POST['ic_no']; 
$email=$_POST['email']; 
$user_level=$_POST['user_level']; 

date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date('Y-m-d H:i:s');	

$sql = "INSERT INTO users (name, username, ic_no, email, password, created, user_level) 
		VALUES ('$name', '$username', '$ic_no','$email', '12345', '$date', '$user_level')";

if(mysqli_query($dbhandle, $sql)){
    echo "Records added successfully.";
    header('Location: http://localhost/mynet/pengurus_home.php');
} else{
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($dbhandle);;
}

?>