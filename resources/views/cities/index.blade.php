<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="btn-group">
    <div><a class="btn btn-success" href="/">Home</a></div>
    <a class="btn btn-info" href={{ route('cities.create') }}>New City</a>
</div>
@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<div class="container col-md-7">
    <table cellpadding="10" cellspacing="1" border="1" class="table table-bordered border-success" >
        <thead class="table-dark">
        <tr>
            <td class="h4">No.</td>
            <td class="h4">Name</td>
            <td class="h4">Description</td>
            <td class="h4">Department</td>
            <td class="h4">Timestamp</td>
            <td class="h4">Action</td>
        </tr>
        </thead>
        <tbody class="table-info">
        @forelse($cities as $key => $city)
            <tr class="border-secondary">
                <td class="h6 text-center">{{ $cities->firstItem() + $key }}.</td>
                <td class="h6 text-center">{{ $city->name }}</td>
                <td class="h6 text-center">{{ $city->description }}</td>
                <td class="h6 text-center">
                    {{ $city->department->name }}
                </td>
                <td class="h6 text-center">{{ $city->created_at->format('F d, Y') }}</td>
                <td class="h6 text-center">
                    <a class="btn btn-outline-success" href="{{ route('cities.edit', $city) }}">Edit</a>

                    <form action="{{ route('cities.delete', $city) }}" method="post">
                        <br>
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No data found in table</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
