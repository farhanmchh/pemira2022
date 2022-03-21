@extends('layouts/app')

@section('content')

            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
                <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kelas</li>
                    </ol>
                </nav>
                </div>
            </nav>
            <!-- End Navbar -->



            <div class="container-fluid py-4">
                <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Data Kelas</h6>
                        </div>
                        
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Id</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-30">Nama Kelas</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">XII RPL 1</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
@endsection