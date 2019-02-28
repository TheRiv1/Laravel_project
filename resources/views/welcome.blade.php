<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
<header>

    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <a href="#">Cart</a>
                <a href="/home">Login</a>
            </div>

        </div>
        <div class="center"><h1>RIV Telecom</h1></div>
    </div>
    {{--<div class="top-nav container">--}}
        {{--<div class="logo">--}}
            {{--Riv Telecom--}}
        {{--</div>--}}
        {{--<ul>--}}
            {{--<li><a href="#">Shop</a></li>--}}
            {{--<li><a href="#">About</a></li>--}}
            {{--<li><a href="/contact">Contact</a></li>--}}
            {{--<li><a href="#">Cart</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}


    
    
    {{--<div class="hero container">--}}
        {{--<div class="hero-copy">--}}
            {{--<h1></h1>--}}
            {{--<p></p>--}}
            {{--<div class="hero-buttons">--}}
                {{--<a href="" class="button button-white">btn1</a>--}}
                {{--<a href="" class="button button-white">btn2</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="hero-image">--}}
           {{--/ <img src="/img/macbook.jpg" style="width: 100%" alt="">--}}
        {{--</div>--}}
    {{--</div>--}}
</header>


@foreach($product as $prod)
    <div class="container-card">
    <div class="product">
        <li>{{$prod->name}}</li>
        <li>{{$prod->slug}}</li>
        <img src="{{asset($prod->img)}}" class="image" style="width:20%"/>
        <li>€{{$prod->price}}</li>
        <li>{{$prod->details}}</li>
        <li>{{$prod->description}}</li>
        <a href="" class="cart_button">add to cart</a>
    </div>
       </div>
    @endforeach

{{--<div class="featured-section">--}}
    {{--<div class="container">--}}
        {{--<h1 class="text-center">products</h1>--}}
        {{--<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
            {{--A assumenda, dignissimos esse harum magni odit pariatur qui quibusdam veritatis voluptatibus?</p>--}}

        {{--<div class="text-center button-container">--}}
            {{--<a href="" class="button">Featured</a>--}}
            {{--<a href="" class="button">On Sale</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="products text-center">--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}
        {{--<div class="product">--}}
            {{--<a href="#"><img src="" alt=""></a>--}}
            {{--<a href="#"><span class="product-name">MacBook</span></a>--}}
            {{--<div class="product-price">€2499.99</div>--}}
        {{--</div>--}}

        {{--<div class="div.text-center button-container">--}}
            {{--<a href="#" class="button">view more products</a>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
</body>
</html>