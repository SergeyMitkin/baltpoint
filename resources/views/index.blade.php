<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товары</title>
</head>
<body>
<H1>Товары</H1>

<div>
    <a href="{{ route('product.create') }}"><button>Создать товар</button></a>

    <a href="{{ route('brand.create') }}"><button>Создать бренд</button></a>
</div>

<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Бренд</th>
            <th>Описание</th>
            <th>Количество</th>
            <th>Цена</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('product.edit', ['product' => $product]) }}"><button>Редактировать</button></a>
                </td>
                <td>
                    <form method="post" action="{{ route('product.delete', ['product' => $product->id]) }}">
                        @csrf
                        @method('post')
                        <input type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
