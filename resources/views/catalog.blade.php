<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<div>
    @foreach ($products as $item)
        <div>
            <h2>{{ $item['name'] }}</h2>

            <p>{{ $item['price'] }}</p>
            <img src="{{ asset('storage/' . $item['link_to_image']) }}" alt="Изображение товара">
        </div>
    @endforeach

</div>
</body>
</html>
