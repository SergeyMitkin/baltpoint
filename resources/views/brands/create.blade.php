<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать бренд</title>
</head>
<body>
    <H1>Создать бренд</H1>

    <div>
        @if(session()->has('existing_brand_name'))
            <span>Бренд с таким названиемуже существует!</span>
        @endif
    </div>

    <form method="post" action="{{ route('brand.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Название
                <input type="text" name="name" required placeholder="Название"
                @if(session()->has('existing_brand_name'))
                    value="{{ session('existing_brand_name') }}"
                @endif
                >
            </label>
        </div>

        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
</body>
</html>
