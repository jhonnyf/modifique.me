<!doctype html>
<html lang="pt-br">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        @if (App::environment(['local', 'staging']))
            <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
        @else
            <link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">    
        @endif
        <title>Modifique.me!</title>
    </head>
  <body>
    @include('header')
    <main>
        @yield('content')    
    </main>
    @include('footer')
    @if (App::environment(['local', 'staging']))
        <script src="{{ asset('js/vendor.js') }}"></script>    
        <script src="{{ asset('js/app.js') }}"></script>    
    @else
        <script src="{{ asset('js/vendor.min.js') }}"></script>    
        <script src="{{ asset('js/app.min.js') }}"></script>    
    @endif    
  </body>
</html>