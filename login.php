    <?php
         require_once './libs/bootstrap.php';
        if( !empty($_POST['email_addr']) && !empty($_POST['pwd']) ){ 
                 $acc = new account();        
    list($status, $id) = $acc->loginCompuser($_POST['email_addr'], $_POST['pwd']);       
    if($status){            
    session::_set("UNIQUE_ID_COMP", hash::encode_data($id));            
      redirect('company/profile.php');        
    }else{            
    $output = '<div class="alert alert-block alert-danger fade in">                           
    <button data-dismiss="alert" class="close close-sm" type="button">                              
    <i class="fa fa-times"></i>                           
    </button>                            
    <strong>Oops!</strong> Incorrect Login Detail                        
    </div>';      

         }
         }
    include_once "includes/header.php"; 
    ?>
    <?php include_once "includes/nod.php"; ?>
    <div style="height:100%; background-image: url('img/landing-page.jpg'); background-size: cover;background-attachment: fixed;background-clip: content-box;/* background-size: contain; */position: absolute;width: 100%;z-index: -990999999;"></div>
    <div class="container" style="">
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Company Welcome</h2>
        <div class="login-wrap">
          <?php if(!empty($output)) echo $output; ?>
          <input type="text" class="form-control" required="required" name="email_addr" placeholder="Email Address" autofocus>
          <input type="password" size="4" maxlength="4" required="required" name="pwd" class="form-control" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
              <a data-toggle="modal" href="#myModal"> Forgot your Password? </a>
            </span>
          </label>
          <button class="btn btn-lg btn-login btn-block" name="user_login" type="submit">Sign in</button>
            <div class="registration">
              Don't have an account yet?
              <a class="" href="registration.php?type=user">
                Create an account
              </a>
            </div>
			<div class="registration">
              User account?
              <a class="" href="index.php">
                Login Here
              </a>
            </div>

          </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Request Processed</h4>
                </div>
                <div class="modal-body">
                  <p>A new PIN has been sent to your mobile number.</p>
                  <!-- <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix"> -->

                </div>
                <div class="modal-footer">
                  <!-- <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button> -->
                  <button data-dismiss="modal" class="btn btn-success" type="button">Okay</button>
                </div>
              </div>
            </div>
          </div>
          <!-- modal -->

        </form>
        
        <div class="container">
          <p style="color:white;font-size: x-large;text-shadow: white 1px 0px 8px;text-align: center;margin-top: 45px;">Wouldn't you rather turn your trash into cash? </p>
        </div>

      </div>
      <?php include_once "includes/footer.php" ?>
