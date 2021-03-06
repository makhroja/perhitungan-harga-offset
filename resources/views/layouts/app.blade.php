<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Abata Printing Group</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
        href="{{ asset('/shards-dashboard/styles/shards-dashboards.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/shards-dashboard/styles/extras.1.1.0.min.css') }}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- DataTable -->
    <link rel="stylesheet" href="{{url('/assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{url('/assets/css/responsive.bootstrap4.min.css') }}">
</head>

<body class="h-100">
    <div class="color-switcher-toggle animated pulse infinite">
        <i class="material-icons">call</i>
    </div>
    {{-- Main Layout --}}
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            @yield('sidebar')
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    @include('layouts.main_navbar')
                </div>
                <!-- / .main-navbar -->

                {{-- Notification --}}
                @include('layouts.notification')

                {{-- Main Content --}}

                @yield('content')

                {{-- End Main Content --}}
                {{-- <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                    <span class="copyright ml-auto my-auto mr-2">Copyright ?? 2018
                        <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
                    </span>
                </footer> --}}
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
            <!-- DataTables -->
    <script src="{{url('/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{url('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{url('/assets/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{url('/assets/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="{{ asset('/shards-dashboard/scripts/extras.1.1.0.min.js') }}"></script>
    <script src="{{ asset('/shards-dashboard/scripts/shards-dashboards.1.1.0.min.js') }}"></script>
    @stack('js')
</body>

</html>
