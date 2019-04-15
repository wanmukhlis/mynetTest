<?php include("header.php"); ?>
<body>

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In

                      <button class="homebutton" id="btnHome" style="float: right;" onClick="window.location = 'user_register.php'" />Register As A User</button>
                    </div>

                </div>     
                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form action="login_action.php" method="post">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                              <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

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
