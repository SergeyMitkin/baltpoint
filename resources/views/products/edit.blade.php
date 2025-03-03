<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактировать товар</title>
</head>
<body>
    <nav>
        <a href="{{ route('index') }}">Товары</a>
        <a href="{{ route('brand.index') }}">Бренды</a>
    </nav>

    <H1>Редактировать товар</H1>

    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <input type="hidden" name="id" value="{{ $product->id }}">

        <div>
            <label>Название
                <input type="text" name="name" required placeholder="Название" value="{{ $product->name }}">
            </label>
        </div>

        <div>
            <label>Бренд
                <select name="brand_id">
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" <?php echo ($brand->id === $product->brand_id) ? 'selected' : '';?>>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>

        <div>
            <label>Описание
                <input type="text" name="description" placeholder="Описание" value="{{ $product->description }}">
            </label>
        </div>

        <div>
            <label>Цена
                <input type="number" name="price" step="0.01" min="0" required value="{{ $product->price }}">
            </label>
        </div>

        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
</body>
</html>

