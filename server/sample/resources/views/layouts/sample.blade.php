<html>
    <head><title>@yield('titile')</title></head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2>menu</h2>
        <ul>
            <li>@show</li>
        </ul>
        <hr size="1">
        <div>@yield('content')</div>
        <div>@yield('footer')</div>
    </body>
</html>