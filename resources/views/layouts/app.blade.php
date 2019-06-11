<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Electro - HTML Ecommerce Template</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    @include ('common.header') @yield('content') @include ('common.footer')
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <script src="{{ asset('js/nouislider.min.js')}}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script>
        $( ".review-link" ).click(function() {
          	  $( "ul>li>.first" ).removeClass( "active" );
          	  $( "ul>li>.second" ).addClass( "active" );
             $( "#tab1" ).removeClass( "active" );
             $( "#tab3" ).addClass( "active" ); 
         });
    </script>
</body>
</html>
