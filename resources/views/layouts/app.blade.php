<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ADMIN | PEMIRA 2022</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="/gambar/logo.png">
    <!-- Custom CSS -->
    <link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
</head>

<body>

    <!-- Preloader - style you can find in spinners.css -->

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <!-- Topbar header - style you can find in pages.scss -->

        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">

                    <!-- Logo -->

                    <a class="navbar-brand">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="/gambar/logo.png" alt="homepage" class="dark-logo" />
                        </b>
                        <!-- Logo text -->
                        <span class="logo-text">
                            <h3 class="mt-3">Pemira 2022</h3>
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>

            </nav>
        </header>


        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/kandidat" aria-expanded="false"><i class="mdi mdi-account-network"></i><span 
                                class="hide-menu">Kandidat</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/user" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Data Pemilih</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/kelas" aria-expanded="false"><i class="mdi mdi-book"></i><span
                                    class="hide-menu">Kelas</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/logout" aria-expanded="false"><i class="mdi mdi-logout"></i><span
                                    class="hide-menu">Logout</span></a>
                        </li>
                    </ul>

                </nav>

            </div>
    
        </aside>

        <div class="page-wrapper">

          
            @yield('content')
          
        </div>
    </div>


    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>

    <script>
        //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
    labels: ["Ahmad", "Rony", "Mahmud", "Asep"],
    datasets: [{
    data: [300, 200, 100, 182],
    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
    }]
    },
    options: {
    responsive: true
    }
    });
    </script>

</body>

</html>