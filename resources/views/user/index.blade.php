@extends('layouts/app')

@section('content')

            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pemilih</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Reg_Number</th>
                                                <th scope="col">Password</th>
                                                <th scope="col">Kelas</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Chaerul Syawal</td>
                                                <td>001</td>
                                                <td>1L0V3U</td>
                                                <td>XII RPL 1</td>
                                                <td>Admin</td>
                                                <td>Nonaktif</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                </div>
            </div>
@endsection