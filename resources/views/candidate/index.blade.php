@extends('layouts.dashboard')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Kandidat</h4>
            @if (session('success'))
              <span class="fs-6 badge bg-success">{{ session('success') }}</span>
            @endif
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($candidates as $candidate)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        @if ($candidate->image)
                          <img src="/storage/{{ $candidate->image }}" class="rounded-circle" width="100" height="100"
                            style="object-fit: cover">
                        @else
                          <img src="/image/default.png" class="rounded-circle" width="100">
                        @endif
                      </td>
                      <td>{{ $candidate->number }}</td>
                      <td>{{ $candidate->name }}</td>
                      <td>
                        <button class="btn btn-warning text-dark edit-candidate" data-id="{{ $candidate->id }}"
                          data-image="{{ $candidate->image }}" data-bs-toggle="modal" data-bs-target="#editCandidate">
                          <i class="mdi mdi-account-edit"></i>
                        </button>
                        <button class="btn btn-info text-white btn-vimi" data-id="{{ $candidate->id }}"
                          data-bs-toggle="modal" data-bs-target="#vimi">
                          <i class="mdi mdi-file-document-box"></i>
                          <span>Visi & Misi</span>
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Edit --}}
  <div class="modal fade" id="editCandidate" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Edit kandidat</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/candidate/update_candidate/" method="POST" id="editCandidate" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-sm">
                <input type="hidden" name="old_image" class="old-image">
                <div class="mb-2">
                  <label class="form-label">Nama</label>
                  <input type="text" name="name" class="name-candidate form-control">
                </div>
                <div class="mb-2">
                  <label class="form-label">Gambar baru</label>
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary px-5 update-candidate" type="submit">
              <i class="mdi mdi-content-save"></i>
              <span>Update</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  {{-- Modal Vision & Mission --}}
  <div class="modal fade" id="vimi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Visi & Misi</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Visi</h5>
          <div class="vission-container">
            
          </div>

          <h5>Misi</h5>
          <div class="mission-container">
            
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning px-5 text-dark edit-vimi" data-bs-toggle="modal" data-bs-dismiss="modal"
            data-bs-target="#editVimi">
            <i class="mdi mdi-pencil"></i>
            <span>Edit</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Edit Vission & Mission --}}
  <div class="modal fade" id="editVimi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Edit Visi & Misi <i>(Auto save)</i></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" id="editVimi">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <h5>Visi</h5>
              <input id="vission" type="hidden" name="vission">
              <trix-editor input="vission" class="vission"></trix-editor>
            </div>

            <div class="mb-3">
              <h5>Misi</h5>
              <input id="mission" type="hidden" name="mission">
              <trix-editor input="mission" class="mission"></trix-editor>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
