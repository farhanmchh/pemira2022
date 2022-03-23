@extends('layouts/app')

@section('content')
 
            <div class="container-fluid">
        
                <div class="row">

                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header bg-info text-white">Jumlah Kelas</div>
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">30</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header bg-info text-white">Jumlah Pemilih</div>
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">900</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header bg-info text-white">Kandidat</div>
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">4</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header bg-success text-white">Suara Masuk</div>
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">782</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Data Suara</h4>
                                    </div>
                                
                                </div>
                                <div class="chart pb-4 pt-2">
                                    <canvas id="pieChart" class="chart-canvas" height="170"></canvas>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
      
@endsection