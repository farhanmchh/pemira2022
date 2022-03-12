@extends('layouts/app')

@section('content')

        <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
        </div>
      </nav>
      <!-- End Navbar -->


        <div class="container-fluid py-4">
            <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Kelas</p>
                    <h4 class="mb-0">33</h4>
                    </div>
                </div>
                <div class="card-footer p-3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">group</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Jumlah Data Pemilih</p>
                    <h4 class="mb-0">2.300</h4>
                    </div>
                </div>
                <div class="card-footer p-3"> </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Kandidat</p>
                    <h4 class="mb-0">4</h4>
                    </div>
                </div>
                <div class="card-footer p-3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Suara Masuk</p>
                    <h4 class="mb-0">782</h4>
                    </div>
                </div>
                <div class="card-footer p-3"></div>
                </div>
            </div>
            </div>

            {{-- CHARTS --}}
            <div class="row mt-4">
                <div class="col-lg-4 mt-4 mb-3">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <div class="chart">
                        <canvas id="pieChart" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <h6 class="mb-0 ">Data Suara</h6>
                    </div>
                </div>
                </div>
            </div>
      
@endsection