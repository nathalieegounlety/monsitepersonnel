<!DOCTYPE html>
<html lang="en">


<!-- head -->
@include('include.head')
<!-- end head -->

<body>
    <!-- header -->
    @include('include.header')
    <!-- //header -->

    <!-- contenu dynamique de la page -->
    @yield('container')
    <!-- end contenu dynamique de la page -->

    <!-- footer -->
    @include('include.footer')
    <!-- //footer -->

    <!-- Js scripts -->
    @include('include.jsScript')
    <!-- //Js scripts -->

</body>

<!-- Fin du contenu -->

</html>
