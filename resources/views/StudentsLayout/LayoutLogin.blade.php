<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<!-- Header sẽ dùng chung bên list -->
<header><h1 class="header">@yield('header')</h1></header>
<div>@yield('content')</div>
<footer>@yield('footer')</footer>
</body>
</html>