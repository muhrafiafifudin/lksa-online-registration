<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
        <title> @yield('title') </title>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

        @include('includes.style')
    </head>
    <body>
        <!-- Loader starts-->
        <div class="loader-wrapper">
            <div class="theme-loader">
                <div class="loader-p"></div>
            </div>
        </div>
        <!-- Loader ends -->

        <!-- Page Wrapper Start -->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <!-- Page Header Start -->
            @include('includes.header')
            <!-- Page Header Ends -->

            <!-- Page Body Start -->
            <div class="page-body-wrapper sidebar-icon">
                <!-- Page Sidebar Start-->
                @include('includes.sidebar')
                <!-- Page Sidebar Ends-->

                <!-- Page Content Starts -->
                @yield('content')
                <!-- Page Content Ends -->

                <!-- Footer Start -->
                @include('includes.footer')
                <!-- Footer Ends -->
            </div>
            <!-- Page Body Ends -->
        </div>
        <!-- Page Wrapper Ends -->

        @include('includes.script')

        @stack('javascript')
    </body>
</html>
