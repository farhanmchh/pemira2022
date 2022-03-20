<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/gambar/logo.png">
  <title>
    VOTE | PEMIRA 2022
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        {{-- <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
        <img class="navbar-brand-img h-100" src="/gambar/logo.png" alt="">
        <span class="ms-1 font-weight-bold text-white">PEMIRA 2022</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2"><br>
    <table align="center" class="nav-link text-white">
        <tr>
            <th>Nama :</th>
            <td>Chaerul Syawal</td>
        </tr>
        <tr>
            <th>Kelas :</th>
            <td>XII RPL 1</td>
        </tr>
    </table>
    
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <div class="container-fluid py-4">
            <div class="row">

                <!--   Kandidat 01   -->
                <div class="col-5">
                    <div class="card my-4" style="height: 25rem;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-center text-white text-capitalize ps-3">01</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div align="center">
                            <img src="/gambar/logo.png" alt=""><br><br>
                            <button type="button" class="btn btn-info">Visi & Misi</button>
                            <button type="button" class="btn btn-info">Vote</button>
                        </div>
                    </div>
                    </div>
                </div>
            
                <!--   Kandidat 01   -->
                <div class="col-5">
                <div class="card my-4" style="height: 25rem;">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-center text-white text-capitalize ps-3">02</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div align="center">
                        <img src="/gambar/logo.png" alt=""><br><br>
                        <button type="button" class="btn btn-info">Visi & Misi</button>
                        <button type="button" class="btn btn-info">Vote</button>
                    </div>
                </div>
                </div>
                </div>

                <!--   Kandidat 03   -->
                <div class="col-5">
                    <div class="card my-4" style="height: 25rem;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-center text-white text-capitalize ps-3">03</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div align="center">
                            <img src="/gambar/logo.png" alt=""><br><br>
                            <button type="button" class="btn btn-info">Visi & Misi</button>
                            <button type="button" class="btn btn-info">Vote</button>
                        </div>
                    </div>
                    </div>
                </div>

                <!--   Kandidat 04   -->
                <div class="col-5">
                    <div class="card my-4" style="height: 25rem;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-center text-white text-capitalize ps-3">04</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div align="center">
                            <img src="/gambar/logo.png" alt=""><br><br>
                            <button type="button" class="btn btn-info">Visi & Misi</button>
                            <button type="button" class="btn btn-info">Vote</button>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>

</main>


    
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>

  <script>
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
      //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
    labels: ["Ahmad", "Rony", "Mahmud", "Asep"],
    datasets: [{
    data: [300, 200, 100, 182],
    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
    }]
    },
    options: {
    responsive: true
    }
    });
  </script>

  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>