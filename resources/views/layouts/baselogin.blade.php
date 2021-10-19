<!DOCTYPE html>
<html lang="es">

<!-- Este es el header. en donde esta los links del css -->

    <head>
        @include('admin.headlogin')
    </head>

<body id="page-top">
   <div id="wrapper">

    <!-- Page Wrapper -->
    <div id="content">

        <!-- Content Wrapper -->
     <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
            <!-- Contenido -->
            <div class="container-fluid">
                @yield('content')
            </div>


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Kiros soluciones 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Scripts-->
 {{-- @include('admin.script') --}}

</body>

</html>
