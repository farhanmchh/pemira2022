<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.section.head')
</head>

<body>
  @include('layouts.section.preloader')

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light mb-3">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/image/logo.png" alt="logo">
        <span class="h3">Pemira 2022</span>
      </a>
    </div>
  </nav>

  <div class="container px-sm-5 pt-5">
    <div class="container px-sm-5 pt-2">
      @yield('content')
    </div>
  </div>

  @include('layouts.section.script')
</body>

</html>
