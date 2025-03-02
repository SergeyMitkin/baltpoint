<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Бренды</title>
</head>
<body>
<nav>
    <a href="{{ route('index') }}">Товары</a>
</nav>

<H1>Бренды</H1>

<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
        </tr>
        @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
                <td>
                    <a href="{{ route('brand.edit', ['brand' => $brand]) }}"><button>Редактировать</button></a>
                </td>
                <td>
                    <form method="post" action="{{ route('brand.delete', ['brand' => $brand->id]) }}">
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
