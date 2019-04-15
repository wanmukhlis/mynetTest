<?php 
include("header.php");
include("connect.php"); 

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = mysqli_query($dbhandle,"SELECT * FROM users WHERE id = {$id}");

  while ($data = mysqli_fetch_array($sql)) {
  // echo $data['name'];

    ?>
    
  
  <html>
  <body>

    <div class="container">    
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-12">                    
        <div class="panel panel-info" >
          <div class="panel-heading">
            <div class="panel-title">Edit</div>
          </div>     
          <div style="padding-top:30px" class="panel-body" >

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

            <form action="user_edit_action.php" method="post">
              <div>Name</div>
              <div style="margin-bottom: 25px" class="input-group">
                <input id="name" type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" placeholder="name"> 
                <input id="id" type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" placeholder="name">                                        
              </div>

              <div>Username</div>
              <div style="margin-bottom: 25px" class="input-group">
                <input id="username" type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" placeholder="username">                                        
              </div>

              <div>IC Number</div>
              <div style="margin-bottom: 25px" class="input-group">
                <input id="ic_no" type="text" class="form-control" name="ic_no" value="<?php echo $data['ic_no']; ?>" placeholder="ic_no">                                        
              </div>

              <div>Email</div>
              <div style="margin-bottom: 25px" class="input-group">
                <input id="email" type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" placeholder="email">                                
              </div>

              <div>Password</div>
              <div style="margin-bottom: 25px" class="input-group">
                <input id="password" type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>" placeholder="password">                                
              </div>

              <div>User Level</div>
              <select name="user_level">
                <option value="1">Pengurus</option>
                <option value="2">Ahli</option>
              </select>
              <div style="margin-top:10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls">
                  <button type="submit" id="btn-update" name="btn-updatee" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Submit</button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- /container -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
  <?php
}
}
?>