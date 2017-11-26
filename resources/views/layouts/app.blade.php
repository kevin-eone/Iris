<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/meteor.css')}}">
        <link rel="stylesheet" href="{{asset('css/extra.css')}}">
        <!--<script type="text/javascript" src="//code.jquery.com/jquery-3.2.1.min.js"></script>-->
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/extra-head.js')}}"></script>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>

    
    <script type="text/javascript" src="{{asset('js/meteor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/resources.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/extra-body.js')}}"></script>

    </body>
    
</html>
