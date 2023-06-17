<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .product-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 20px;
        }

        .image {
            width: 100%;
            height: auto;
        }

        .product {
            background-color: blanchedalmond;
            padding: 20px;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="product-wrapper">
    @foreach ($products as $item)
        <div class="product">
            <h2>{{ $item['name'] }}</h2>
            <h3>Цена: {{ $item['price'] }} ₸</h3>
            <img class="image" src="{{ asset('storage/' . $item['link_to_image']) }}" alt="Изображение товара">
        </div>
    @endforeach
</div>
</body>

</html>
