<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    {{ HTML::style('https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|Roboto+Condensed') }}
    {{-- HTML::style('css/Reset.css') --}}
    @yield('pagetitle')
    @yield('headers')
</head>
<body>
@yield('maincontent')
@yield('footers')
</body>
</html>
