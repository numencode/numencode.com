<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ isset($title) ? $title . ' - ' : null }}Numencode - Content Management System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Blaz Orazem">
    <meta name="description" content="Numencode - Content Management System.">
    <meta name="keywords" content="laravel, php, cms, web, artisans, blaz orazem">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (isset($canonical))
        <link rel="canonical" href="{{ url($canonical) }}" />
    @endif
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('assets/css/numencode.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:300,400,400i,700&amp;subset=latin-ext">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext">
    <link rel="apple-touch-icon" href="/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
</head>
<body class="@yield('body-class', 'docs')">
    <span class="overlay"></span>

    <div class="search-section">
        <div class="container">
            <nav class="main">
                <div class="logo">
                    <a href="/" class="brand nav-block">
                        {!! svg('numencode-logo') !!}
                        <strong>numen<span>code</span></strong>
                    </a>
                </div>
                <div class="menu">
                    <ul class="main-nav">
                        @include('partials.main-nav')
                    </ul>

                    @if (Request::is('docs*') && isset($currentVersion))
                        @include('partials.switcher')
                    @endif

                    <div class="responsive-sidebar-nav">
                        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    @yield('content')

    <footer class="main">
        <ul>
            @include('partials.main-nav')
        </ul>
        <p>Numencode is a trademark of Blaz Orazem. Copyright &copy; Blaz Orazem.</p>
    </footer>

    <script src="{{ elixir('assets/js/numencode.js') }}"></script>
    <script src="/assets/js/viewport-units-buggyfill.js"></script>
    <script>window.viewportUnitsBuggyfill.init();</script>
    <script>
        // var _gaq=[['_setAccount','UA-99999999-1'],['_trackPageview']];
        // (function(d,t){
        //     var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        //     g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        //     s.parentNode.insertBefore(g,s)
        // }(document,'script'));
    </script>
</body>
</html>
