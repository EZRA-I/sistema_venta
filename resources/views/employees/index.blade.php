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
        <td>last_name</td>
        <td>email</td>
        <td>phone</td>
        <td>address</td>
        <td>post</td>
        <td>city</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($employees as $key => $employee)
        <tr>
            <td>{{ $employees->firstItem() + $key }}.</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->post }}</td>
            <td>{{ $employee->phone }}</td>
            <td>
                {{ $employee->city->name }}
            </td>
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
