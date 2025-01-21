<!DOCTYPE html>
<html lang="en">

<head>
<?php 

if (isset($_COOKIE['remember_user'])) {
  // ถ้ามีคุกกี้ 'remember_user', แสดงข้อความต้อนรับ
  echo "Welcome, " . htmlspecialchars($_COOKIE['remember_user']);
  echo "Welcome, " . htmlspecialchars($_COOKIE['firstname']);
  echo "Welcome, " . htmlspecialchars($_COOKIE['lastname']);
  echo "Welcome, " . htmlspecialchars($_COOKIE['user_id']);
  echo "Welcome, " . htmlspecialchars($_COOKIE['typ']);
  // header("Location: index.php");


} else {
  // echo "No Cookie ";
  // ถ้าไม่มีคุกกี้ ให้กลับไปที่หน้า login
}

  

?>

    <title>Login - HU </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

     <!-- General CSS Files -->
  <link rel="stylesheet" href="assets2/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets2/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
</head>

<body style="background-image: url('assets2/img/draw2.png');">
<style>
  body {
    background-color: #D4FAFC;
  background-position: 20% top;
  background-repeat: no-repeat;
  background-size: 35% auto;
  animation: mymove 6s infinite;
}

@keyframes mymove {
  0%   {background-position: 20% 10%;}  /* เริ่มต้นที่ด้านบนเล็กน้อย และห่างจากซ้าย 20% */
  50%  {background-position: 20% 90%;}  /* เคลื่อนที่ลงมาด้านล่างเล็กน้อย */
  100% {background-position: 20% 10%;}  /* กลับไปที่ตำแหน่งเริ่มต้น */
}
</style>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 login-container">
            <div class="login-brand">
              <!-- <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>
            <div class="card card-primary">
              <div class="card-header"><h4>Sign in with</h4>
              <div class="social-login">
                            <a href="<?= $url ?>" class="social-button linkedin">
                                <i class="fab fa-google"></i>
                            </a>

                            <!-- FaceBook -->
                            <a href="javascript:void(0)" onclick="fblogin()" class="social-button facebook">
                                <i class="fab fa-facebook-f"></i>

                            
                              <script>
                                window.fbAsyncInit = function() {
                                  FB.init({
                                    appId      : '925837919643060',
                                    cookie     : true,
                                    xfbml      : true,
                                    version    : 'v16.0'
                                  });
                                    
                                  FB.AppEvents.logPageView();   
                                    
                                };

                                (function(d, s, id){
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) {return;}
                                  js = d.createElement(s); js.id = id;
                                  js.src = "https://connect.facebook.net/en_US/sdk.js";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));

                                function fblogin(){
                                  FB.login(function(response){
                                    if(response.authResponse){
                                      fbAfterlogin();
                                    }
                                  });


                                }

                                function fbAfterlogin(){
                                  
                                  FB.getLoginStatus(function(response) {
                                   if (response.status === 'connected') { 
                                      FB.api('/me', function(response) {
                                        jQuery.ajax({
                                          url:'chklogin.php',
                                          type:'POST',
                                          data:'name='+response.name+'&id='+response.id,
                                          success:function(result){

                                          }
                                        });
                                      });
                                    }
                                  });
                                }
                              </script>

                            
                            <!-- End Facebook -->
                                
                            </a>
                            <a href="#" class="social-button twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                
                        </div>
                        
            </div>
            <div class="or-separator">
                          <span>Or</span>
                        </div>

              <div class="card-body">
                <!-- method="POST" ใส่ action -->
                <form method="POST" action="chklogin.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username"  class="form-control" name="username" tabindex="1" placeholder="Username" required autofocus >
                    <!-- <div class="invalid-feedback">
                      Please fill in your email
                    </div> -->
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="forgot-password.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2"  placeholder="Password" required>
                    <!-- <div class="invalid-feedback">
                      please fill in your password
                    </div> -->
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">

                  <!--เปลี่ยนให้ปุ่มเป็น button type="submit" -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                  <span> Don't have an account? <a href="register.php" class="register-link">Register</a></span>
                </form>
              </div>
            </div>

            <!-- <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
<!--[endif]-->
   <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>

    
  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
