<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
       <!--  @section('sidebar')
            This is the master sidebar.
        @show -->

        <div class="container">
            @yield('content')
        </div>
    </body>
</html> 