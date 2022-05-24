<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from html.kodesolution.live/s/kidspro/v2.1/demo/index-sp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 03:08:28 GMT -->

@include('layouts.v_header')



<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <div class="preloader-dot-loading">
                    <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                </div>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        @include('layouts.v_navbar')


        @yield('content')
        

        @include('layouts.footer')
        
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

<!-- Mirrored from html.kodesolution.live/s/kidspro/v2.1/demo/index-sp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 03:08:28 GMT -->

</html>