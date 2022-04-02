<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.section.head')
</head>

<body>

  <div class="page-wrapper align-items-start min-vh-100" style="background-image: url('/image/bglogin.png');">

    <div class="container pt-5">
      <div class="container pt-5">
        <div class="row justify-content-center pt-5">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center mb-3">
                  <h1 class="card-title">Login</h1>
                  <img src="/image/logo.png" class="mb-3">
                  @if ($votingPeriod)
                    <div class="fs-6 badge bg-danger d-block shadow-sm">Periode voting sudah berakhir</div>
                  @endif
                  @if (session('error'))
                    <div class="fs-6 badge bg-danger d-block shadow-sm mt-2">{{ session('error') }}</div>
                  @endif
                </div>
                <form action="/" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" autofocus>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @include('layouts.section.script')
</body>

</html>
