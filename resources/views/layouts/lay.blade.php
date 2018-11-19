<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

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