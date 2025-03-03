<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать товар</title>
</head>
<body>
    <H1>Создать товар</H1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Название
                <input type="text" name="name" required placeholder="Название">
            </label>
        </div>

        <div>
            <label>Бренд
                <select name="brand_id">
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div>
            <label>Описание
                <input type="text" name="description" placeholder="Описание">
            </label>
        </div>

        <div>
            <label>Цена
                <input type="number" name="price" step="0.01" min="0" required value="1.00">
            </label>
        </div>
        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
</body>
</html>
