<div><a href="/">Home</a></div>
<a href={{ route('customers.create') }}>New Customer</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1" >
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Last_name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td>City</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($customers as $key => $customer)
        <tr>
            <td>{{ $customers->firstItem() + $key }}.</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->address }}</td>
            <td>
                {{ $customer->city->name }}
            </td>
            <td>
                <a href="{{ route('customers.edit', $customer) }}">Edit</a>

                <form action="{{ route('customers.delete', $customer) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="10">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
