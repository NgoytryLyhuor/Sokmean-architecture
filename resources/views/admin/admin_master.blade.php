<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Norkor Architecture</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/icon.png') }}">


        <!-- jquery.vectormap css -->
        <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Lato:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">

        {{-- Dark Mode --}}
        <link href="{{ asset('backend/assets/css/bootstrap-dark.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/app-dark.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        {{-- light Mode --}}
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('global.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <style>
        *{
            font-family: Roboto,Hanuman;
        }
    </style>
    <body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include('admin.body.header')
            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.body.sidebar')
            <!-- Left Sidebar End -->
            <div class="main-content">
                @yield('admin')
                <!-- End Page-content -->
                @include('admin.body.footer')
            </div>
            <!-- end main content-->
        </div>

        <!-- END layout-wrapper -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>


        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

        <!--tinymce js-->
        <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/tinymce/script.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }}"></script>


    </body>

</html>
