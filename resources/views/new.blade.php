<h1>New Page in Laravel</h1>

@forelse ($products as $product)
    {{ $product->name }} <br>
@empty
    <h1>No Products Here</h1>
@endforelse
