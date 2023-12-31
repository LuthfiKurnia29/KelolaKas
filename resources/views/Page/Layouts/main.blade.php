<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href={{ asset("assets/images/logos/favicon.png") }} />
  <link rel="stylesheet" href={{ asset("assets/css/styles.min.css") }} />
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
</head>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('Page.Partials.Sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('Page.Partials.Navbar')
      <!--  Header End -->
      @yield('content')
    </div>
  </div>
  <script src={{ asset("assets/libs/jquery/dist/jquery.min.js") }}></script>
  <script src={{ asset("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("assets/js/sidebarmenu.js") }}></script>
  <script src={{ asset("assets/js/app.min.js") }}></script>
  <script src={{ asset("assets/libs/apexcharts/dist/apexcharts.min.js") }}></script>
  <script src={{ asset("assets/libs/simplebar/dist/simplebar.js") }}></script>
  <script src={{ asset("assets/js/dashboard.js") }}></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
</body>

</html>