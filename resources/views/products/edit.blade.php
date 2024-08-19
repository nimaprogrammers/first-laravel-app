<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>create</h1>
        <form action="{{ route('products.update',$product) }}" method="post">
            @csrf
            @method('Patch')
            <div>
                <input name="name" placeholder="name" value="{{ $product->name }}">
                <small class="text-danger">@error('name') {{$message}}@enderror</small>
            </div>
            <div>
                <input name="price" placeholder="price" value="{{ $product->price }}">
                <small class="text-danger">@error('price') {{$message}}@enderror</small>
            </div>
            <div>
                <input name="description" placeholder="description" value="{{ $product->description }}">
                <small class="text-danger">@error('description') {{$message}}@enderror</small>
            </div>
            <div>
                <input name="discount" placeholder="discount" value="{{ $product->discount }}">
                <small class="text-danger">@error('discount') {{$message}}@enderror</small>
            </div>
            <div>
                <input name="image" placeholder="image" value="{{ $product->image }}">
                <small class="text-danger">@error('image') {{$message}}@enderror</small>
            </div>
            <button type="submit"> save </button>
        </form>
    </div>
</body>
</html>
