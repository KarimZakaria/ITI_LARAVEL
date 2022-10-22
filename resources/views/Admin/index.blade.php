<table>
    <tr>
        <th>name</th>
        <th>price</th>
        <th>amont</th>
        <th>Actions</th>
    </tr>
    @forelse($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->amount }}</td>
            <td>
                <a href="{{ route('admin.show', $product->id) }}">Show</a>
                <a href="{{ route('admin.edit', $product->id) }}">Edit</a>
            </td>
        @empty
            No Products
        </tr>
    @endforelse

</table>
