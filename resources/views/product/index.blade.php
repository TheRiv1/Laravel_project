<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>product</title>
</head>
<body>
<div class="container_products">
        <h1>products</h1>
    @foreach($product as $prod)
        <div class="product">
            {{--<li>{{$prod->name}}</li>--}}
             {{--<li>{{$prod->slug}}</li>--}}
            <img src="{{asset($prod->img)}}" class="image" style="width:20%"/>
            {{--<li>€{{$prod->price}}</li>--}}
            {{--<li>{{$prod->details}}</li>--}}
            {{--<li>{{$prod->description}}</li>--}}

        </div>
    @endforeach

</div>
</body>
</html>