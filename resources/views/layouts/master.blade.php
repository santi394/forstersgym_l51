<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('forstersgym.tittle') }}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-cosmo.min.css">

    <!-- for extra style -->
     @yield('styles')
</head>

<body>

    <!-- for other pages maine content area -->
    @yield('content')

     <!-- for common js script-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- for extra script-->
    @yield('scripts')

</body>
</html>

