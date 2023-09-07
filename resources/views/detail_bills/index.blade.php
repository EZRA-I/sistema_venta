<div><a href="/">Home</a></div>
<a href={{ route('detail_bills.create') }}>New Detail_Bill</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1" >
    <thead>
    <tr>
        <td>No.</td>
        <td>amount</td>
        <td>Bill</td>
        <td>price</td>
        <td>Product</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($detail_bills as $key => $detail_bill)
        <tr>
            <td>{{ $detail_bills->firstItem() + $key }}.</td>
            <td>{{ $detail_bill->amount }}</td>
            <td>
                {{ $detail_bill->bill->id }}
            </td>
            <td>{{ $detail_bill->price }}</td>

            <td>
                {{ $detail_bill->product->name }}
            </td>

            <td>{{ $detail_bill->created_at->format('F d, Y') }}</td>


            <td>
                <a href="{{ route('detail_bills.edit', $detail_bill) }}">Edit</a>

                <form action="{{ route('detail_bills.delete', $detail_bill) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
