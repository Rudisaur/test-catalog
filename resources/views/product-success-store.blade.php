<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .centered-form {

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="centered-form">
    <span>Товар успешно создан: {{$name}}</span>
    <span>Цена товара: {{$price}}</span>

    <a href="/admin">Вернуться на страницу администрирования</a>
</div>
</body>
</html>
