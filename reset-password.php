<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Reset Password &mdash; HU</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

 <!-- BG-->
 <style>
        .reset-password{
            background-image: url('assets2/img/reset.png'); 
            background-size: 600px 600px;
            background-position: 60px 70px;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 20px; /* เพิ่มระยะห่างรอบๆ รูปภาพ */
}

        .login-container {
            margin-top: 100px; /* ปรับระยะห่างจากด้านบน */
        }

        .card-primary {
        margin-left: 90px; /* เลื่อนกล่องไปทางขวา */
        width: 500px; /* ขนาดกล่องเท่าเดิม (ตัวอย่าง) */
        top: 60px;
}
    </style>


<?php


  $mID = $_GET['mID']; // ใช้ค่า mID ได้อย่างปลอดภัย
//   echo "User ID : " . $mID; //แสดง ID ที่หน้าเว็บ
// } else {
//   echo "User ID is missing!";
// }



?>



<body class="reset-password">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <!-- <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Reset Password</h4></div>

              <div class="card-body">
                <!-- <p class="text-muted">We will send a link to reset your password</p> -->

                <form method="POST" action="chkreset.php">
              
              <!-- ใส่ ID ที่รับมา แล้วทำการซ่อน -->
                <input id="myID" type="text" class="form-control pwstrength" hidden name="myID" value="<?php echo $mID; ?>">


                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="confirm-password" tabindex="3" required>
                  </div>

                  <div class="form-group">
                    <button type="submit" style="font-size: 14px;" class="btn btn-primary btn-sm btn-block" tabindex="4" >
                      Reset Password
                    </button>
                  </div>
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

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>