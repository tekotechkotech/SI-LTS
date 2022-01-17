<?php
include "../build/config.php" ;
include "../build/functions.php" ;
include "../template/t_atas.php" ;
?>
  <title>SIAKAD PNC | Log in</title>

<?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "gagal") {
            echo "<script>alert('Username Atau Password Salah'); document.location.href = 'index.php'; </script>";
          } else if ($_GET['pesan'] == "logout") {
            echo "<script>alert('Telah Berhasil logout'); document.location.href = 'index.php'; </script>";
          }
        }
      ?>

      
      <body class="hold-transition login-page">
      <div class="login-box" >
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <img src="../dist/logopnc.png" style="width: 100px;">
            <h1>SI-<b>LTS</b> PNC</h1>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Sistem Informasi <br> Legalisasi Online dan Tracer Study</p>
      
            <form action="c.php" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" name="user">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fa fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group">
                              <input type="password" class="form-control" placeholder="Password" name="pass" required="">
                              <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-key"></span>
                              </div>
                            </div></div>
                              <div class="form-group"><br>
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="customSwitch1" onclick="myFunction()">
                                  <label class="custom-control-label" for="customSwitch1"></label>Tampilkan Password
                                </div>
                              </div>
                            <!-- SHOW HIDE PASSWORD -->
<script>
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
              
              <div>
                
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.login-box -->
      
<?php
include "../template/t_bawah.php" ;?>
</body>
</html>
