<div><a href="/">Home</a></div>
<a href="{{ route('products.create') }}">New Product</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1" >
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Amount</td>
        <td>Price</td>
        <td>Provider</td>
        <td>Category</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $key => $product)
        <tr>
            <td>{{ $products->firstItem() + $key}}.</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->amount }}</td>
            <td>{{ $product->price }}</td>
            <td>
                {{ $product->provider->name }}
            </td><td>
                {{ $product->category->name }}
            </td>
            <td>{{ $product->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{ route('products.edit', $product) }}">Edit</a>

                <form action="{{ route('products.delete', $product) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="9">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
