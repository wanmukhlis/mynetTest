<?php
include("connect.php"); 

$username=$_POST['username']; // username sent from form 
$password=$_POST['password']; // password sent from form 

$sql = mysqli_query($dbhandle,"SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'");

$data = $sql->fetch_assoc();

if($data)
  {//check if found username and password
    if($data['user_level'] == "1")
    {
      header('Location: http://localhost/mynet/pengurus_home.php');
    }
    elseif($data['user_level'] == "2")
    {
      $id = $data['id'];
      $_SESSION["id"] = $id;
      header("Location: http://localhost/mynet/user_home.php?id=".$id);
    }

  }
  else
  {
    echo "WRONG USERNAME OR PASSWORD!";
  }

?>