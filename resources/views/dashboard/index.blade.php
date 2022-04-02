@extends('layouts.dashboard')

@section('content')
  <div class="container-fluid">
    <h1 class="fw-bold">Dashboard</h1>

    <div class="row">
      <div class="col-md-5">
        <div class="card shadow-sm">
          <div class="card-body pb-0">
            <div class="d-md-flex justify-content-center align-items-center">
              <span class="card-title fs-2 text-dark">Hasil</span>
            </div>
            <div class="countdown-container d-grid py-5 my-5 {{ $countdown ? 'd-none' : '' }}">
              <span class="countdown border-bottom border-5 mx-auto" style="font-size: 4rem"></span>
              <button class="btn-countdown btn btn-info btn-lg text-white px-5 py-3" type="button">Countdown!</button>
            </div>

            <div class="chart pb-4 pt-2 {{ $countdown ? '' : 'd-none' }}">
              <canvas id="pieChart" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-7 row">
        <div class="col-sm-6">
          <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">Kandidat</div>
            <div class="card-body">
              <div class="d-md-flex align-items-center">
                <div>
                  <h4 class="card-title">{{ $kandidat }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card shadow-sm">
            <div class="card-header bg-info text-white">Klaster Pemilih</div>
            <div class="card-body">
              <div class="d-md-flex align-items-center">
                <div>
                  <h4 class="card-title">{{ $klaster }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card shadow-sm">
            <div class="card-header bg-danger text-white">Jumlah Pemilih</div>
            <div class="card-body">
              <div class="d-md-flex align-items-center">
                <div>
                  <h4 class="card-title">{{ thousand_format($pemilih) }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card shadow-sm">
            <div class="card-header bg-success text-white">Suara Masuk</div>
            <div class="card-body">
              <div class="d-md-flex align-items-center">
                <div>
                  <h4 class="card-title">{{ thousand_format($suara_masuk) }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
