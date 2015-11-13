<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('forstersgym.tittle') }}</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap-cosmo.min.css') !!}


    <!-- for extra style -->
     @yield('styles')
</head>

<body>

    <!-- for other pages maine content area -->
    @yield('content')

     <!-- for common js script-->
    {!! Html::script('js/jquery-2.1.4.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}



    <!-- for extra script-->
    @yield('scripts')

</body>
</html>

