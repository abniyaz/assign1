<html>
    <head>
        <title>Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <ul>
                <li>Test Link</li>
                <li>Test Two</li>
            </ul>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>