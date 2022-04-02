@extends('layouts.vote')

@section('content')
  <div class="text-center my-3">
    <span class="fs-4 badge bg-secondary shadow">{{ $user->name }} - {{ $user->classroom->name }}</s>
  </div>

  <div class="row justify-content-center">
    @foreach ($candidates as $candidate)
      <div class="col-sm-3">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-center">
            <h1 class="text-white">{{ $candidate->number }}</h1>
          </div>
          @if ($candidate->image)
            <img class="card m-3" src="{{ asset("/storage/$candidate->image") }}" height="230"
              style="object-fit: cover;">
          @else
            <img class="card m-3" src="/image/default.png" height="230">
          @endif
          <div class="card-body">
            <div class="d-grid">
              <button type="button" class="btn btn-info text-white mb-2 btn-vimi" data-id="{{ $candidate->id }}"
                data-bs-toggle="modal" data-bs-target=".vimi">Visi & Misi</button>
              <button type="button" class="btn btn-success shadow mb-2 text-white"
                onclick="vote({{ auth()->user()->id }}, {{ $candidate->id }}, '{{ $candidate->number }}')">Vote</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  {{-- Modal Vision & Mission --}}
  <div class="modal fade vimi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Vission & Mission <span class="number-vimi-label"></span></h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5>Vission</h5>
          <div class="vission-container">

          </div>

          <h5>Mission</h5>
          <div class="mission-container">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
