<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="/gambar/logo.png">
  <title>
    VOTE | PEMIRA 2022
  </title>
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body background="/gambar/bglogin.png">
    <nav class="navbar navbar-light bg-primary sticky-top">
        <a class="navbar-brand">
          <img src="/gambar/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          <strong class="ms-2 text-white">PEMIRA 2022</strong>
        </a>
        <form class="form-inline text-white"> 
                <td>Chaerul Syawal</td>
                <td>XII RPL 1</td>   
          </form>
      </nav>

  <main class="container py-4">
            <div class="row">

                <!--   Kandidat 01   -->
                <div class="col-md-3">
                    <div class="card my-4" style="height: 27rem;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-center text-white text-capitalize ps-3">01</h6>
                        </div>
                    </div>
                    <img class="card-img-top mt-2 ms-2" style="width: 15rem" src="/gambar/knd1.jpg">
                    <div class="card-body px-0 pb-2">
                        <div align="center">
                            <button type="button" class="btn btn-warning">Visi & Misi</button><br>
                            <button type="button" class="btn btn-success">Vote</button>
                        </div>
                    </div>
                    </div>
                </div>
            

                <!--   Kandidat 02   -->
                <div class="col-md-3">
                <div class="card my-4" style="height: 27rem;">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-center text-white text-capitalize ps-3">02</h6>
                    </div>
                </div>
                <img class="card-img-top mt-2 ms-2" style="width: 15rem" src="/gambar/knd2.png">
                <div class="card-body px-0 pb-2">
                    <div align="center">
                        <button type="button" class="btn btn-warning">Visi & Misi</button><br>
                        <button type="button" class="btn btn-success">Vote</button>
                    </div>
                </div>
                </div>
                </div>


                <!--   Kandidat 03   -->
                <div class="col-md-3">
                    <div class="card my-4" style="height: 27rem;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-center text-white text-capitalize ps-3">03</h6>
                        </div>
                    </div>
                    <img class="card-img-top mt-2 ms-2" style="width: 15rem" src="/gambar/knd3.jpg">
                    <div class="card-body px-0 pb-2">
                        <div align="center">
                            <button type="button" class="btn btn-warning">Visi & Misi</button><br>
                            <button type="button" class="btn btn-success">Vote</button>
                        </div>
                    </div>
                    </div>
                </div>

                <!--   Kandidat 04   -->
                <div class="col-md-3">
                    <div class="card my-4" style="height: 27rem;">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-center text-white text-capitalize ps-3">04</h6>
                        </div>
                    </div>
                    <img class="card-img-top mt-2 ms-2" style="width: 15rem" src="/gambar/knd4.jpg">
                    <div class="card-body px-0 pb-2">
                        <div align="center">
                            <button type="button" class="btn btn-warning">Visi & Misi</button><br>
                            <button type="button" class="btn btn-success">Vote</button>
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