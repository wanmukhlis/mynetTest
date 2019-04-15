<?php 
include("header.php"); 
include("connect.php");

?> 
<body>
  <div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-12">                    
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Pengurus Homepage
            <a href='http://localhost/mynet/register.php'><button type='button'>Register User</button></a>
            <a href='http://localhost/mynet/'><button style="float: right;" type='button'>Logout</button></a>
          </div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >

          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          <font size="4"><b>User Data</b></font>
          <table border="1">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>IC Number</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Date Modified</th>
                <th>Period (Days)</th>
                <th>User Level</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <form action="delete_action.php" method="POST">
                <?php
                $sql = mysqli_query($dbhandle,"SELECT a.id,a.name,a.username,a.ic_no,a.email,a.created,a.modified,b.description FROM users a, user_levels b WHERE a.user_level = b.id");

                while ($data = mysqli_fetch_array($sql)) {

                  $created = $data['created'];

                  date_default_timezone_set('Asia/Kuala_Lumpur');
                  $currdate = date('Y-m-d H:i:s');

                  $dateDiff = date_diff(new DateTime($created),new DateTime($currdate));
                  ?>
                  <tr>
                    <td> <?php echo $data['id']; ?> </td>
                    <td> <?php echo $data['name']; ?> </td>
                    <td> <?php echo $data['username']; ?> </td>
                    <td> <?php echo $data['ic_no']; ?> </td>
                    <td> <?php echo $data['email']; ?> </td>
                    <td> <?php 
                               $created = date_format(new DateTime($data['created']),"d/m/Y");
                               echo $created; ?> </td>
                    <td> <?php 
                              if(isset($data['modified'])){
                              $modified = date_format(new DateTime($data['modified']),"d/m/Y");
                                echo $modified; }?> </td>
                    <td> <?php echo $dateDiff->days; ?> </td>
                    <td> <?php echo $data['description']; ?> </td>
                    <td> <a href='edit.php?id=<?php echo $data['id']; ?>'><button type='button'>Edit</button></a> </td>
                    <td> <a href='delete_action.php?id=<?php echo $data['id']; ?>'><button type='button'>Delete</button></a></td>
                  </tr>
                  <?php
                }
                ?>
              </form>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div> <!-- /container -->

  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
