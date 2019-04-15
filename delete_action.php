<?php

include("connect.php"); 

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = {$id}";

if(mysqli_query($dbhandle, $sql)){
    echo "Records added successfully.";
    header('Location: http://localhost/mynet/pengurus_home.php');
} else{
	// echo($id);
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($dbhandle);;
}

?>