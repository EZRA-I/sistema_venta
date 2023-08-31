<div><a href="/">Home</a></div>
<a href={{ route('employees.create') }}>New Employee</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1" >
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Surname</td>
        <td>Email</td>
        <td>Post</td>
        <td>Address</td>
        <td>Phone</td>
        <td>City</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($employees as $key => $employee)
        <tr>
            <td>{{ $employees->firstItem() + $key }}.</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->surname }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->post }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->phone }}</td>

            <td>
                {{ $employee->city->name }}
            </td>

            <td>{{ $employee->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee) }}">Edit</a>

                <form action="{{ route('employees.delete', $employee) }}" method="post">
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
