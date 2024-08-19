<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <th scope="row">{{ $product->name }}</th>
                    <th scope="row">{{ $product->price }}</th>
                    <th scope="row">{{ $product->discount }}</th>
                    <th scope="row">{{ $product->description }}</th>
                    <th scope="row">{{ $product->image }}</th>
                    <th scope="">
                        <div class="row">
                            <a class="btn btn-info" type="button" href="{{route('products.edit',$product)}}">edit</a>
                            <form method="post" action="/products/{{$product->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <a type="submit" class="btn btn-danger col">delete</a>
                            </form>
                        </div>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
