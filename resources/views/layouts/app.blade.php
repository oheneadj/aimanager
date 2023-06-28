<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="/assets/css/demo.css" />

        <!-- Helpers -->
        <script src="../assets/vendor/js/helpers.js"></script>
        <script src="../assets/js/config.js"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
          <div class="layout-container">
            <!-- Side Menu -->
            @include('layouts.sidebar')
            <!-- / Side Menu -->

            <!-- Layout container -->
            <div class="layout-page">

              <!-- Top Navbar -->            
              @include('layouts.navigation')
              <!-- / Top Navbar -->

              <!-- Content wrapper -->
              <div class="content-wrapper">
                <!-- Content -->
                <main>
                    {{ $slot }}
                </main>
                <!-- / Content -->
    
                <!-- Footer -->
                @include('layouts.footer')
                <!-- / Footer -->
    
                <div class="content-backdrop fade"></div>
              </div>
              <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
          </div>
    
          <!-- Overlay -->
          <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- Layout wrapper -->
        <div class="buy-now">
          <a
            href="https://oheneadjei.com"
            target="_blank"
            class="btn btn-danger btn-buy-now"
            >Developed by Ohene</a>
        </div>
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/vendor/libs/popper/popper.js"></script>
        <script src="../assets/vendor/js/bootstrap.js"></script>
        <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->
        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>
        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
      </body>
</html>
