<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <label for="name">Enter Name</label>
        <input type="text" name="name" id="name">

        <label for="price">Enter Price</label>
        <input type="number" name="price" id="price">

        <label for="amout">Enter Amount</label>
        <input type="number" name="amount" id="amount">

        <input type="submit" value="Add Product">
    </form>
</body>

</html>
