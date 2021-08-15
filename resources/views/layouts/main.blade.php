<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>

<body>
    {{-- @include('includes.loader') --}}

    <!-- Start wrapper-->
    <div id="wrapper">

        @if(\Auth::check())
            @include('includes.navbar')
        @endif

        <!-- Content -->
        @yield('content')


        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        @include('includes.footer')

        @include('includes.rightsidebar')

    </div><!--End wrapper-->

    @include('includes.scripts')

</body>
</html>
