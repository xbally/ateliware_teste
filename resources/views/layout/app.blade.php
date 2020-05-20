<html>
    <head>
         <title>Framework</title>
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    </head>
    <style>
            body {
                padding: 20px;
            }
            .navbar {
                margin-bottom: 20px;
            }
        </style>
    <body>
     <div class="container">
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
