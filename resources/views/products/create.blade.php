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
    <H1>Create a product</H1>
    <form method="post" action="">
        <div>
            <label>Название
                <input type="text" name="name" placeholder="Название">
            </label>
        </div>

        <div>
            <label>Описание
                <input type="text" name="description" placeholder="Описание">
            </label>
        </div>

        <div>
            <label>Цена
                <input type="number" name="price" placeholder="1.00" min="0">
            </label>
        </div>

        <div>
            <label>Quanity
                <input type="number" name="quantity" value="1" min="0">
            </label>
        </div>

        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
</body>
</html>
