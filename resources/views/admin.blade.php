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


        .centered-form * {
            height: 30px;
            width: 300px;
            margin-bottom: 30px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="centered-form">
    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Название товара</label>
        <br/>
            <input type="text" name="name" id="name" placeholder="Введите название товара" required>
        </div>

        <div>
            <label for="price">Цена товара</label>
            <br/>
            <input type="number" name="price" id="price" placeholder="Введите цену товара" required>
        </div>

        <div>
            <label for="image">Загрузить картинку</label>
            <br/>
            <input type="file" name="image" id="image" required>
        </div>

        <button type="submit">Отправить</button>
    </form>
</div>

</body>
</html>
