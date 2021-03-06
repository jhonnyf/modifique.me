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
        <meta name="language" content="pt-BR">
        <title>Modifique.me!</title>
        <meta name="description" content="Uma ferramenta pratica e confiável para modificar o seu texto, transformando-o em maiúsculo, minúsculo, e muitas outras funcionalidades">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Jhonny Fialho">
        <meta name="keywords" content="texto maiúsculo, texto minúsculo, modificar texto, alterar texto, primeira letra maiúscula, edição de texto">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        @if (App::environment(['production']))
            <script data-ad-client="ca-pub-6071138168864836" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
        <main>
            @yield('publicity-large')
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @yield('about')
                    </div>
                    <div class="col-md-9">
                        @yield('content')    
                    </div>            
                </div>
            </div>    
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