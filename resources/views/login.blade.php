<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/gambar/logo.png">
  <title>
   LOGIN | PEMIRA 2022
  </title>
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body>
  
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('/gambar/bglogin.png');">
     
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">LOGIN</h4>
                </div>
              </div>

              <div class="card-body">
                <form role="form" class="text-start">
                @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-info w-100 my-4 mb-2">Login</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>