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
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('dashboard/images/users/avatar-1.jpg') }}" alt="user-image"
                            class="rounded-circle">
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow text-white m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings-outline"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('dashboard/images/logo.png') }}" alt="" height="35">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="{{ asset('dashboard/images/logo-sm.png') }}" alt="" height="35">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('dashboard/images/logo-light.png') }}" alt="" height="35">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="{{ asset('dashboard/images/logo-sm-light.png') }}" alt="" height="35">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>



            </ul>
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li>
                            <a href="index.html">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Home </span>
                            </a>
                        </li>
                        <li>
                            <a href="emptyPage.html">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Empty Page </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-table-settings"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="#">Tables 1</a></li>
                                <li><a href="#">Tables 2</a></li>
                            </ul>
                        </li>


                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Volcano</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hom</a></li>
                                        <li class="breadcrumb-item active">Home</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Home</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">







                                <div class="row ">


                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Select</label>
                                            <select class="form-control" data-toggle="select2">
                                                <option>Select</option>
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label class="control-label">Multi Select</label>
                                            <select class="form-control select2-multiple" data-toggle="select2"
                                                multiple="multiple" data-placeholder="Choose ...">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label>True multi value</label>
                                            <select multiple data-role="tagsinput">
                                                <option value="Amsterdam">Amsterdam</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Sydney">Sydney</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label>Input Tags</label>
                                            <div class="tags-default">
                                                <input type="text" value="Amsterdam,Washington,Sydney"
                                                    data-role="tagsinput" placeholder="add tags" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label>Input</label>
                                            <input type="text" class="form-control" name="defaultconfig" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Min check</label>
                                            <div>
                                                <div class="checkbox checkbox-custom">
                                                    <input id="checkbox1" type="checkbox"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label for="checkbox1"> And this </label>
                                                </div>
                                                <div class="checkbox checkbox-pink">
                                                    <input id="checkbox2" type="checkbox"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                    <label for="checkbox2"> Can't check this </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox3" type="checkbox"
                                                        data-parsley-multiple="groups" data-parsley-mincheck="2"
                                                        required>
                                                    <label for="checkbox3"> This too </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Max check</label>
                                            <div>
                                                <div class="checkbox checkbox-pink">
                                                    <input id="checkbox4" type="checkbox"
                                                        data-parsley-multiple="group1">
                                                    <label for="checkbox4"> And this </label>
                                                </div>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox"
                                                        data-parsley-multiple="group1">
                                                    <label for="checkbox5"> Can't check this </label>
                                                </div>
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox6" type="checkbox"
                                                        data-parsley-multiple="group1" data-parsley-maxcheck="1">
                                                    <label for="checkbox6"> This too </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label>Textarea</label>
                                            <textarea required class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label>File Upload</label>
                                            <input type="file" class="form-control" name="" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label>Textarea</label>

                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->



                            </div>
                        </div><!-- end col-->

                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title">Data Table</h4>
                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-trash-can-outline"></i></span>Delete
                                                </button>
                                                <a href="#" type="button"
                                                    class="btn btn-info waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-playlist-edit"></i></span>Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <a href="#" type="button"
                                                    class="btn btn-danger waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-trash-can-outline"></i></span>Delete
                                                </a>
                                                <a href="#" type="button"
                                                    class="btn btn-info waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-playlist-edit"></i></span>Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-trash-can-outline"></i></span>Delete
                                                </button>
                                                <a href="#" type="button"
                                                    class="btn btn-info waves-effect waves-light">
                                                    <span class="btn-label"><i
                                                            class="mdi mdi-playlist-edit"></i></span>Edit
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card-box">
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                            Save
                                        </button>
                                        <button type="reset" class="btn btn-danger waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- end container-fluid -->

            </div> <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2024 &copy; Volcano
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

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
