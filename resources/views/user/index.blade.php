@extends('layouts/app')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Data Pemilih</h6>
            </div>

          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center text-center mb-0">
                <thead>
                  <tr>
                    <th class="text-secondary text-xs font-weight-bolder">NO</th>
                    <th class="text-secondary text-xs font-weight-bolder">NAME</th>
                    <th class="text-secondary text-xs font-weight-bolder">USERNAME</th>
                    <th class="text-secondary text-xs font-weight-bolder">CLASSROOM</th>
                    <th class="text-secondary text-xs font-weight-bolder">STATUS</th>
                    <th class="text-secondary text-xs font-weight-bolder">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-xs font-weight-bold mb-0">1</td>
                    <td class="text-xs mb-0">Mochamad Farhan</td>
                    <td class="text-xs mb-0">10101010</td>
                    <td class="text-xs mb-0">XII RPL 1</td>
                    <td class="align-middle text-sm">
                      <span class="badge badge-sm bg-gradient-success">Sudah Memilih</span>
                    </td>
                    <td class="align-middle">
                      <a href=""><i class="material-icons opacity-10">edit</i></a>
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
