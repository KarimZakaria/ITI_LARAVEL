<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('admin.update', $product->id) }}" method="POST">
        @csrf
        <label for="name">Enter Name</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}">

        <label for="price">Enter Price</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}">

        <label for="amout">Enter Amount</label>
        <input type="number" name="amount" id="amount" value="{{ $product->amount }}">

        <input type="submit" value="Update product">
    </form>
</body>

</html>
