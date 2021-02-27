<!DOCTYPE html>
<html lang="es">
@include('layouts.src.head')
<body id="page-top">

    <!--/ header /-->
    @include('layouts.src.header')
    <!--/ header end /-->

    @yield('content')

    
    <!--/ footer /-->
    @include('layouts.src.footer')
    <!--/ footer end /-->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('assets/lib/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/counterup/jquery.counterup.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/lib/typed/typed.min.js')}}"></script>

    <script src="{{asset('assets/lib/jquery/nieve.js')}}"></script>
    {{-- navidad --}}
    {{-- <script>
        $(document).ready(function(){
        $.fn.snow();
        })
    </script> --}}
    <!-- Contact Form JavaScript File -->
    <!-- <script src="contactform/contactform.js"></script> -->

    <!-- Template Main Javascript File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>