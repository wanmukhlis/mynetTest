<?php

include("connect.php"); 

	  $id = $_POST['id'];
      $name = $_POST['name'];
      $username = $_POST['username'];
      $ic_no = $_POST['ic_no'];
      $email = $_POST['email'];
      $user_level = $_POST['user_level'];

      date_default_timezone_set('Asia/Kuala_Lumpur');
      $date = date('Y-m-d H:i:s');

      $update = "UPDATE users SET name='$name',username='$username',ic_no='$ic_no',email='$email',modified='$date',user_level='$user_level' WHERE id = {$id}";

      if(mysqli_query($dbhandle,$update)){
        echo "Records added successfully.";
        header('Location: http://localhost/mynet/pengurus_home.php');
      } else{
        echo "ERROR: Could not able to execute $update. ". mysqli_error($dbhandle);;
      }
    
  

?>