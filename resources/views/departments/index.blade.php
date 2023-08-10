<div><a href="/">Home</a></div>
<a href="{{ route('departments.create') }}">New Department</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellpacing="1" border="1" >
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($departments as $key => $department)
        <tr>
            <td>{{ $departments->firstItem() + $key }}.</td>
            <td>{{ $department->name }}</td>
            <td>
                <a href="{{ route('departments.edit', $department) }}">Edit</a>

                <form action="{{ route('$departments.delete', $department) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
