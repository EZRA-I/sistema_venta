<div><a href="/">Home</a></div>
<a href={{ route('providers.create') }}>New Provider</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1" >
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Last_Name</td>
        <td>Email</td>
        <td>Post</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Category</td>
        <td>City</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($providers as $key => $provider)
        <tr>
            <td>{{ $providers->firstItem() + $key }}.</td>
            <td>{{ $provider->name }}</td>
            <td>{{ $provider->last_name }}</td>
            <td>{{ $provider->email }}</td>
            <td>{{ $provider->post }}</td>
            <td>{{ $provider->address }}</td>
            <td>{{ $provider->phone }}</td>

            <td>
                {{ $provider->category->name }}
            </td>

            <td>
                {{ $provider->city->name }}
            </td>
            <td>{{ $provider->created_at->format('F d, Y') }}</td>


            <td>
                <a href="{{ route('providers.edit', $provider) }}">Edit</a>

                <form action="{{ route('providers.delete', $provider) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="11">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
