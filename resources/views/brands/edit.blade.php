<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактировать бренд</title>
</head>
<body>
<H1>Редактировать бренд</H1>
<form method="post" action="{{ route('brand.store') }}">
    @csrf
    @method('post')
    <input type="hidden" name="id" value="{{ $brand->id }}">

    <div>
        <label>Название
            <input type="text" name="name" required placeholder="Название" value="{{ $brand->name }}">
        </label>
    </div>

    <div>
        <input type="submit" value="Сохранить">
    </div>
</form>
</body>
</html>

