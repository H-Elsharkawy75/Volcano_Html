<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Volcano Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('dashboard/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/libs/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Table datatable css -->
    <link href="{{ asset('dashboard/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('dashboard/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashboard/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        @include('dashboardlayout.navbar')
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        @include('dashboardlayout.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
        @yield('content')
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->




    <!-- Vendor js -->
    <script src="{{ asset('dashboard/js/vendor.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('dashboard/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/raphael/raphael.min.js') }}"></script>

    <!-- Dashboard init js-->
    <script src="{{ asset('dashboard/js/pages/dashboard.init.js') }}"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('dashboard/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('dashboard/libs/jquery-quicksearch/jquery.quicksearch.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <!-- form advanced init -->
    <script src="{{ asset('dashboard/js/pages/form-advanced.init.js') }}"></script>
    <!-- Datatable plugin js -->
    <script src="{{ asset('dashboard/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('dashboard/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('dashboard/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('dashboard/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/pdfmake/vfs_fonts.js') }}"></script>

    <script src="{{ asset('dashboard/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/datatables/buttons.print.min.js') }}"></script>

    <script src="{{ asset('dashboard/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('dashboard/libs/datatables/dataTables.select.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('dashboard/js/pages/datatables.init.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('dashboard/js/app.min.js') }}"></script>

</body>

</html>
