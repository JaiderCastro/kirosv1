<!DOCTYPE html>
<html lang="es"><head>
	<meta charset="UTF-8">
	<title>K-iros Soluciones</title>
</head>
<!-- Este es el header. en donde esta los links del css -->

    <head>
        @include('admin.head')
    </head>

<body>


<!-- Page Wrapper -->

    <div class="wrapper">
        <div class="top_navbar">
          <div class="hamburger">
             <div class="one"></div>
             <div class="two"></div>
             <div class="three"></div>
          </div>
          <div class="top_menu">
            <div class="logo">K-iros Soluciones</div>
            <ul>
              <li><a href="#">
                <i class="fas fa-search"></i></a></li>
              <li><a href="#">
                <i class="fas fa-bell"></i>
                </a></li>

            </ul>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

          </div>
     </div> <br> <br>

    <!-- Sidebar -->
        @include('admin.sidebar')



        <!-- Main Content -->
        <div class="main_container">






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


    <!-- End of Content Wrapper -->

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Scripts-->
 @include('admin.scripts')

 <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script>
     $(document).ready(function(){
         $(".hamburger").click(function(){
            $(".wrapper").toggleClass("collapse");
         });
     });
 </script>

</body>

</html>
