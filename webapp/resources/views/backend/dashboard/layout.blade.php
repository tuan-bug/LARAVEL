<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.dashboard.component.head')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include('backend.dashboard.component.slidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @include('backend.dashboard.component.topbar')
                <!-- Page Heading -->
{{--                @include('backend.dashboard.component.title')--}}


                @include($template)

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('backend.dashboard.component.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('backend.dashboard.component.dropdown')

<!-- Bootstrap core JavaScript-->
@include('backend.dashboard.component.script')

</body>

</html>
