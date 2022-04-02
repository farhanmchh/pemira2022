@extends('layouts.dashboard')

@section('content')
  <div class="container-fluid">
    <div class="row">

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row justify-content-between">
              <div class="col-sm-3">
                <h4 class="card-title">Partisipan</h4>
              </div>
              <div class="col-sm-3">
                <select name="" class="form-select text-center classroom">
                  <option></option>
                  @foreach ($classrooms as $classroom)
                    @if (Request('filter') == $classroom->name)
                      <option value="{{ $classroom->name }}" selected>{{ $classroom->name }}</option>
                    @else
                      <option value="{{ $classroom->name }}">{{ $classroom->name }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody class="row-container">
                  @if (Request('filter'))
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                          <i
                            class="fs-3 mdi {{ $user->status
                                ? 'mdi-checkbox-marked-circle-outline text-success'
                                : 'mdi-checkbox-blank-circle-outline text-danger' }}">
                          </i>
                        </td>
                      </tr>
                    @endforeach
                  @else
                  <tr>
                    <th colspan="3">Filter terlebih dahulu</th>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
