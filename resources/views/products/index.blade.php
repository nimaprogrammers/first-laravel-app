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
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div>
            <input name="name" placeholder="name">
        </div>
        <div>
            <input name="price" placeholder="price">
        </div>
        <div>
            <input name="description" placeholder="description">
        </div>
        <div>
            <input name="discount" placeholder="discount">
        </div>
        <div>
            <input name="image" placeholder="image">
        </div>
        <button type="submit"> save </button>
    </form>
</body>
</html>
