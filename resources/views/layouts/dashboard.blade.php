<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  @include('layouts.section.head')
</head>

<body>

  @include('layouts.section.preloader')

  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    @include('layouts.section.sidebar')

    <div class="page-wrapper">
      @yield('content')
    </div>
  </div>

  @include('layouts.section.script')

</body>

</html>
