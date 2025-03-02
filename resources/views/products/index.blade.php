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
    <H1>Product</H1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Количество</th>
                <th>Цена</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
