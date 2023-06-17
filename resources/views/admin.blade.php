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
        .product-label {
            font-size: medium;
        }
        .centered-form * {
            height: 30px;
            width: 200px;
            margin-bottom: 10px;
            font-size: medium;
        }
    </style>
</head>
<body>
<div class="centered-form">
    <form method="POST" action="/store" enctype="multipart/form-data">
        @csrf

        <div>
            <label class="product-label" for="name">Название товара</label>
        </div>

        <div>
            <input type="text" name="name" id="name" placeholder="Введите название товара" required>
        </div>

        <div>
            <label class="product-label" for="price">Цена товара</label>
        </div>

        <div>
            <input type="number" name="price" id="price" placeholder="Введите цену товара" required>
        </div>

        <div>
            <label class="product-label" for="image">Загрузить картинку</label>
        </div>

        <div>
            <input type="file" name="image" id="image" required>
        </div>

        <button type="submit">Отправить</button>
    </form>
</div>

</body>
</html>
