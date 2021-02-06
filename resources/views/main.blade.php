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
        @if (App::environment(['production']))
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-NTKNL7MYFB"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-NTKNL7MYFB');
            </script>
        @endif
    </head>
  <body>
    @include('header')
    @yield('publicity-large')
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
    @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
        //]]></script>
    @endif    
  </body>
</html>