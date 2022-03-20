@extends('layouts/app')

@section('content')
  <div class="container-fluid py-4">
    <div class="bg-gradient-info shadow-primary border-radius-lg pt-3 pb-3 mb-5">
      <h5 class="text-white text-capitalize ps-3">Dashboard</h5>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="mb-3">
            <div class="card z-index-2">
              <div class="card-body">
                <h5 class="mb-3">Data Suara</h5>
              </div>
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-white shadow-dark border-radius-lg py-3 pe-1">
                  <div class="chart">
                    <canvas id="pieChart" class="chart-canvas" height="170"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
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
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
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
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
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
      </div>
    </div>
  </div>
@endsection
