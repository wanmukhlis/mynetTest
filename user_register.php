<?php include("header.php"); ?>
<body>

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-12">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Register As A User</div>

                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form action="user_register_action.php" method="post">
                        <div>Name</div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <input id="name" type="text" class="form-control" name="name" value="" placeholder="name">                                        
                        </div>

                        <div>Username</div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <input id="username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                        </div>

                        <div>IC Number</div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <input id="ic_no" type="text" class="form-control" name="ic_no" value="" placeholder="ic_no">                                        
                        </div>

                        <div>Email</div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <input id="email" type="text" class="form-control" name="email" value="" placeholder="email">                                        
                        </div>
                        <div><i>*Default password for the new registered user is '12345'</i></div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                              <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Register</button>

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
