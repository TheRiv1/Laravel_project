1  <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
</head>
<body>
@yield('content', 'Default Content')
<div class="bg-img">
    <div class="container">
        <div class="topnav">
            <a href="#">Shop</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="#">Cart</a>
        </div>
    </div>
</body>
</html>